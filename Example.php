<?php


class Example{
    public $name = "Mosiur Rahman";
    protected $city = 'Dhaka';
    private $country = 'Bangladesh';
    public $value;

    public function __construct(){
//       $this->value = $data;
    }

    public  function addition(){

      echo 'In addition';
    }
   protected function subtraction(){
        echo 'In subtraction';
    }
    private function division(){
        echo 'In division';
    }
}