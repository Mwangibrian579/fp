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

        //read from database
        $query = "select * from login_admin where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);
        
      if($result)
      {
          if($result && mysqli_num_rows($result) > 0)
          {
             
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password'] === $password)
            {
              header("Location: dash.php"); 
              die;
            }
          }
      } else
      {
          echo "Wrong username or Password!";
      }
    }
  }
?>