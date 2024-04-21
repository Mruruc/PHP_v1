<?php
/**
 * An exception is an object that describes an error or unexpected behavior of a PHP script.
 * 
 */

 // Throwing an Exception

  function validateUserName($username){
    $username=trim($username);
    if(!$username){
        throw new Exception('User Name is Not Valid!');
    }
    return $username;
  }

  try{
    $username=validateUserName('');
    echo $username;

  }catch(Exception $ex){
    echo $ex ."\n";
    echo $ex->getMessage();
  }


?>