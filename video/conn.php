<?php
    $conn = mysqli_connect('localhost', 'root', '', 'elegantdance');
 
    if(!$conn){
        die("Error: Failed to connect to database!");
    }
?>