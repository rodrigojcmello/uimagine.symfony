<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/grid", name="grid")
     */
    public function gridAction(Request $request)
    {
        $a['title'] = 'Grid UImagine';
        return $this->render('default/grid.html.twig', $a);
    }
    /**
     * @Route("/navbar/{tipo}/{template}", name="navbar")
     */
    public function navbarAction($tipo = null, $template = null)
    {
        if (!$tipo) {
            return $this->redirect($this->generateUrl('navbar', array('tipo' => '01')), 301);
        } else {
            $a['title'] = 'Navbar';
            $a['light'] = $template ? $template : '';
            return $this->render('default/navbar/navbar-' . $tipo . '.html.twig', $a);
        }
    }
}