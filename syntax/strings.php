<?php
   // Strings in PHP are surrounded by either double quotation marks,
   // or single quotation marks.

   /**
    * Note: Note There is a big difference between double quotes and single quotes in PHP.
    * Double quotes process special characters, single quotes does not.
    */

    $str="Something!";

    // strlen() returns length of the a string.
    echo strlen($str);
    // str_word_count() counts the number of the words in a string.

    echo "<br/>";
    echo str_word_count($str);

    echo "<br/>";
    echo strpos($str,"thing");
    
    //strtoupper() returns the string in upper case:
    echo "<br/>";
    echo strtoupper($str);

    // strtolower(); 
    // str_replace();
    // strrev(); reverser a string.
    // trim();

    // explode(); => splits a string into an array.
    echo "<br/>";
    print_r(explode(" ",$str));

    // Concatenation 
    echo "<br/>";
    $concat="Some". " "."thing";
    echo "{$concat}";

    // substr(); slicing a string.
    echo "<br/>";
    echo substr("beautiful",0,5);
?>