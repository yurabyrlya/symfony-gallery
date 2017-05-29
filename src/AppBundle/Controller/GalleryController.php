<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route as Router;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GalleryController extends Controller
{
    /**
     * @Route(path="/gallery", name="gallery")
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $page = 1)
    {
        $images = [
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
            'wallpapers-summer-5.jpg',
        ];

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $images,
            $request->query->getInt('page', 1),
            6
        );
        return $this->render(':gallery:gallery.html.twig', [
          'images' =>  $pagination
        ]);
    }


}
