<?php
//https://www.w3schools.com/php/php_constants.asp

   /**
    * PHP Constants
    * A constant is an identifier (name) for a simple value. 
    * The value cannot be changed during the script.
    * A valid constant name starts with a letter or underscore (no $ sign before the constant name).
    * Note: Unlike variables, constants are automatically global across the entire script.
    */

    define("SOMETHING","HELLO SOMETHING");

    echo(SOMETHING."<br/>");

    // We can also create constant by the const keyword:

    const LOVE="CODING";
    echo(LOVE);

    /**
     * const vs. define()
     * const are always case-sensitive
     * define() has has a case-insensitive option.
     * 
     * const cannot be created inside another block scope, 
     * like inside a function or inside an if statement.
     * 
     * define can be created inside another block scope.
     */

     // From PHP7, 
     // We can create an Array constant using the define() function.

     define("GENDER",["FEMALE","MALE","OTHERS"]);
     echo "<br/>";
     echo(GENDER[0]);

     function foo(){
        echo(GENDER[1]);
     }
     echo "<br/>";
     foo();

     // Magic Constants
     echo "<br/>";
     echo(__DIR__);

     echo "<br/>";
     echo(__FILE__);

     echo "<br/>";
     echo(__LINE__);


?>