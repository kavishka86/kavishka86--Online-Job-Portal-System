<?php

$con=new mysqli('localhost','root','','jobdetails');

if(!$con)
{
    die(mysqli_error($con));
}

?>