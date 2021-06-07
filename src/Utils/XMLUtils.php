<?php

namespace Meilleursbiens\ImmodvisorApiWrapper\Utils;

class XMLUtils
{

    /**
     * Transform XML to JSON
     *
     * @param $xml_string string XML String
     */
    public static function xmlToJson(string $xml_string){
        $xml = simplexml_load_string($xml_string);
        $json = json_encode($xml);

        return json_decode($json,TRUE);
    }

}