<?php
	// include 'dbh.php';
    session_start();
    $sql = "INSERT INTO `comingsoon_tb` (`email`) VALUES ('$email')";
    
    if ($conn->query($sql) === TRUE) 
    {
    $_SESSION['success'] = "<p class='success'>Thank You very much, your email has been submitted successfully, we will notify you as soon as we launch! Cheers...</p><br>";
     header ("Location:../index.php?message=success");
    } 
    else 
    {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>