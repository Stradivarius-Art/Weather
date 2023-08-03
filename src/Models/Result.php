<?php

namespace Plasma\Models;

class Result{
    private string $region;
    private string $localtime;
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

 public function setregion(string $region): Result
 {
     $this->region = $region;
     return $this;
 }

 public function getregion(): string
 {
    return $this->region;
  
 }

 public function setlocaltime(string $localtime): Result
 {
     $this->localtime = $localtime;
     return $this;
 }

 public function getlocaltime(): string
 {
    return $this->localtime;
  
 }


}

?>