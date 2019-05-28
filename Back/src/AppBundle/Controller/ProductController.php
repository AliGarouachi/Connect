<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


/**
 * Product controller.
 *
 */
class ProductController extends Controller
{
    /**
     * Lists all product entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('AppBundle:Product')->findAll();
        $csrfToken=$products;
        
        $serializer=new Serializer([new ObjectNormalizer()]);
        $csrfToken=$serializer->normalize($csrfToken);
        return new JsonResponse($csrfToken);
        // return $this->render('product/index.html.twig', array(
        //     'products' => $products,
        // ));
    }

    /**
     * Finds and displays a product entity.
     *
     */
    public function showAction(Product $product)
    {

        return $this->render('product/show.html.twig', array(
            'product' => $product,
        ));
    }
}
