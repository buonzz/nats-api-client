<?php 

namespace Buonzz\Nats\Rest\Actions;

/**
*  ping the API
*/

class Ping implements ActionInterface {

    private $name = 'ping';
    private $method = "GET";

    public function getName(){
		return $this->name;
	}

    public function method(){
        return $this->method;
    }
}