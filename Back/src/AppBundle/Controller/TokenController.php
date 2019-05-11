<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
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
        $csrfToken=array($csrfToken);
        $serializer=new Serializer([new ObjectNormalizer()]);
        $csrfToken=$serializer->normalize($csrfToken);
        return new JsonResponse($csrfToken);
        // return $this->render('AppBundle:Token:get_token.html.twig', array(
        //     "csrfToken" =>$csrfToken
        // ));
        
       
        
    }
    public function loggedAction()
    {
        return $this->render('AppBundle:Token:get_token.html.twig', array(
            
        ));
    }

}
