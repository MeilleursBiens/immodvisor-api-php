<?php

namespace Meilleursbiens\ImmodvisorApiWrapper;

use Meilleursbiens\ImmodvisorApiWrapper\Services\ImmodvisorAPIEnv;

/**
 * Class ImmodvisorAPI
 * @package Meilleursbiens\ImmodvisorApiWrapper
 */
class ImmodvisorAPI
{

    const JSON_FORMAT = "json";
    const XML_FORMAT = "xml";


    /**
     * @var string API Key sended by mail
     */
    protected $api_key;
    /**
     * @var string Salt checksum in sended by mail
     */
    protected $salt_checksum_in;
    /**
     * @var string Salt checksum out sended by mail
     */
    protected $salt_checksum_out;
    /**
     * @var string API Format (json, xml)
     */
    protected $api_format = "json";

    /**
     * ImmodvisorAPI constructor.
     * @param string $api_key Your API key received by email.
     * @param string $salt_checksum_in Your Salt checksum in received by email.
     * @param string $salt_checksum_out  Your Salt checksum out received by email.
     * @param string $api_format API Response format.
     */
    public function __construct(string $api_key, string $salt_checksum_in, string $salt_checksum_out, string $api_format = self::JSON_FORMAT)
    {
        $this->api_key = $api_key;
        $this->salt_checksum_in = $salt_checksum_in;
        $this->salt_checksum_out = $salt_checksum_out;
        $this->api_format = $api_format;
    }

    /**
     * Start to make requests.
     *
     * @return ImmodvisorAPIEnv
     */
    public function client(): ImmodvisorAPIEnv
    {
        $env = new ImmodvisorAPIEnv($this->api_key, $this->salt_checksum_in, $this->salt_checksum_out);

        $env->setFormat($this->api_format);

        return $env;
    }
}