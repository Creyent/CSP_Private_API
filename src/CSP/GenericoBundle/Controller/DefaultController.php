<?php

namespace CSP\GenericoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/pgen", name="generico")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('CSPGenericoBundle::index.html.twig');
    }
}
