<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{


    /**
     * @Route("/inside")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function inside(Request $request){

        $user = $request->getUser();
            if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
               throw $this->createAccessDeniedException();
       }

        return $this->render('AppBundle:default:inside.html.twig');

    }
}
