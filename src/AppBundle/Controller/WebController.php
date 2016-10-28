<?php

namespace AppBundle\Controller;

use AppBundle\Entity\WebWebsite;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WebController extends Controller
{
    /**
     * @Route("/website/{slug}", name="website_show", requirements={"slug": "economica|e-commerce|gestionable|personalizada"})
     */
    public function showAction(Request $request)
    {
        $manager = $this->get('doctrine');
        $web = $manager->getRepository('AppBundle:WebWebsite')->findOneBy(['nombre' => $request->get('slug')]);
    
        return $this->render('web/web.html.twig', [
            'web' => $web
        ]);

    }
}
