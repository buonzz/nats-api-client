<?php 

class PingTest extends PHPUnit_Framework_TestCase{
  public function testExecute(){

      $client = new Openadult\NATS\SoapClient("http://domain.com","legitusername","legitapikeye65f2a1a3c41ae9d1ca23");

      $ping = new Openadult\NATS\Soap\Ping($client);
      $ping->execute();
  }
}