<?php

use PHPUnit\Framework\TestCase;

class ImmodvisorAPITest extends TestCase
{

    public function testIfAPIClient()
    {
        $var = new Meilleursbiens\ImmodvisorApiWrapper\ImmodvisorAPI("", "", "");
        $this->assertTrue(is_object($var));
        unset($var);
    }
}