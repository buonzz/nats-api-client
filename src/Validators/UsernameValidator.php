<?php 

namespace Buonzz\NATS\Validators;

class UsernameValidator {

	private $username;

	public function __construct($username){
		$this->username = $username;
	}

	public function validate(){
		if (!preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5,31}$/', $this->username))
			throw new \InvalidArgumentException("the username " .  $this->username . " is not valid. alpha-numeric only, up to 51 characters, minimum of 5");
		else
			return true;
	}
}