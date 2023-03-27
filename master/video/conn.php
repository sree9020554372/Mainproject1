<?php
    $conn = mysqli_connect('localhost', 'root', '', 'wallpainting');
 
    if(!$conn){
        die("Error: Failed to connect to database!");
    }
?>