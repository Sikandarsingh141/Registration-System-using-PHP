<?php

$connection = mysqli_connect("localhost","root","","reg_system");

if(!$connection)
{
    echo "<script>alert('Not Connected')</script>";
}

?>