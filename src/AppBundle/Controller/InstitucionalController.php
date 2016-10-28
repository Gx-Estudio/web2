<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InstitucionalController extends Controller
{

    /**
     * @Route("/legales", name="legales")
     */
    public function legalesAction()
    {
        return $this->render('institucional/legales.html.twig');
    }

    /**
     * @Route("/politica-de-privacidad", name="privacidad")
     */
    public function privacidadAction()
    {
        return $this->render('institucional/privacidad.html.twig');
    }

    /**
     * @Route("/manuales", name="manuales")
     */
    public function manualesAction()
    {
        return $this->render('institucional/manuales.html.twig');
    }

}
