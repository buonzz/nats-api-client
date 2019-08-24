<?php 

namespace Buonzz\NATS\Rest;

use Buonzz\NATS\Rest\Parameters\ApiUsername;
use Buonzz\NATS\Rest\Parameters\ApiKey;
use Buonzz\NATS\Rest\Parameters\ApiUrl;



class Client{

	private $username = null;
	private $key = null;	
	private $url = null;

	public function __construct($url, $username, $key ){

		$this->username = new ApiUsername($username);
		$this->key = new ApiKey($key);
		$this->url = new ApiUrl($url);

	}

	public function getUrl(){
		return $this->url;
	}

	public function getUsername(){
		return $this->username;
	}

	public function getApiKey(){
		return $this->key;
	}


	/*
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
	*/
}