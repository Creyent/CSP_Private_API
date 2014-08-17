<?php

namespace CSP\ApiBundle\Controller;

use CSP\GenericoBundle\Entity\Clientes;
use CSP\GenericoBundle\Form\ClientesType;

use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View as FOSView;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Voryx\RESTGeneratorBundle\Controller\VoryxController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Clientes controller.
 * @RouteResource("Clientes")
 */
class ClientesRESTController extends VoryxController
{
    /**
     * Get a Clientes entity
     *
     * @View(serializerEnableMaxDepthChecks=true)
     *
     * @return Response
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Obtiene el Cliente con el ID indicado.",
     *   output = "CSP\GenericoBundle\Entity\Clientes",
     *   statusCodes = {
     *     200 = "Respuesta cuando es satisfactorio.",
     *     404 = "Respuesta cuando no se encuentra el recurso."
     *   }
     * )
     */
    public function getAction(Clientes $entity)
    {
        return $entity;
    }
    /**
     * Get all Clientes entities.
     *
     * @View(serializerEnableMaxDepthChecks=true)
     *
     * @param ParamFetcherInterface $paramFetcher
     *
     * @return Response
     *
     * @QueryParam(name="offset", requirements="\d+", nullable=true, description="Offset from which to start listing notes.")
     * @QueryParam(name="limit", requirements="\d+", default="20", description="How many notes to return.")
     * @QueryParam(name="order_by", nullable=true, array=true, description="Order by fields. Must be an array ie. &order_by[name]=ASC&order_by[description]=DESC")
     * @QueryParam(name="filters", nullable=true, array=true, description="Filter by fields. Must be an array ie. &filters[id]=3")
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Obtiene la colección de Clientes.",
     *   output = "CSP\GenericoBundle\Entity\Clientes",
     *   statusCodes = {
     *     200 = "Respuesta cuando es satisfactorio.",
     *     404 = "Respuesta cuando no se encuentran recursos."
     *   }
     * )
     */
    public function cgetAction(ParamFetcherInterface $paramFetcher)
    {
        try {
            $offset = $paramFetcher->get('offset');
            $limit = $paramFetcher->get('limit');
            $order_by = $paramFetcher->get('order_by');
            $filters = !is_null($paramFetcher->get('filters')) ? $paramFetcher->get('filters') : array();

            $em = $this->getDoctrine()->getManager();
            $entities = $em->getRepository('CSPGenericoBundle:Clientes')->findBy($filters, $order_by, $limit, $offset);
            if ($entities) {
                return $entities;
            }

            return FOSView::create('Not Found', Codes::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return FOSView::create($e->getMessage(), Codes::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    /**
     * Create a Clientes entity.
     *
     * @View(statusCode=201, serializerEnableMaxDepthChecks=true)
     *
     * @param Request $request
     *
     * @return Response
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Crea un nuevo Cliente con los datos enviados.",
     *   input="CSP\GenericoBundle\Form\ClientesType",
     *   output="CSP\GenericoBundle\Entity\Clientes",
     *   statusCodes = {
     *     200 = "Respuesta cuando es satisfactorio.",
     *     400 = "Respuesta cuando el formulario tiene errores."
     *   }
     * )
     */
    public function postAction(Request $request)
    {
        $entity = new Clientes();
        $form = $this->createForm(new ClientesType(), $entity, array("method" => $request->getMethod()));
        $this->removeExtraFields($request, $form);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $entity;
        }

        return FOSView::create(array('errors' => $form->getErrors()), Codes::HTTP_INTERNAL_SERVER_ERROR);
    }
    /**
     * Update a Clientes entity.
     *
     * @View(serializerEnableMaxDepthChecks=true)
     *
     * @param Request $request
     * @param $entity
     *
     * @return Response
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Actualiza el Cliente indicadp con los datos enviados.",
     *   input = "CSP\GenericoBundle\Form\ClientesType",
     *   statusCodes = {
     *     201 = "Respuesta cuando el recurso es creado.",
     *     204 = "Respuesta cuando es satisfactorio.",
     *     400 = "Respuesta cuando el formulario tiene errores."
     *   }
     * )
     */
    public function putAction(Request $request, Clientes $entity)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $request->setMethod('PATCH'); //Treat all PUTs as PATCH
            $form = $this->createForm(new ClientesType(), $entity, array("method" => $request->getMethod()));
            $this->removeExtraFields($request, $form);
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();

                return $entity;
            }

            return FOSView::create(array('errors' => $form->getErrors()), Codes::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Exception $e) {
            return FOSView::create($e->getMessage(), Codes::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    /**
     * Partial Update to a Clientes entity.
     *
     * @View(serializerEnableMaxDepthChecks=true)
     *
     * @param Request $request
     * @param $entity
     *
     * @return Response
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Actualiza parte del Cliente indicado con los datos enviados.",
     *   input = "CSP\GenericoBundle\Form\ClientesType",
     *   statusCodes = {
     *     201 = "Respuesta cuando el recurso es creado.",
     *     204 = "Respuesta cuando es satisfactorio.",
     *     400 = "Respuesta cuando el formulario tiene errores."
     *   }
     * )
*/
    public function patchAction(Request $request, Clientes $entity)
    {
        return $this->putAction($request, $entity);
    }
    /**
     * Delete a Clientes entity.
     *
     * @View(statusCode=204)
     *
     * @param Request $request
     * @param $entity
     * @internal param $id
     *
     * @return Response
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Borra el Cliente con el ID indicado.",
     *   input = "CSP\GenericoBundle\Form\ClientesType"
     * )
     */
    public function deleteAction(Request $request, Clientes $entity)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($entity);
            $em->flush();

            return null;
        } catch (\Exception $e) {
            return FOSView::create($e->getMessage(), Codes::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
