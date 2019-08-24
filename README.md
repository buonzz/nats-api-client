# nats-api-client
PHP client for https://tmmwiki.com/index.php/NATS4_REST_API_Overview


## DISCLAIMER

This class library or any part of this codes is NOT affiliated or officially supported by [Too Much Media's NATS Software](https://www.toomuchmedia.com/pp_nats.htm). Use this library at your own risk. It is highly recommended to create an account with limited permission when calling the API via this library. NATS are trademark of [Too Much Media](http://toomuchmedia.com/).


## Installation

add via composer

```
composer require buonzz/nats-api-client
```

instantiate the client

```
use Buonzz\NATS\Rest\Client;

$client = new Client('http://www.yournats.com', 'affiliate_username', 'affilite_apikey');
```


initiate a call

```
use Buonzz\NATS\Rest\EndPoints\Service;

$service = new Service($client);

$result = $service->ping();

```

now you have the $result variable containing the result of the api call.
