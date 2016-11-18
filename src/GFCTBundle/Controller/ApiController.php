<?php

namespace GFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GFCTBundle\Form\EmpresaType;
use GFCTBundle\Entity\Empresa;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller{

       private function serializeEmpresa(Empresa $empresa)
    {
      return array(
          'nombre' => $empresa->getNombre(),
          'telefono1' => $empresa->getTelefono1(),
          'telefono2' => $empresa->getTelefono2(),
          'CP' => $empresa->getCp(),
      );
    }
    public function empresasAction()
    {
        $repository = $this->getDoctrine()->getRepository('GFCTBundle:Empresa');
        $empresas = $repository->findAll();


        //var_dump($empresas);
        $data = array('empresas' => array());
        foreach ($empresas as $empresa) {
            $data['empresas'][] = $this->serializeEmpresa($empresa);
        }
        $response = new JsonResponse($data, 400);
        return $response;
        //return $this->json($empresas);*/
    }

}