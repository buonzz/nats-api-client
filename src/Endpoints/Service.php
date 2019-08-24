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