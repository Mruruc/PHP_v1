<?php
    // PHP has three different variable scopes.
/**
 * local => A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.
 * global => A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.
 * static => Normally when a function is completed/executed, all of its variables are deleted. 
 *           However sometimes we need a local variable not be deleted.
 */
  $x=2314;

  echo "<p>Accessing a global variable outside a function:{$x}</p>";
  function test(){
    $localVar="Something";
    echo "<p>Accessing a global variable in a function: {$x}</p>";
  }
 /// test(); //Warning: Undefined variable $x in C:\xampp\htdocs\php_v1\syntax\variable_scope.php on line 13
          //Accessing a global variable in a function:
 // echo "<p>Accessing a local variable outside of a function: {$localVar}</p>";

 /**
  * Note:
  * You can have local variables with the same name in different functions, 
  * because local variables are only recognized by the function in which they are declared.
  */

  // The 'global' keyword is used to access a global variable from within a function.
  $globalVar="GLOBAL";

  function foo(){
    global $globalVar;
    echo "<p>Accessing a global variable in a function: {$globalVar}</p>";
  }
  foo();

  function bar(){
    echo "<p>Accessing a global variable in a bar function: {$globalVar}</p>";
  }
  ///bar();

    /**
   * PHP stores all global variables in an array called $GLOBALS.
   * This array is also accessible from within functions and can be used to update and access global variable.
   *  
   */

  $globalVariable=10;

  function foo2(){
    // echo $globalVariable; // error 
      var_dump($GLOBALS['globalVariable']);
      $GLOBALS['globalVariable']=12;
  }

  foo2();
  echo $globalVariable;


  function staticVariableTest(){
    static $staticVar=10;
    $nonStaticVar=20;

    echo $staticVar."\n";
    echo $nonStaticVar."\n";

    $staticVar ++;
    $nonStaticVar++;
    
  }

  /*
  staticVariableTest();
  staticVariableTest();
  staticVariableTest();
  */

?>