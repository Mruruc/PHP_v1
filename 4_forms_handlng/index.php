<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php session_start(); ?>
    <form action="./post.php" method="post">
        <label for="f_name">First Name</label><br>
        <input type="text" name="firstName" id="f_name"
               value="<?php 
               echo isset($_SESSION["firstName"]) ? htmlspecialchars($_SESSION['firstName']) : ''; 
               ?>"> <br>

        <label for="l_name">Last Name</label><br>
        <input type="text" name="lastName" id="l_name" 
               value="<?php 
                 echo (isset($_SESSION['lastName'])) ? htmlspecialchars($_SESSION['lastName']): ""; 
               ?>">
               <br>

        <input type="submit" value="Submit">

        <?php
            echo isset($_SESSION["error"]) ? "<p style='color: red;'>". $_SESSION["error"] . "</p>" : "";
            unset($_SESSION["error"]); 
            unset($_SESSION["lastName"]);
            unset($_SESSION["firstName"]);
        ?>
    </form>
</body>
</html>