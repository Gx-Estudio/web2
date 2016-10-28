<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ContactoController extends Controller
{
    /**
     * @Route("/contactenos", name="contacto")
     */
    public function contactoAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('nombre', TextType::class)
            ->add('email', EmailType::class)
            ->add('telefono', TextType::class)
            ->add('pais', CountryType::class, array('preferred_choices' => array('AR','PE')))
            ->add('asunto', TextType::class)
            ->add('mensaje', TextareaType::class)
            ->add('enviar', SubmitType::class, array('label' => 'Enviar mensaje'))
            ->getForm();
        $form->handleRequest($request);


        if ($form->isSubmitted()) {

            $datos = $form->getData();

            $message = \Swift_Message::newInstance()
                ->setSubject($form->get('asunto')->getData())
                ->setFrom($form->get('email')->getData())
                ->setTo('jesus.6754@gmail.com')
                ->setBody(
                    $this->renderView(
                        'emails/contacto.html.twig',
                        array(
                            'datos' => $datos
                        )
                    ),
                    'text/html'
                )
            ;
            $this->get('mailer')->send($message);

            return $this->render('contacto/contacto.html.twig', array(
                'form' => $form->createView(),
                'enviado' => 'Correctamente'
            ));


        }

        return $this->render('contacto/contacto.html.twig', array(
            'form' => $form->createView(),
        ));


    }
}
