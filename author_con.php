<?php
session_start();
 include("connection.php");
 include("function.php");
// save_recipe.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    

    // Database connection parameters
    $dbhost = "localhost";
    $dbuser = "root";
    $dpass = "";
    $dbname = "admin_db";

    // Create connection
    $con = mysqli_connect ($dbhost,$dbuser,$dpass,$dbname);

    // Check connection
    if (!$con) {
        die("Connection failed");
    }

    
}
?>
