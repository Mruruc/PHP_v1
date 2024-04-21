<?php
  //variables
  // echo phpversion();
  $userName="john_doe";
  $password="secretPassword";
 // $dateOfBirth=new DateTime();
  echo "{$userName} <br/>";
  echo "{$password} <br/>";
  var_dump($userName);
  //echo "{}";
 // echo "{$dateOfBirth}";

 /* 
  *Supported data types:
  *String.
  *Integer.
  *Float(floating point numbers- also called double).
  *Boolean
  *Array
  *Object
  *NULL
  *Resource
  */

  $age=99;
  echo"<br/>$age <br/>";
  var_dump($age);

  $isMarried=true;
  echo"<br/>$isMarried <br/>";
  var_dump($isMarried);

  $GPA=NULL;
  echo "<br/>";
  var_dump($GPA);
// Get the Type
//To get the data type of a variable, use the var_dump() function.
 
 echo "<br/>";
 echo phpversion();

?>