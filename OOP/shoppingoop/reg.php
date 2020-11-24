<?php

require('db.php');

if (isset($_REQUEST['submit'])) {
    
    require('var.php');


    $data = "INSERT INTO users (username, password, email, trn_date) 
    VALUES ('$uname', '".md5($pass)."', '$email', '$trn_date')";


    if($link->query($data)===TRUE){
        echo "<h2>you have successfully registered</h2><br>
        Goto <a href='logform.html'>login form</a> to login";
    }
    else {
        //header("LOCATION: logform.html");
        echo "<h2>you have not successfully register</h2><br>
        Goto <a href='regform.html'>Registration form</a> to re-register";
    }
}

?>