<?php 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use Buonzz\NATS\Rest\Client;

class ClientTest extends PHPUnit\Framework\TestCase {

    /**
     * check if passing null values to Client constructor will emit an error
     */
    public function testBlankConstructor(){

        $this->expectException(InvalidArgumentException::class);
        $client = new Client(null, null, null);

    }
}