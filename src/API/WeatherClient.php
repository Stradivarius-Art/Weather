<?php

namespace Plasma\API;
use GuzzleHttp\Client;

class WeatherClient{
    private const HOST = "http://api.weatherapi.com/v1/current.json";

   private $client;

    public function __construct(private readonly string $apikey)
    {
      $this -> client = new Client(); 
    }

    public function request(string $query)
    {
       $endpoint = self::HOST . '?' .   http_build_query([
        'key' => $this->apikey,
        'q' => $query
       ]);
     

       $response = $this->client->get($endpoint);

      return json_decode($response->getBody()->getContents(), true);
    }
    
}

?>