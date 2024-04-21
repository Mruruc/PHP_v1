<?php

    function foo(){
        echo("Foo"."<br/>");
    }

    foo();

    function bar($param = 90){
        echo($param."<br/>");
    }

    bar();
    bar("Some");


    function sum($x,$y){
        return $x + $y ."<br/>";
    }

    $result=sum(1,100);
    echo($result);

    // Passing Argument By Value.
    $xx=30;

    function byValue($xx){
        $xx +=10;
        echo("Passed By Value ==>".$xx."<br/>");
    }
    byValue($xx);
    echo($xx."<br/>");


    // Passing Arguments By reference
    
    function byReference(&$x){
        $x +=10;
        echo("Passed By Reference =>".$x."<br/>");
    }

    $y=5;
    byReference($y);
    echo("==>>".$y."<br/>");


    // variadic argument

    function fun(...$fun){
        $length=count($fun);
        for($i=0; $i<$length; $i++){
            echo($fun[$i] ."<br/>");
        }
    }

    fun("fun1","fun2","fun3","fun4");


?>