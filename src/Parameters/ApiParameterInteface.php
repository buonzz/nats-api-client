<?php 

namespace Buonzz\NATS\Rest\Parameters;

interface ApiParameterInterface {
	public function getName();
	public function getValue();
	public function setValue($value);
	public function validate($value);
}