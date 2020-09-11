<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
 
//banco de dados https://auth-db186.hostinger.com/index.php?db=u835826360_ac&target=db_structure.php
$host = "sql186.main-hosting.eu";
$banco = "u835826360_ac";
$user = "u835826360_ac";
$password = "KxzsePL&w1N";


$mysqli = mysqli_connect($host, $user, $password, "u835826360_ac");

if (mysqli_connect_errno())
{
    printf("Cone&ccedil;&atilde;o falhou: %s\n", mysqli_connect_error());
    
    exit();
}
 
?>
                                       
                             