<?php 

namespace Buonzz\NATS\Rest\Endpoints;

interface EndpointInterface {

	public function getName();
	public function getValidActions($value);

}