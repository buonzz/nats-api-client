<?php 

namespace Buonzz\NATS\Validators;

class ApiUrlValidator {

	private $url;

	public function __construct($url){
		$this->url = $url;
	}

	public function validate(){
		if(!filter_var($this->url, FILTER_VALIDATE_URL))
			throw new \InvalidArgumentException("the api url: " .  $this->url. " is not a valid url");
		else
			return true;
	}
}