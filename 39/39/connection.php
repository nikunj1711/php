<?php

$servername="localhost";
$username="root";
$password="";

try{
    $conn=new PDO("mysql:host=$servername;",$username,$password);

    $que="CREATE "
?>