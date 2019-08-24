<?php 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use Buonzz\NATS\Rest\Client;
use Buonzz\NATS\Rest\EndPoints\Service;

class ServiceTest extends PHPUnit\Framework\TestCase {

    public function testPing(){

        $this->expectException(InvalidArgumentException::class);
                
        $client = new Client('http://www.yournats.com', 'affiliate_username', 'affilite_apikey');
        $service = new Service($client);

        $result = $service->ping();

    }
}