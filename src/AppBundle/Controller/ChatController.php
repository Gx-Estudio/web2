<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChatController extends Controller
{

    /**
     * @Route("/live-chat", name="chat")
     */
    public function chatAction()
    {
        $manager = $this->get('doctrine');
        $chats = $manager->getRepository('AppBundle:ServerChat')->findAll();
        return $this->render('chat/chat.html.twig', [
            'chats' => $chats
        ]);
    }
}
