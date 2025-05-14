<?php

namespace Customize\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class RequestListener
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }

        $request = $event->getRequest();
        $session = $request->getSession();

        if ($session && $session->has('_locale')) {
            $request->setLocale($session->get('_locale'));
        }
    }
}