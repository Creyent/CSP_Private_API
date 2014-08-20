<?php

namespace CSP\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('CSPBaseBundle::index.html.twig');
    }
    
    /**
     * Serve a file
     *
     * @Route("/download/{filename}", name="download_file", requirements={"filename": ".+"})
     */
    public function downloadFileAction($filename)
    {
        /**
         * $basePath can be either exposed (typically inside web/)
         * or "internal"
         */
        $filePath = 'downloads/'.$filename;
        
        // check if file exists
        if (!file_exists($filePath)) {
            throw $this->createNotFoundException();
        }

        // prepare BinaryFileResponse
        $response = new BinaryFileResponse($filePath);
        $response->headers->set('Content-Type', 'aplication/zip');
        $response->trustXSendfileTypeHeader();
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename,
            iconv('UTF-8', 'ASCII//TRANSLIT', $filename)
        );

        return $response;
    }
}
