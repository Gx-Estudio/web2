<?php

namespace AppBundle\Twig;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Request;

class CurrencyExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{

    protected $moneda;
    protected $monedas;

    public function __construct(EntityRepository $currencyRepository)
    {
        $request = Request::createFromGlobals();
        $id = $request->cookies->get('currency');
        if(!isset($id)){
            $id = 1;
        }
        $this->moneda = $currencyRepository->findOneBy(['id' => $id]);
        $this->monedas = $currencyRepository->findAll();
    }

    public function getGlobals()
    {
        return array(
            'moneda' => $this->moneda,
            'monedas' => $this->monedas
        );
    }

    public function monedaFunction(){
        return $this->moneda;
    }

    public function monedasFunction(){
        return $this->monedas;
    }


    public function getName()
    {
        return 'CurrencyExtension';
    }
}

