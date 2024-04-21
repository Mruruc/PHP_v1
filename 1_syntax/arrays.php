<?php
    
    $cars=array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo("<br/>");
    $var=array_push($cars,"Ford");
    
    // first argument array itself,
    // second the index of the array that we want to remove,
    /// third how many element we want to remove after specifying the index.
    array_splice($cars,3,1);
    
    array_pop($cars);

    foreach($cars as $i){
        echo($i."<br>");
    }

    // Associative Arrays
    $books=array("Book1"=>20.99,"Book2"=>63.20,"Book3"=>100.70);
    $books["Book4"]=20.21;
    array_pop($books);
    array_shift($books);
    foreach($books as $key => $value){
        echo("BookName:".$key ."  Price: " .$value."<br/>");
    }
?>