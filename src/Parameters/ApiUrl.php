<?php 

namespace Buonzz\NATS\Rest\Parameters;

/**
* url of the HTTP request (Required).  
*/

class ApiUrl implements ApiParameterInterface {

	private $value;

	public function __construct($value){
		$this->setValue($value);
	}

	public function getName(){
		return 'url';
	}

	public function getValue(){ return $this->value;}

	public function setValue($value){
		$this->value = $this->validate($value);		
	}

	public function validate($value){

		if(!filter_var($value, FILTER_VALIDATE_URL))
			throw new \InvalidArgumentException("the api url: " . $value . " is not a valid url");
		else
			return true;
		
		return $value;
	}
}