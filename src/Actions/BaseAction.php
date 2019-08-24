<?php 

namespace Buonzz\Nats\Rest\Actions;

use GuzzleHttp\Client as GuzzleClient;

class BaseAction implements ActionInterface {

    public function getName(){
		return $this->name;
	}
    
    public function execute($client, $params){

		$httpClient = GuzzleClient();
        
        $uri = $this->build_uri($this, $params);

        $response = $client->request('GET', $uri);
		$body = $response->getBody();

        return $body;
    }
}