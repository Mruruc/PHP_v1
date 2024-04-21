<?php
    
     $hour=14;

     if($hour === 12){
        echo("Good Afternoon!");
     }
     elseif($hour < 12){
        echo("Good Morning");
     }
     elseif($hour < 8 && $hour > 4){
        echo("Morning!");
     }
     else{
        echo("Good Evening!");
     }

     echo("<br/>");

     $time=$hour === 14 ? "Time Something!" : "Not Time!";
     echo($time);

     echo("<br/>");

     switch("red"){
        case "red": echo("Favorite Color is RED!");
            break;
        case "pink": echo("Favorite Color is PINK!");
            break;    
        default:
           echo("Default Value is BLACK");    
     }

     // LOOPS

     echo("<br/>");
     $i=10;

     while($i >= 0){
        $i--;
        //if($i ==3) continue;
        echo("HEY =>".$i."<br/>");
       
     }

     $x=1;
     while($x < 10):
        echo($x ."<br/>");
        $x++;
     endwhile; 
     
     do{
        echo("Statement is executed even if the condition is false!");
     }while(2> 4);

     for($z=10; $z<=20; $z++){
        echo("Hello".$z."<br/>");
     }

     $colors=["red","green","blue","yellow"];
             //array("red","green","blue","yellow");

     foreach($colors as $m){
        echo($m."<br/>");
     }






?>