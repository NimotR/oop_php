<?php
$link = new mysqli('localhost', 'root', '');

if ($link->connect_error) die("connection error: " . $link->connect_error);
echo "connection successful";


$data = "CREATE DATABASE studentDb";

if ($link->query($data)){
    echo "<br> Database successfully created";
}else {
    echo "<br>Database not created";
}

$link->close();
?>