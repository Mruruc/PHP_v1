<?php
    //json_encode()
    // json_decode()

    $user=array(
        "firstName"=>"John",
        "lastName"=>"Doe",
        "dateOfBirth"=>date("Y-m-d")
    );

    echo json_encode($user,JSON_PRETTY_PRINT);

    $jsonUser='{"firstName":"John","lastName": "Doe", "dateOfBirth" : "2024-03-08"}';
    $fromJsonToUser= json_decode($jsonUser);

    echo "\n";
    echo var_dump($fromJsonToUser);
    
    echo ($fromJsonToUser ->firstName."\n");
    echo ($fromJsonToUser ->lastName."\n");
    echo ($fromJsonToUser ->dateOfBirth."\n");
    

?>