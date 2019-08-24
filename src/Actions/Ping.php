<?php 

namespace Buonzz\Nats\Rest\Actions;

/**
*  ping the API
*  @see https://tmmwiki.com/index.php/NATS4_REST_API_Ping
*/

class Ping implements ActionInterface {

    private $name = 'ping';
    private $method = "GET";

    public function getName(){
		return $this->name;
	}

    public function execute($uri, $headers, $params){
        return $this->method;
    }
}