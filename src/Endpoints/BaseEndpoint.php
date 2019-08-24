<?php

namespace Buonzz\NATS\Rest\EndPoints;

class BaseEndpoint implements EndpointInterface{

    private $client;

    public function build_uri($action, $parameters){

        $action->validate_params($parameters);

        $endpoint = $this->getName();
        $action = $action->getName();

        $kv = [];

        foreach($parameters as $parameter){
			$kv[$parameter->getName()] = $parameter->getValue();
		}

        $url_call  = $this->client->getURL() . '/'. $endpoint.  '/'. $action. '/?' . http_build_query($kv);
		return $url_call;        
    }

    public function getValidActions(){ return [];}

    /**
     *  invoke the actual action for this endpoint
     */
    function __call($method, $params){
        if(!in_array($method, $this->getValidActions()))
            throw new \Exception( $method . " action is not available on " . get_class($this));

         $action = new $method();  
         $action->execute($this->client, $params);
         
    }    

}