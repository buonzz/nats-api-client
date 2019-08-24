<?php 

namespace Buonzz\NATS\Rest;

use Buonzz\NATS\Rest\Parameters\ApiUsername;
use Buonzz\NATS\Rest\Parameters\ApiKey;
use Buonzz\NATS\Rest\Parameters\ApiUrl;

use GuzzleHttp\Client as GuzzleClient;

class Client{

	private $username = null;
	private $password = null;	
	private $url = null;
	public $current_querystring;
	public $current_raw_response;

	public function __construct($username, $key, $url){

		$this->username = new ApiUsername($username);
		$this->password = new ApiKey($key);
		$this->url = new ApiUrl($url);

	}

	public function build_uri($endpoint, $action, $parameters){
	
		$action->validate_params($parameters);
	
		foreach($parameters as $parameter){
			$kv[$parameter->getName()] = $parameter->getValue();
		}
	
		$url_call  = $this->url . '/api/' . $endpoint->getName() . '/'. $action->getName() 
								. '/?' . http_build_query($parameters);

		return $url_call;
	}

	public function execute($action, $parameters){

		$client = GuzzleClient();
		
		$uri = $this->build_uri($action, $parameters);
		
		// expose this so the user of the package can inspect it
		$this->current_querystring = $uri;
		
		$response = $client->request('GET', $uri);
		$body = $response->getBody();
		
		// expose the response from api, so the user of the package can inspect
		$this->current_raw_response = $body;
		
		$parsed_json = json_decode($body);
		return $parsed_json;
	} //
}