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
     * @Route("/table", name="table")
     */
    public function tableAction(Request $request)
    {
        $a['title'] = 'Table UImagine';
        return $this->render('default/table.html.twig', $a);
    }

    /**
     * @Route("/typography", name="typography")
     */
    public function typographyAction(Request $request)
    {
        $a['title'] = 'Typography UImagine';
        return $this->render('default/typography.html.twig', $a);
    }

    /**
     * @Route("/button", name="button")
     */
    public function buttonAction(Request $request)
    {
        $a['title'] = 'Typography UImagine';
        return $this->render('default/button.html.twig', $a);
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
