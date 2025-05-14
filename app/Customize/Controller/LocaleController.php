<?php

namespace Customize\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Eccube\Controller\AbstractController;

class LocaleController extends AbstractController
{
    /**
     * @Route("/change-locale/{locale}", name="change_locale")
     */
    public function changeLocale($locale, Request $request, SessionInterface $session)
    {
        // Save selected language to session
        $session->set('_locale', $locale);
        $request->setLocale($locale);

        // Redirect to previous page or homepage
        $referer = $request->headers->get('referer');
        return new RedirectResponse($referer ?: $this->generateUrl('homepage'));
    }
}
