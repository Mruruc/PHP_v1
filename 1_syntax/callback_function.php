<?php
   // A callback function is a function which is passed as an argument into another function.

   function foo($callback){
      echo("foo <br/>");
      $callback();
   }

   function bar(){
    echo("bar \n <br/>");
   }

   foo("bar");

   // anonymous function

   foo(function(){echo("anonymous function.\n");});
   foo(fn()=>print("Arrow Fight \n <br/>"));
   
   //array_map() function

   $fruits=["apple","pear","coconut","banana"];
   $arrayOfLength= array_map(function($fruit){return strlen($fruit);}, $fruits );

   $arrayOfLength2= array_map(fn($fruit) => strlen($fruit), $fruits );

   print_r($arrayOfLength);

?>