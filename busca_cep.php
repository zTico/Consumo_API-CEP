<?php   
function get_endereco($cep){

    //Consumindo API XML

    $cep = preg_replace("/[^0-9]/", "", $cep);
    $url = "http://viacep.com.br/ws/$cep/xml/";
    
    $xml = simplexml_load_file($url);
    return $xml;
    }
    


      