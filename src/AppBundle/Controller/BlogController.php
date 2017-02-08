<?php

// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @Route("/blog/", name="blog_list")
     */
    public function listAction()
    {
        // Render 'index.html.twig' with array 'blog_entries'
        return $this->render('blog/index.html.twig', array('blog_entries' =>
                                                            array(
                                                                'title' => 'This is the Title.',
                                                                'body'  => 'This is the Body.',
                                                                )
                                                            ) );
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction($slug)
    {
        return new Response(
            '<html><body>Wildcard is not a digit.</body></html>'
        );
    }
}