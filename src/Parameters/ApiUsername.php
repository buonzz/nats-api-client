<?php 

namespace Buonzz\NATS\Rest\Parameters;

/**
* api-key of the HTTP request (Required).  
*/

class ApiUsername implements ApiParameterInterface {

	private $value;

	public function __construct($value){
		$this->setValue($value);
	}

	public function getName(){
		return 'api-key';
	}

	public function getValue(){ return $this->value;}

	public function setValue($value){
		$this->value = $this->validate($value);		
	}

	public function validate($value){

		if (!preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5,255}$/', $value))
			throw new \InvalidArgumentException("the api-key " .  $value . " is not valid. alpha-numeric only, up to 255 characters, minimum of 32");
		
		return $value;
	}
}