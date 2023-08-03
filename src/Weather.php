<?php
namespace Plasma;

use IlluminateAgnostic\Arr\Support\Arr;
use Plasma\API\WeatherClient;
use Plasma\Models\Result;

class Weather{

    private WeatherClient $client;
    private string $location;
    public function __construct( string $apikey)
    {
        $this->client = new WeatherClient($apikey);
    }
     
    public function location(string $location): Weather
    {
        $this->location = $location;
        return $this;
    }

    public function get(): Result
     {
         $data = $this->client->request($this->location);

       return (new Result())
       ->setCelsius(Arr::get($data, 'current.temp_c', 0))
       -> setFahrenheit(Arr::get($data, 'current.temp_f', 0));

    //    dd($data['current'] ['temp_c'], $data['current'] ['temp_f']);
     }
}

?>