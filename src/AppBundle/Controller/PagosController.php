<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagosController extends Controller
{
    /**
     * @Route("/pagos", name="pagos")
     */
    public function pagosAction()
    {
        return $this->render('institucional/pagos.html.twig');
    }
}