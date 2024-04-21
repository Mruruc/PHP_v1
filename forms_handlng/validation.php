<?php

     function validate($input){
        if(empty($input)){
            throw new Exception("Empty Field!");
        }
        $input=trim($input);
        $input=stripslashes($input);
        $input=htmlspecialchars($input);
        return $input;
     }
?>