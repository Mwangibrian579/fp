<?php
session_start();

   include("connection.php");
   include("function.php");
  
    if($_SERVER['REQUEST_METHOD'] == "POST")
   {

      //something was posted
     $user_name = $_POST['username'];
     $password = $_POST['password'];

     if(!empty($user_name) && !empty($password) && !is_numeric ($user_name))
    {

        //save to database
        $query= "INSERT into login_admin (user_name,password) values ('$user_name', '$password')";

        mysqli_query ($con, $query);

        header("Location: login.php"); 
        die;
    }else
    {
        echo "please enter some valid information!";
    }
   }
?>