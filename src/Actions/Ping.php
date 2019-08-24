<?php 

namespace Buonzz\Nats\Rest\Actions;

use GuzzleHttp\Client as GuzzleClient;

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

    public function execute($client, $params){

		$httpClient = GuzzleClient();
        
        $uri = $this->build_uri($this, $params);

        $response = $client->request('GET', $uri);
		$body = $response->getBody();

        return $body;
    }
}