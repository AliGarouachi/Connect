<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

class TokenController extends Controller
{
    private $tokenManager;
    public function __construct(CsrfTokenManagerInterface $tokenManager = null)
    {
        $this->tokenManager = $tokenManager;
    }
    public function getTokenAction()
    {
        $csrfToken = $this->tokenManager
            ? $this->tokenManager->getToken('authenticate')->getValue()
            : null;
        return $this->render('AppBundle:Token:get_token.html.twig', array(
            'csrf_token' => $csrfToken
        ));
    }

}
