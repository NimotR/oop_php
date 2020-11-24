<?php

require('connectDb.php');

$data = "CREATE TABLE students(
    id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

if ($link->query($data)){
    echo "<br>Table successfully created";
}else {
    echo "<br>Table not created" . $link->connect_error;
}

$link->close();
?>