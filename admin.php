

<?php
session_start();

   include("connection.php");
  include("function.php");
   
    if(isset($_POST["admin-login"]))
   {

     $user_name = $_POST['username'];
     $password = $_POST['password'];

     if(!empty($user_name) && !empty($password) && !is_numeric ($user_name))
    {

        $query = "select * from admin_only where admin = '$user_name' limit 1";

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
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<header>
        <nav>
            <ul class="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="#admin">Admin login</a></li>
                <li><a href="index.php">Author Signup</a></li>
                <li><a href="login.php">Author Login</a></li>
            </ul>
        </nav>
    </header>
  <div class="login-container">
    <h1>Login</h1>
    <form action="admin.php" method="post">
      <label for="username">admin:</label>
      <input type="text" id="username" name="username" required value="admin">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" name="admin-login">Login</button>
    </form>
  </div>
</body>
</html>
