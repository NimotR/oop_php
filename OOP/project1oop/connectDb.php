<?php


$link = new mysqli('localhost', 'root', '', "studentdb");

if ($link->connect_error) die("connection error: " . $link->connect_error);
echo "connection successful";


?>