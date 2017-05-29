<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route(path="/", name="homepage")
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {

        $randImages = $this->getDoctrine()->getRepository('AppBundle:Gallery')->findAll();


        $randImages =array_slice($randImages, 0, 3);
        $topImages =array_slice($randImages, 0, 3);

        return $this->render('gallery/home.html.twig',
            array(
                'randImages' => $randImages,
                'topImages'=> $topImages
            )
        );
    }
}
