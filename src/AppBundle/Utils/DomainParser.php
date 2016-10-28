<?php

namespace AppBundle\Utils;
use Pdp\PublicSuffixListManager;
use Pdp\Parser;

class DomainParser
{
    protected $parser;

    public function __construct()
    {
        $pslManager = new PublicSuffixListManager();
        $this->parser = new Parser($pslManager->getList());
    }

    public function getSubdomain($host){
        $getSubdomain = $this->parser->getSubdomain($host);
        return ($getSubdomain);
    }

    public function getRegisterableDomain($host){
        $getRegisterableDomain = $this->parser->getRegisterableDomain($host);
        return ($getRegisterableDomain);
    }

    public function publicSuffix($host){
        $publicSuffix = $this->parser->getPublicSuffix($host);
        return ($publicSuffix);
    }

    public function isSuffixValid($host){
        $isSuffixValid = $this->parser->isSuffixValid($host);
        return ($isSuffixValid);
    }
}