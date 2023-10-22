<?php
 class Student {

   public $name;

   public function __construct($name){
    $this->name = $name;
   }

    function avg($math, $english) {
        echo (($math + $english) / 2)."\n";
    }
 }

 $a001 = new Student("sato");
 echo $a001->name."\n";

 $a002 = new Student("tanaka");
 echo $a002->name."\n";