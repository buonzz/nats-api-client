<?php

namespace Buonzz\NATS\Rest\EndPoints;

class BaseEndpoint implements EndpointInterface{

    public function build_uri($action, $parameters){

        $action->validate_params($parameters);

        $action_name = $action->getName();

        $kv = [];

        foreach($parameters as $parameter){
			$kv[$parameter->getName()] = $parameter->getValue();
		}

        $url_call  = $this->url . '?' . http_build_query($kv);
		return $url_call;        
    }
}