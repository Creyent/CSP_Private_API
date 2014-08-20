<?php

namespace CSP\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DocController extends Controller {

    /**
     * @Route("/doc", name="documentacion")
     * @Template()
     */
    public function docAction()
    {
        return $this->render('CSPApiBundle::api.html.twig');
    }
}
?>