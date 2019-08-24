<?php

namespace Buonzz\NATS\Rest\Endpoints;

use Buonzz\NATS\Rest\Actions\Ping;

class Service extends BaseEndPoint{

  private $client;

  public function __construct($client){
      $this->client = $client;
  }

  public function getName(){
      return 'service';
  } 

  /**
   *  invoke the actual action for this endpoint
   */
  function __call($method, $params){
      if(!in_array($method, $this->getValidActions()))
        throw new \Exception( $method . " action is not available on " . get_class($this));

  }

  public function ping(){
    $action = new Ping();
    $action->execute($client, $endpoint);
  }
    
  public function getValidActions(){
      return [
          'check-functions',
          'condition',
          'countries',
          'country',
          'datetime',
          'languages',
          'periods',
          'ping',
          'rule-condition-data',
          'rule-info',
          'stats-breakdowns',
          'timezone',
          'timestamp',
          'sendemail'
      ];
  }
}