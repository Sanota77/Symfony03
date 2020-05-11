<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="pageacceuil")
     */
    public function index():Response
    {
        //get data from model if needed

    return $this->render('home.html.twig', [
            //send data to view if needed
            'website' => 'Wild Series',
        ]);
    }
}