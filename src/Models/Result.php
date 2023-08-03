<?php

namespace Plasma\Models;

class Result{
    private float| int $fahrenheit;
    private float| int $celsius;

    public function setFahrenheit(float| int $fahrenheit): Result
    {
        $this->fahrenheit = $fahrenheit;
        return $this;
    }


    public function setCelsius(float| int $celsius): Result
    {
        $this->celsius = $celsius;
        return $this;
    }


        public function getfahrenheit(): float|int
    {
       return $this->fahrenheit;
     
    }

    public function getcelsius(): float|int
 {
    return $this->celsius;
  
 }
}

?>