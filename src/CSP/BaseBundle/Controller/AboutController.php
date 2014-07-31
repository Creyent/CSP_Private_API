<?php

namespace CSP\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AboutController extends Controller {

    /**
     * @Route("/about", name="about")
     * @Template()
     */
    public function aboutAction()
    {
        return $this->render('CSPBaseBundle::about.html.twig');
    }
}
?>