<?php

  function say_hello(){
    echo "Hello world!","\n";
  }

  say_hello();
  say_hello();
  say_hello();

  $say_hallo = function(){
    echo "Good Morning!". "\n";
  };

  $say_hallo();

  function say_hello2($greeting){
    echo $greeting."\n";
  };
  
  say_hello2("Good Morning");
  say_hello2("Good Afternoon");
  say_hello2("Good Evening");

  function cal($x){
    echo ($x * 3)."\n";
  };
  cal(6);

  function cal2($y, $z){
    echo ($y / $z)."\n";
  };
  cal2(6, 3);

  function cal3($y, $z){
    return $y / $z;
  };
  $result = cal3(6, 3);
  echo $result."\n";