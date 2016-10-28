<?php

namespace AppBundle\Apis;


class WhoisApi
{
    public function dominioApi($host)
    {
        if (strpos($host, '.pe') !== false) {
            return 'No hay conexión';
        } else {
            $username="gx-estudio";
            $password="Redilegal6754-------";
            $contents = file_get_contents("http://www.whoisxmlapi.com/whoisserver/WhoisService?domainName=$host&cmd=GET_DN_AVAILABILITY&username=$username&password=$password&outputFormat=JSON");

            $res = json_decode($contents);
        }
        if(isset($res->ErrorMessage))
        {
            return 'No hay conexión';
        }else{
            $res = $res->DomainInfo;

            if(print_r($res->domainAvailability,1) == 'AVAILABLE')
            {
                return 'true';
            }else{
                return 'false';
            }
        }

    }

}