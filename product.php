<?php
    $con = mysqli_connect('localhost', 'root', '','group4','3307');
    if(!$con){
        die('Could not Connect MySql Server:' .mysql_error());
    }

    $sql = "SELECT * FROM products";
    $result = $con->query($sql);
?>


