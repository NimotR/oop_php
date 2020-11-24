<?php

require('connectDb.php');

if (isset($_POST['submit'])) {

    #getting data fro the form
    $lastname = $_POST["lname"];
    $firstname = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    #inserting data into mysql
    $data = "INSERT INTO students (firstname, lastname,  email, password)
    VALUES ('$lastname', '$firstname', '$email','$password')";

    if ($link->query($data)) {
        echo "<br>New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $link->connect_error;
    }
}
?>