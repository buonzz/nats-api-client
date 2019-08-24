<?php 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class ServiceTest extends PHPUnit\Framework\TestCase {

    public function testPing(){
        
        $this->expectException(InvalidArgumentException::class);
    }
}