<?php

namespace AppBundle\Utils;
use Doctrine\ORM\EntityRepository;

class DomainFind
{
    protected $dominio;
    protected $domainParser;

    public function __construct(EntityRepository $serverDominioRepository, DomainParser $domainParser)
    {
        $this->dominio = $serverDominioRepository;
        $this->domainParser = $domainParser;
    }

    public function domainValid($host){
        if($this->domainParser->isSuffixValid($host)){
            return ($host);
        }else{
            $remplazo = array(" ", ".");
            return(str_replace($remplazo, '', $host).'.com');
        }
    }

    public function domainFind($host){

        $sufijoPublico = '.'.$this->domainParser->publicSuffix($host);

        $encontrado = $this->dominio->findOneBy(['nombre' => $sufijoPublico]);

        return $encontrado;
    }

}