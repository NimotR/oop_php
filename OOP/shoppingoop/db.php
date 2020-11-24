<?php

#crreate connection to the database
$link = new mysqli("localhost", "root", "", "register");

if($link->connect_error) die("failed to connect. Error: " . $link->connect_error);
//echo "connection successful";

?>