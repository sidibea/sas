<?php

namespace SAS\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SASFrontBundle:Default:index.html.twig', array());
    }
}
