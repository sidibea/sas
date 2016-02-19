<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17/2/16
 * Time: 12:51 PM
 */

namespace SAS\FrontBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller {

    public function indexAction(){

        return $this->render('SASFrontBundle:Front:index.html.twig', array());

    }

    public function aboutAction(){

        return $this->render('SASFrontBundle:Front:about.html.twig');

    }

}