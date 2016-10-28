<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MarketingController extends Controller
{
    /**
     * @Route("/marketing/sem", name="google")
     */
    public function googleAction()
    {
        return $this->render('marketing/google.html.twig');
    }

    /**
     * @Route("/marketing/facebook", name="facebook")
     */
    public function facebookAction()
    {
        return $this->render('marketing/facebook.html.twig');
    }

    /**
     * @Route("/marketing/email-marketing", name="newsletter")
     */
    public function newsletterAction()
    {
        $manager = $this->get('doctrine');
        $newsletters = $manager->getRepository('AppBundle:ServerNewsletter')->findAll();
        return $this->render('marketing/newsletter.html.twig', [
            'newsletters' => $newsletters
        ]);
    }

}
