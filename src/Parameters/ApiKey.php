<?php 

namespace Buonzz\NATS\Rest\Parameters;

/**
* api-key of the HTTP request (Required).  
*/

class ApiKey implements ApiParameterInterface {

	private $value;

	public function __construct($value){
		$this->setValue($value);
	}

	public function getName(){
		return 'api-username';
	}

	public function getValue(){ return $this->value;}

	public function setValue($value){
		$this->value = $this->validate($value);		
	}

	public function validate($value){

		if (!preg_match('/^[A-Za-z0-9]{32,32}$/', $value))
			throw new \InvalidArgumentException("the apikey " .  $value . " is not valid");
		
		return $value;
	}
}