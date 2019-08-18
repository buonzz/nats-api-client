<?php 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class SoapClientTest extends PHPUnit_Framework_TestCase{

/**
 * @expectedException InvalidArgumentException
 */	
  public function testInvalidUrl(){
  	$client = new Openadult\NATS\SoapClient(1,"legitusername","legitapikeye65f2a1a3c41ae9d1ca23");
  }
  
/**
 * @expectedException InvalidArgumentException
 */	
  public function testInvalidUsername(){
  	$client = new Openadult\NATS\SoapClient("http://domain.com","a","legitapikeye65f2a1a3c41ae9d1ca23");
  }
   
/**
 * @expectedException InvalidArgumentException
 */	
  public function testInvalidApiKey(){
  	$client = new Openadult\NATS\SoapClient("http://domain.com","legitusername","a");
  }

  public function testLogging(){
  	  	$client = new Openadult\NATS\SoapClient("http://domain.com","legitusername","legitapikeye65f2a1a3c41ae9d1ca23");

  	  	$log = new Logger('testonly');
		$log->pushHandler(new StreamHandler('your.log', Logger::INFO));
  	  	
  	  	$client->setLogger($log);
  	  	$client->execute("ping", []);
  }


}