<?php

namespace Buonzz\NATS\Rest;

use Buonzz\NATS\Rest\Actions\Ping;

class Service implements EndpointInterface{

  public function getName(){
      return 'service';
  } 

  public function ping(){
    $action = new Ping();
    $action->execute();
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