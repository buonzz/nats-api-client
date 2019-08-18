<?php

namespace Buonzz\NATS\Rest;

class Service implements EndpointInterface{

  public function getName(){
      return 'service';
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
          'ping',
          'rule-condition-data',
          'rule-info',
          'stats-breakdowns',
          'timezone',
          'timestamp'
      ];
  }
}