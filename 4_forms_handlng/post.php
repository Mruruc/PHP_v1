<?php
     session_start();
     require "validation.php";

    // validations
    $firstName= $lastName="";
    $validationError="";
    /**
     * we check whether the form has been submitted 
     * using $_SERVER["REQUEST_METHOD"]. If the REQUEST_METHOD is POST,
     * then the form has been submitted - and it should be validated. 
     * If it has not been submitted, skip the validation
     */
    if($_SERVER["REQUEST_METHOD"] === "POST"){
       try{
            $firstName=validate($_POST["firstName"]);
            $lastName=validate($_POST["lastName"]);
       }catch(Exception $ex){
        // $validationError=$ex->getMessage();
        
          $_SESSION["error"]=$ex->getMessage();
          $_SESSION["firstName"]=$firstName;
          $_SESSION["lastName"]=$lastName;
          header("Location: index.php");
          exit;    
       }
    }

    echo($firstName."<br/>");
    echo($lastName);

    if($validationError){
        echo"{$validationError}";
    }


   // phpinfo();
?>