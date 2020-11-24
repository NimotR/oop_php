<?php

require('connectDb.php');

$data = "SELECT id, firstname, lastname, email, reg_date FROM students";

$result = $link->query($data);
$rows = $result->num_rows;
if ($rows > 0) {
?>

<table border="2px">
    <td>ID</td>
    <td>Firstname</td>
    <td>Lastname</td>
    <td>Email</td>
    <td>Created Time</td>

<?php
    foreach($result as $row){
        
        $id = $row["id"];
        $firstname = $row["firstname"];
        $lastname= $row["lastname"];
        $email= $row["email"];
        $date= $row["reg_date"];


        echo "<tr>";
        echo "<td> $id</td>";
        echo "<td> $firstname</td>";
        echo "<td> $lastname </td>";
        echo "<td> $email</td>";
        echo "<td> $date</td>";
        echo "</tr>";
    }

    echo "</table>";
}else {
    echo "0 result";
}

$link->close();
?>