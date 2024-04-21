<?php

    require "./Phone.php";
  
    $phone=new Phone(12313425,235.23,false);
    echo $phone ;
    
    echo "</br>". $phone->getPrice();
?>