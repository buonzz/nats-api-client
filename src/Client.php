<?php 

namespace Buonzz\NATS;

use Buonzz\NATS\Validators\SoapApiUrlValidator;
use Buonzz\NATS\Validators\UsernameValidator;
use Buonzz\NATS\Validators\ApiKeyValidator;

use Monolog\Logger;

class Client {

	private $api_url;
	private $username;
	private $apikey;
	private $validators;
	private $logger;

	public function __construct($api_url, $username, $apikey, $options = []){

		$this->validators['api_url'][] = new ApiUrlValidator($api_url);
		$this->validators['username'][] = new UsernameValidator($username);
		$this->validators['apikey'][] = new ApiKeyValidator($apikey);

		foreach($this->validators as $prop=>$validators)
		{
			foreach($validators as $validator)
				$validator->validate();
		}

		$this->api_url = $api_url . "/admin_api.php";
		$this->username = $username;
		$this->apikey = $apikey;

		$this->logger = null;


	} //constuctor

	public function execute($function_name, $arguments){
	}

	public function setLogger(Logger $logger){
		$this->logger = $logger;
	}

}