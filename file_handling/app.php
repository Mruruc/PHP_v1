<?php
    require "User.php";
    require "FileHandler.php";
    /*
    $user=new User();
    
    $user->setId(1);
    $user->setUserName("Mr_john");
    $user->setPassword("pASSKJDICQWE");
    */
    $user=new User(2,"Mr_john","pASSKJDICQWE");

   // echo $user->getUser();
   // echo("<br/>");
    //var_dump($user instanceof User);
   // echo json_encode($user);

   // $users=[$user];
   // echo $users[0]->getUserName();
    //echo("<br/>");
   // echo($users[0]);

   $filehandler=new FileHandler("user.json","r");

  // $filehandler->write(json_encode($user));

   echo $filehandler->read();



?>