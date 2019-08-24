<?php 

namespace Buonzz\Nats\Rest\Actions;

/**
*  ping the API
*  @see https://tmmwiki.com/index.php/NATS4_REST_API_Ping
*/
class Ping extends BaseAction {

    private $name = 'ping';
    private $method = "GET";

    public function execute(){
        parent::execute();
    }
}