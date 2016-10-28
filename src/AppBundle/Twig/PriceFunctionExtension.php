<?php

namespace AppBundle\Twig;

class PriceFunctionExtension extends \Twig_Extension
{
    protected $cambio;

    public  function __construct(CurrencyExtension $currency)
    {
        $this->cambio = $currency->monedaFunction();
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('precio', array($this, 'priceFunction')),
            new \Twig_SimpleFunction('descuento', array($this, 'descuentoFunction')),
        );

    }


    public function priceFunction($precio)
    {
        $number = $precio*$this->cambio->getConversionRate();
        $formato = number_format($number, $this->cambio->getDecimals(), '.', ',');
        return $formato;

    }

    public function descuentoFunction($precio, $descuento)
    {
        $number = $precio*((100-$descuento)/100)*$this->cambio->getConversionRate();
        $formato = number_format($number, $this->cambio->getDecimals(), '.', ',');

        return $formato;

    }

    public function getName()
    {
        return 'PriceFunctionExtension';
    }
}