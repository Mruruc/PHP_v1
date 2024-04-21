<?php

     foreach($_REQUEST as $key=>$value){
        echo("{$key}==>{$value} </br>");
     }

     echo($_REQUEST["firstName"]);

     echo("</br>");

     echo var_dump($_REQUEST);
     echo("</br>");

     echo var_dump($_POST);
     
?>