<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ServersController extends Controller
{
    /**
     * @Route("/servidores/dominios", name="dominios")
     */
    public function dominioAction(Request $request)
    {
        $manager = $this->get('doctrine');
        $dominios = $manager->getRepository('AppBundle:ServerDominio')->findAll();


        $form = $this->createFormBuilder()
            ->add('dominio', TextType::class)
            ->add('buscar', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $datos = $form->getData();
            $validar = $this->get('app.domain_find');
            $host = $validar->domainValid($datos['dominio']);
            $venta = $validar->domainFind($host);
            if(is_null($venta))
            {
                $respuesta = 'no registrado';
            }else{
                $disponibilidad = $this->get('app.api.whois')->dominioApi($host);

                if($disponibilidad == 'true')
                {
                    $respuesta = 'disponible';
                }elseif ($disponibilidad == 'false'){
                    $respuesta = 'no disponible';
                }else{
                    $respuesta = 'error';
                }
            }

            return $this->render('servers/dominio.html.twig', [
                'form' => $form->createView(),
                'dominios' => $dominios,
                'respuesta' => $respuesta,
                'host' => $host,
                'venta' => $venta
            ]);
        }



        return $this->render('servers/dominio.html.twig', [
            'form' => $form->createView(),
            'dominios' => $dominios
        ]);
    }

    /**
     * @Route("/servidores/hosting", name="hosting")
     */
    public function hostingAction()
    {
        $manager = $this->get('doctrine');
        $hosting = $manager->getRepository('AppBundle:ServerHosting')->findAll();

        return $this->render('servers/hosting.html.twig', [
            'hosting' => $hosting
        ]);
    }

    /**
     * @Route("/servidores/vps", name="vps")
     */
    public function vpsAction()
    {
        $manager = $this->get('doctrine');
        $vps = $manager->getRepository('AppBundle:ServerVps')->findAll();
        return $this->render('servers/vps.html.twig', [
            'vps' => $vps
        ]);
    }

    /**
     * @Route("/servidores/certificados-ssl", name="ssl")
     */
    public function sslAction()
    {
        return $this->render('servers/ssl.html.twig');
    }

    /**
     * @Route("/servidores/certificados-ssl/{slug}", name="certificados")
     */
    public function certificadosAction()
    {
        return $this->render('servers/ssl.html.twig');
    }

}
