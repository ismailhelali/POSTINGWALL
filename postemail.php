<?php

    include_once 'dbconnect.php';

    $email = $_POST['email'];


    $sql = "INSERT INTO `email`(`Email`) VALUES ('$email')" ;

    mysqli_query($conn,$sql);

    header("Location: ../index.php");

?>