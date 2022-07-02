<?php
session_start();
    if(!isset($_POST['submit'])){

    }
    $email = ($_POST["email"]);
        if (empty($email)) {
            $_SESSION['error'] = "<p class='error'>Error, you did not fill in your email</p><br>";
            header("Location:../index.php?error=empty");
            exit();
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error'] = "<p class='error'>Error, please use a valid email'</p>";
            header("Location:../index.php?error=invalidemail");
            exit();
        }
    
    
        include "dbh.php";
        include "comingsoon.classes.php";
    
    
?>
