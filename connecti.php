<?php

$dbhost = "localhost";
$dbuser = "root";
$dpass = "";
$dbname = "admin_db";

$con = mysqli_connect($dbhost,$dbuser,$dpass,$dbname);

if(!$con){
    die("failed");
}
?>