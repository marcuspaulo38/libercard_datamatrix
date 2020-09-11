<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
 
$host      =  "localhost";
$banco     = "test";
$user      = "root";
$password = "";


$mysqli = mysqli_connect($host, $user, $password, "test");

if (mysqli_connect_errno())
{
    printf("Cone&ccedil;&atilde;o falhou: %s\n", mysqli_connect_error());
    
    exit();
}
 
?>