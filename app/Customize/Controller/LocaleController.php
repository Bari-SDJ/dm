<?php

namespace Customize\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Eccube\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;

class LocaleController extends AbstractController
{
    /**
     * @Route("/change-locale/{locale}", name="change_locale")
     */
    public function changeLocale($locale, Request $request)
    {
        $request->getSession()->set('_locale', $locale);
    
        $response = new RedirectResponse($request->headers->get('referer') ?: $this->generateUrl('homepage'));
        $response->headers->setCookie(new Cookie('_locale', $locale, strtotime('+1 year')));
    
        return $response;
    }
    /*
    public function changeLocale($locale, Request $request, SessionInterface $session)
    {
        // Save selected language to session
        $session->set('_locale', $locale);
        $request->setLocale($locale);

        // Redirect to previous page or homepage
        $referer = $request->headers->get('referer');
        return new RedirectResponse($referer ?: $this->generateUrl('homepage'));
    }
    */
}
