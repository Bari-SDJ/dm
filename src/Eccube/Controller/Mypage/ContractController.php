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



class ContractController extends AbstractController
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
        $this->customerAddressRepository = $customerAddressRepository;
    }

    /**
     * お届け先一覧画面.
     *
     * @Route("/mypage/contract", name="mypage_contract", methods={"GET"})
     * @Template("Mypage/contract.twig")
     */
    public function index(Request $request)
    {
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
     * @Route("/mypage/contract/new", name="mypage_contract_new", methods={"GET", "POST"})
     * @Route("/mypage/contract/{id}/edit", name="mypage_contract_edit", requirements={"id" = "\d+"}, methods={"GET", "POST"})
     * @Template("Mypage/contract_edit.twig")
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



            //var_dump($Customer->getCustomerAddresses()|last );
//exit();
        } else {
            $CustomerAddress = $this->customerAddressRepository->findOneBy(
                [
                    'id' => $id,
                    'Customer' => $Customer,
                ]
            );
            if (!$CustomerAddress) {
                throw new NotFoundHttpException();
            }
        }

        $parentPage = $request->get('parent_page', null);

        // 正しい遷移かをチェック
        $allowedParents = [
            $this->generateUrl('mypage_contract'),
            $this->generateUrl('shopping_redirect_to'),
        ];

        // 遷移が正しくない場合、デフォルトであるマイページの配送先追加の画面を設定する
        if (!in_array($parentPage, $allowedParents)) {
            // @deprecated 使用されていないコード
            $parentPage = $this->generateUrl('mypage_contract');
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
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_MYPAGE_CONTRACT_EDIT_INITIALIZE, $event);

        $form = $builder->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() ){// && $form->isValid()) {
            log_info('お届け先登録開始', [$id]);
//var_dump($form);exit();
            $this->entityManager->persist($CustomerAddress);
            $this->entityManager->flush();

            log_info('お届け先登録完了', [$id]);

            $event = new EventArgs(
                [
                    'form' => $form,
                    'Customer' => $Customer,
                   // 'CustomerAddress' => $CustomerAddress,
                ],
                $request
            );
            $this->eventDispatcher->dispatch(EccubeEvents::FRONT_MYPAGE_CONTRACT_EDIT_COMPLETE, $event);
 
            return $this->redirect($this->generateUrl('mypage_contract'));
           //return $this->redirect('/eccube-mylocal/ec-cube/src/tcpdf/examples/example_033.php');

        } 
        //var_dump("bmmmmmmmmmmmmmmmm: edit". $request->request->get('username'));
        
        /* collect site item info */
        $url = $request->request->get('username');
        $siteInfo = "";
        $siteInfo = $this->parser($url, $Customer, $request);

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
     * @Route("/mypage/contract/{id}/delete", name="mypage_contract_delete", methods={"DELETE"})
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
        $this->eventDispatcher->dispatch(EccubeEvents::FRONT_MYPAGE_CONTRACT_DELETE_COMPLETE, $event);

        log_info('お届け先削除完了', [$CustomerAddress->getId()]);

        return $this->redirect($this->generateUrl('mypage_contract'));
    }
    function parser($url, $Customer, $request)
    {
        $carDetails = ['Displacement'=>'', 'Year'=>'', 'CarModel'=>'', 'ChassisNumber'=>'', 'NumberOfDoors'=>'', 
        'VehicleInspection'=>'', 'Manufacturer'=>'', 'Mileage'=>'', 'RepairHistory'=>'', 'WarrantyDetails'=>'', 'VehiclePrice'=>'', 
        'AdditionalLineTotal'=>'', 'CarTransportationFee'=>'', 'TransportationCosts'=>'', 'TradeInVehicleName'=>'', 'Color'=>'', 
        'VehicleNumber'=>'', 'Mileage'=>'', 'EnvironmentalPerformanceTax'=>'', 'AutomobileTax'=>'', 'AutomobileLiabilityInsurancePremium'=>'', 
        'WeightTax'=>'', 'RecyclingDeposit'=>'', 'Campaign'=>'', 'SpecialDiscount'=>'', 'Others'=>'', 'VehiclePrice'=>'', 'LandTransportationFee'=>'', 
        'note1'=>'','note1'=>'',
        'image0'=>'','image1'=>'','image2'=>'','image3'=>'','image4'=>'','image5'=>'',
         'VehiclePrice'=>'0','OtherPrice'=>'0'
         ,'CompanyName'=>'' ,'OwnerName'=>'' ,'CompanyAddress'=>'' ,'CompanyPhone'=>'' ,'CompanyFax'=>'' ,'CompanyMobilePhone'=>'' ,'CompanyEmail'=>'' ,'BankInfo'=>'' ,'CompanyRegistrationNumber'=>'' ,'CompanyLicenseNumber'=>''
         ,'Display01'=>'','URL_Error'=>'', 'goo-net'=>''];
       
        //Note Preparaton
        $note = $Customer->getNote();
        $pos1 = strrpos($note,"1st",0);
        $noteFirst = substr($note,0,$pos1);
        $pos2 = strrpos($note,"2nd",0);
        $noteSecond = substr($note,($pos1+3),($pos2-$pos1-4));
        //var_dump($noteSecond);
        $carDetails['note1'] = $noteFirst;
        $carDetails['note2'] = $noteSecond;

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
        $carDetails['CompanyWebSite'] = $str[11];
        $carDetails['goo-net'] = $str[12];

        $referrer = $request->headers->get('referer') ;
        $checkPath = $request->getSchemeAndHttpHost() . $request->getBaseUrl() . "/mypage/quotation";
        if (($url == "" or !$this->is_url_accessible($url))) {
            if ($referrer == $checkPath){
                $carDetails['URL_Error'] = "";
            }else{
                $carDetails['URL_Error'] = "❌ 正しURLを入力お願いします。（Please enter the correct URL）";
            }
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

        $hiddenFields = $xpath->query("//input[@type='hidden']");

        foreach ($hiddenFields as $hiddenField) {
            
            if ($hiddenField->getAttribute('name') == "exhaust_nm") $carDetails['Displacement'] = $hiddenField->getAttribute('value');
            if ($hiddenField->getAttribute('name') == "absyear") $carDetails['Year'] = $hiddenField->getAttribute('value');
            if ($hiddenField->getAttribute('name') == "brand") $carDetails['Manufacturer'] = $hiddenField->getAttribute('value');
            if ($hiddenField->getAttribute('name') == "distance") $carDetails['Mileage'] = $hiddenField->getAttribute('value');
            if ($hiddenField->getAttribute('name') == "car") $carDetails['CarModel'] = $hiddenField->getAttribute('value');
            if ($hiddenField->getAttribute('name') == "total_price") $carDetails['totalPrice'] = $hiddenField->getAttribute('value');
        }
        
        $result = $xpath->query('//*[@id="door_nm"]');
        if ($result !== false && $result->length > 0) {
            $carDetails['NumberOfDoors'] = $result->item(0)->nodeValue;
        }
        
        $result = $xpath->query('//*[@id="color_nm"]');
        if ($result !== false && $result->length > 0) {
            $carDetails['Color'] = $result->item(0)->nodeValue;
        }
        $result = $xpath->query('//div[contains(@class,"mainDataBottom")]/p[2]');
        if ($result !== false && $result->length > 0) {
            $warranty = $result->item(0)->nodeValue;
            $str = str_replace(['(', ')', '法定整備：整備付','保証付',' '], '', $warranty);
            $pos = strpos($str, "※"); //remove all after ※
            if ($pos !== false) {
                $str = substr($str, 0, $pos); 
            }
            $carDetails['WarrantyDetails'] = $str;
        }

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
/*
        $result = $xpath->query('//div[contains(@class,"countSlide")][1]/div/img/@src');
        if ($result !== false && $result->length > 0) {
            $otherElements = $result->item(3)->nodeValue;
                                            
            $carIndex=0;
            for ($i = 0; $i < 12; $i++) {
                $otherElements = $result->item($i)->nodeValue;           
                if (str_contains($otherElements, 'playmark01.png')) {
                    //echo $otherElements2;
                    //$i--;
                }else{
                    $carDetails['image'.$carIndex] = $otherElements;
                    $carIndex = $carIndex+1;
                }
            }
        }
*/
        $result = $xpath->query('//div[contains(@class,"mainDataMiddleLeft")]/p/em');
        if ($result !== false && $result->length > 0) {
            $otherElements = $result->item(0)->nodeValue;
            if (str_contains($otherElements, '.')) {
                $vehiclePrice = str_replace(".", "",$otherElements);
                $carDetails['VehiclePrice'] = $vehiclePrice*1000;
                //echo "車両体価格". $vehiclePrice*1000;
            }else{
                $vehiclePrice = $otherElements;
                $carDetails['VehiclePrice'] = $vehiclePrice*10000;
                //echo "車両体価格". $vehiclePrice*10000;
            }
        }

        $result = $xpath->query('//div[contains(@class,"mainDataMiddleRight")]/p/em');
        if ($result !== false && $result->length > 0) {
            $otherElements = $result->item(0)->nodeValue;
            if (str_contains($otherElements, '.')) {
                $otherPrice = str_replace(".", "",$otherElements);
                $carDetails['OtherPrice'] = $otherPrice*1000;
                //echo "otherPrice". $otherPrice*1000;
            }else{
                $otherPrice = $otherElements;
                $carDetails['OtherPrice'] = $otherPrice*10000;
                //echo "otherPrice". $otherPrice*10000;
            }
        }
        return $carDetails;
    }

    function is_url_accessible($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    
        return ($http_code >= 200 && $http_code < 400);
    }

    /**
     * お届け先を削除する.
     *
     * @Route("/mypage/contract/upload", name="mypage_contract_upload", methods={"GET", "POST"})
     * @Template("Mypage/contract_upload.twig")
     */
    public function upload(Request $request): JsonResponse
    {

        // Define the upload directory (in EC-CUBE public directory)
        //$uploadDir = $this->getParameter('eccube_upload_temp_dir') . '/uploads/';
        $uploadDir = $this->getParameter('/eccube-mylocal/ec-cube/html/upload/contract/bm');

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
