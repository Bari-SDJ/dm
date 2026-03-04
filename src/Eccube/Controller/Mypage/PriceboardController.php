<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Controller\Mypage;

use Eccube\Controller\AbstractController;
use Eccube\Entity\BaseInfo;
use Eccube\Entity\CustomerAddress;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Form\Type\Front\CustomerAddressType;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\CustomerAddressRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;



use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;



class PriceboardController extends AbstractController
{
    /**
     * @var BaseInfo
     */
    protected $BaseInfo;

    /**
     * @var CustomerAddressRepository
     */
    protected $customerAddressRepository;

    public function __construct(BaseInfoRepository $baseInfoRepository, CustomerAddressRepository $customerAddressRepository)
    {
        $this->BaseInfo = $baseInfoRepository->get();
        $this->customerAddressRepository = $customerAddressRepository;//->findBy([], ['id' => 'DESC']);
       // $Members = $this->memberRepository->findBy([], ['sort_no' => 'DESC']);
       // $this->orderStatusRepository->findBy([], ['sort_no' => 'ASC'])
       //exit();
    }

    /**
     * お届け先一覧画面.
     *
     * @Route("/mypage/priceboard", name="mypage_priceboard", methods={"GET"})
     * @Template("Mypage/priceboard.twig")
     */
    public function index(Request $request)
    {
       // echo $_SERVER['DOCUMENT_ROOT']; exit();
        // . rtrim($_SERVER['SCRIPT_NAME'],basename($_SERVER['SCRIPT_NAME'])) "; exit();
        $Customer = $this->getUser();
        //var_dump($this->getUser()->getId());
        return [
            'Customer' => $Customer,
            'CustomerId' => $Customer->getId()
        ];
    }

    /**
     * お届け先編集画面.
     *
     * @Route("/mypage/priceboard/new", name="mypage_priceboard_new", methods={"GET", "POST"})
     * @Route("/mypage/priceboard/{id}/edit", name="mypage_priceboard_edit", requirements={"id" = "\d+"}, methods={"GET", "POST"})
     * @Template("Mypage/priceboard_edit.twig")
     */
    public function edit(Request $request, $id = null)
    {
        $Customer = $this->getUser();
        

        // 配送先住所最大値判定
        // $idが存在する際は、追加処理ではなく、編集の処理ため本ロジックスキップ
        if (is_null($id)) {
           
            $addressCurrNum = count($Customer->getCustomerAddresses());
            $addressMax = $this->eccubeConfig['eccube_deliv_addr_max'];
            if ($addressCurrNum >= $addressMax) {
                throw new NotFoundHttpException();
            }
            $CustomerAddress = new CustomerAddress();
            $CustomerAddress->setCustomer($Customer);

                       // var_dump($CustomerAddress->getId());

            //var_dump($Customer->getCustomerAddresses()|last );

        } else {
            $CustomerAddress = $this->customerAddressRepository->findOneBy(
                [
                    'id' => $id,
                    'Customer' => $Customer,
                ], ['sort_no' => 'ASC']
            );
        //   'OrderStatuses' => $this->orderStatusRepository->findBy([], ['sort_no' => 'ASC']), ];
            if (!$CustomerAddress) {
                throw new NotFoundHttpException();
            }
        }

        $parentPage = $request->get('parent_page', null);

        // 正しい遷移かをチェック
        $allowedParents = [
            $this->generateUrl('mypage_priceboard'),
            $this->generateUrl('shopping_redirect_to'),
        ];

        // 遷移が正しくない場合、デフォルトであるマイページの配送先追加の画面を設定する
        if (!in_array($parentPage, $allowedParents)) {
            // @deprecated 使用されていないコード
            $parentPage = $this->generateUrl('mypage_priceboard');
        }

        $builder = $this->formFactory
            ->createBuilder(CustomerAddressType::class, $CustomerAddress);

        $event = new EventArgs(
            [
                'builder' => $builder,
                'Customer' => $Customer,
                'CustomerAddress' => $CustomerAddress,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_MYPAGE_PRICEBOARD_EDIT_INITIALIZE, $event);

        $form = $builder->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() ){// && $form->isValid()) {
            log_info('お届け先登録開始', [$id]);

            $this->entityManager->persist($CustomerAddress);
            $this->entityManager->flush();

            log_info('お届け先登録完了', [$id]);

            $event = new EventArgs(
                [
                    'form' => $form,
                    'Customer' => $Customer,
                    'CustomerAddress' => $CustomerAddress,
                ],
                $request
            );
            $this->eventDispatcher->dispatch(EccubeEvents::FRONT_MYPAGE_PRICEBOARD_EDIT_COMPLETE, $event);
 
            return $this->redirect($this->generateUrl('mypage_priceboard'));
           //return $this->redirect('/eccube-mylocal/ec-cube/src/tcpdf/examples/example_033.php');

        } 
        //var_dump("bmmmmmmmmmmmmmmmm: edit". $request->request->get('username'));
        
        /* collect site item info */
        $url = $request->request->get('username');
        $siteInfo = "";
        $siteInfo = $this->parser($url, $Customer);

       // var_dump($Customer->getId());exit();
        //var_dump($this->getUser()->getId());
        //echo " bm congrol";exit();
        //return $this->redirect('/eccube-mylocal/ec-cube/src/tcpdf/examples/example_033.php');
       
        return [
            'siteInfo' => $siteInfo,
            'CustomerId' => $Customer->getId(),
            'Customer' => $Customer,
            'form' => $form->createView(),
            'parentPage' => $parentPage,
            'BaseInfo' => $this->BaseInfo,
        ];
    }

    /**
     * お届け先を削除する.
     *
     * @Route("/mypage/priceboard/{id}/delete", name="mypage_priceboard_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CustomerAddress $CustomerAddress)
    {
        $this->isTokenValid();

        log_info('お届け先削除開始', [$CustomerAddress->getId()]);

        $Customer = $this->getUser();

        if ($Customer->getId() != $CustomerAddress->getCustomer()->getId()) {
            throw new BadRequestHttpException();
        }

        $this->customerAddressRepository->delete($CustomerAddress);

        $event = new EventArgs(
            [
                'Customer' => $Customer,
                'CustomerAddress' => $CustomerAddress,
            ], $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_MYPAGE_PRICEBOARD_DELETE_COMPLETE, $event);

        log_info('お届け先削除完了', [$CustomerAddress->getId()]);

        return $this->redirect($this->generateUrl('mypage_priceboard'));
    }
    function parser($url, $Customer)
    {
        //var_dump("parser:". $url);
        $carDetails = ['Displacement'=>'', 'Year'=>'', 'CarModel'=>'', 'ChassisNumber'=>'', 'NumberOfDoors'=>'', 
        'VehicleInspection'=>'', 'Manufacturer'=>'', 'Mileage'=>'', 'RepairHistory'=>'', 'WarrantyDetails'=>'', 'VehiclePrice'=>'', 
        'AdditionalLineTotal'=>'', 'CarTransportationFee'=>'', 'TransportationCosts'=>'', 'TradeInVehicleName'=>'', 'Color'=>'', 
        'VehicleNumber'=>'', 'Mileage'=>'', 'EnvironmentalPerformanceTax'=>'', 'AutomobileTax'=>'', 'AutomobileLiabilityInsurancePremium'=>'', 
        'WeightTax'=>'', 'RecyclingDeposit'=>'', 'Campaign'=>'', 'SpecialDiscount'=>'', 'Others'=>'', 'VehiclePrice'=>'', 'LandTransportationFee'=>'', 
        'note1'=>'','note1'=>'',
        'image0'=>'','image1'=>'','image2'=>'','image3'=>'','image4'=>'','image5'=>'',
         'VehiclePrice'=>'0','OtherPrice'=>'0'
         ,'CompanyName'=>'' ,'OwnerName'=>'' ,'CompanyAddress'=>'' ,'CompanyPhone'=>'' ,'CompanyFax'=>'' ,'CompanyMobilePhone'=>'' ,'CompanyEmail'=>'' ,'BankInfo'=>'' ,'CompanyRegistrationNumber'=>'' ,'CompanyLicenseNumber'=>''
         ,'Display01'=>''];
       
        //Note Preparaton
        $note = $Customer->getNote();
        $pos1 = strrpos($note,"1st",0);
        $noteFirst = substr($note,0,$pos1);
        $pos2 = strrpos($note,"2nd",0);
        $noteSecond = substr($note,($pos1+3),($pos2-$pos1-4));
        //var_dump($noteSecond);
        $carDetails['note1'] = $noteFirst;
        $carDetails['note2'] = $noteSecond;
/*

        <br>&nbsp;銀行：東日本銀行<br>&nbsp;支店：松戸支店(403)<br>&nbsp;口座：0619181(普通)<br>&nbsp;名義：(カ)エムシーアイインターナショナル
        1st
        &nbsp;〒270－2241千葉県松戸市松戸新田９<br>&nbsp;TEL：047-367-5107,または090-2467-8171<br>&nbsp;FAX：047-362-7425 営業時間10:00～20:00<br>&nbsp;Mail：bm@mciinternational.jp
*/

        $str = explode('[Next_Item]',$note);
        $carDetails['CompanyName'] = $str[0];
        $carDetails['OwnerName'] = $str[1];
        $carDetails['CompanyAddress'] = $str[2];
        $carDetails['CompanyPhone'] = $str[3];
        $carDetails['CompanyFax'] = $str[4];
        $carDetails['CompanyMobilePhone'] = $str[5];
        $carDetails['CompanyEmail'] = $str[6];
        $carDetails['BankInfo'] = $str[7];
        $carDetails['CompanyRegistrationNumber'] = $str[8];
        $carDetails['CompanyLicenseNumber'] = $str[9];
        $carDetails['Display01'] = $str[10];

        
        if ($url == "") {
            return $carDetails;
        }

        // Fetch HTML content
        $htmlContent = file_get_contents($url);


                // Create a new DOMDocument instance
                $dom = new \DOMDocument();

                // Suppress errors for HTML5 tags not supported by DOMDocument
                @$dom->loadHTML($htmlContent);

                // Use XPath to find elements
                $xpath = new \DOMXPath($dom);

                // Find the <p> tag with id "greeting" and modify its content
                // Query for hidden input elements
        $hiddenFields = $xpath->query("//input[@type='hidden']");
        $bm = $xpath->query('//*[@id="door_nm"]')->item(0)->nodeValue;
        $bm = $xpath->query('//div[contains(@class,"countSlide")]')->item(0);
        
       // var_dump($bm);exit();
        //foreach($bm as $node) {
        //    echo $node->nodeValue, PHP_EOL;
        //}
        //*[@id="propertyMain"]/div[7]/div[1]/div[1]/div[2]/div[2]/table
        //$xpath->query('//div[contains(@class,"box_roundWhite")]');
        //*[@id="door_nm"]
       // /html/body/div[1]/div[1]/div[3]/form[2]/div/div[7]/div[1]/div[1]/div[2]/div[2]/table/tbody/tr[4]/td[1]


       // " ハンドル 右 年式（初度登録） 1985(昭和60)年 排気量 1200cc 乗車定員 ５名 駆動方式 2WD 燃料 ガソリン ドア 3D エコカー 減税対象車 − ミッション AT 過給器 内燃機関へ空気を強制的に送り込む装置。ターボ、スーパーチャージャーなどが該当 − 車体色 ホワイト 車台番号下3桁 902 その他仕様 − 全体のサイズ − 荷台寸法 − "

        // Loop through and process the hidden input elements
//*[@id="propertyMain"]/div[7]/div[1]/div[1]/div[2]/div[2]/table
        foreach ($hiddenFields as $hiddenField) {
            
            if ($hiddenField->getAttribute('name') == "exhaust_nm") $carDetails['Displacement'] = $hiddenField->getAttribute('value');
            if ($hiddenField->getAttribute('name') == "absyear") $carDetails['Year'] = $hiddenField->getAttribute('value');
            if ($hiddenField->getAttribute('name') == "brand") $carDetails['Manufacturer'] = $hiddenField->getAttribute('value');
            if ($hiddenField->getAttribute('name') == "distance") $carDetails['Mileage'] = $hiddenField->getAttribute('value');
            if ($hiddenField->getAttribute('name') == "car") $carDetails['CarModel'] = $hiddenField->getAttribute('value');

            if ($hiddenField->getAttribute('name') == "total_price") $carDetails['totalPrice'] = $hiddenField->getAttribute('value');

            
            //echo 'Hidden Field Name: ' . $hiddenField->getAttribute('name') . PHP_EOL;
            //echo 'Hidden Field Value: ' . $hiddenField->getAttribute('value') . PHP_EOL;
        }

        $carDetails['NumberOfDoors'] = $xpath->query('//*[@id="door_nm"]')->item(0)->nodeValue;

        //*[@id="headCarDetail"]/div[1]/div/div[2]/div/h2/p[1]/span

       //var_dump($carDetails);exit;


        // for without hidden eliments
        $otherElements = $xpath->query('//div[contains(@class,"box_roundWhite")]')->item(0);
        $items = preg_split('/\s+/', $otherElements->nodeValue, -1, PREG_SPLIT_NO_EMPTY);
        for ($i = 0; $i < count($items); $i++) {
            if ($items[$i] == "車検") $carDetails['VehicleInspection'] = $items[$i+1];
            if ($items[$i] == "修復歴") $carDetails['RepairHistory'] = $items[$i+1];
        }

        $otherElements = $xpath->query('//div[contains(@class,"box_roundWhite")]')->item(1);
        $items = preg_split('/\s+/', $otherElements->nodeValue, -1, PREG_SPLIT_NO_EMPTY);
        for ($i = 0; $i < count($items); $i++) {
            if ($items[$i] == "車台番号下3桁") $carDetails['ChassisNumber'] = $items[$i+1];
        }

        //$otherElements = $xpath->query('//*[@id="photoGalleryTop"]');
        //$otherElements = $xpath->query('//*[@id="photoGalleryTop"]/div[1]/div[4]/div/div/div[2]')->item(0);
        $otherElements = $xpath->query('//div[contains(@class,"countSlide")][1]/div/img/@src')->item(3)->nodeValue;;
                                        //*[@id="photoGalleryTop"]/div[1]/div[4]/div/div/div[2]/div/div[1]
        $carIndex=0;
        for ($i = 0; $i < 6; $i++) {
            $carDetails['image'.$i] = $otherElements = $xpath->query('//div[contains(@class,"countSlide")][1]/div/img/@src')->item($carIndex)->nodeValue;
            $carIndex = $carIndex+1;
        }
        //var_dump($carDetails);exit();
                           

        //$otherElements = $xpath->query('//div[contains(@class,"mainDataMiddleLeft")]/p/em')->item(0)->nodeValue;
        $otherElements = $xpath->query('//div[contains(@class,"num-right")]/span')->item(0)->nodeValue;
        $vehiclePrice = $otherElements;
        $carDetails['VehiclePrice'] = $vehiclePrice. "万";
        //echo "車両体価格". $vehiclePrice*10000;


        $otherElements = $xpath->query('//div[contains(@class,"mainDataMiddleRight")]/p/em')->item(0)->nodeValue;
        if (str_contains($otherElements, '.')) {
            $otherPrice = str_replace(".", "",$otherElements);
            $carDetails['OtherPrice'] = $otherPrice*1000;
            //echo "otherPrice". $otherPrice*1000;
        }else{
            $otherPrice = $otherElements;
            $carDetails['OtherPrice'] = $otherPrice*10000;
            //echo "otherPrice". $otherPrice*10000;
        }


       // echo $carDetails['totalPrice']; 
        //$otherElements = $xpath->query('//*[@id="total_price"]')->item(0)->nodeValue;
        //echo $otherElements;

//exit();

        //foreach ($items as $x) {
        //    if ($x == "車台番号下3桁") $carDetails['ChassisNumber'] = $x[];

       //   }
       // print_r($words);
        //exit;

        return $carDetails;
    }
    /**
     * お届け先を削除する.
     *
     * @Route("/mypage/priceboard/upload", name="mypage_priceboard_upload", methods={"GET", "POST"})
     * @Template("Mypage/priceboard_upload.twig")
     */
    public function upload(Request $request): JsonResponse
    {

        // Define the upload directory (in EC-CUBE public directory)
        //$uploadDir = $this->getParameter('eccube_upload_temp_dir') . '/uploads/';
        $uploadDir = $this->getParameter('/eccube-mylocal/ec-cube/html/upload/priceboard/bm');

        // Ensure the directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Get the uploaded image file
        $file = $request->files->get('image');

        if (!$file) {
            return new JsonResponse(['message' => 'No image file uploaded.'], Response::HTTP_BAD_REQUEST);
        }

        // Generate a unique filename
        $fileName = uniqid() . '.' . $file->guessExtension();

        try {
            // Move the file to the upload directory
            $file->move($uploadDir, $fileName);
            return new JsonResponse(['message' => 'Image uploaded successfully: ' . $fileName], Response::HTTP_OK);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => 'Failed to upload image: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
