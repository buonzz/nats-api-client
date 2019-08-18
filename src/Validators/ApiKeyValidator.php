<?php 

namespace Buonzz\NATS\Validators;

class ApiKeyValidator {

	private $apikey;

	public function __construct($apikey){
		$this->apikey = $apikey;
	}

	public function validate(){
		if (!preg_match('/^[A-Za-z0-9]{32,32}$/', $this->apikey))
			throw new \InvalidArgumentException("the apikey " .  $this->apikey . " is not valid");
		else
			return true;
	}
}