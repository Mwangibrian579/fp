
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
                <li><a href="admin.php">Admin login</a></li>
                <li><a href="index.php">Author Signup</a></li>
                <li><a href="#login">Author Login</a></li>
            </ul>
        </nav>
    </header>
  <div class="login-container">
    <h1>Login</h1>
    <form action="login_con.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" name="login">Login</button>
      <a href="dash.php">Sign Up</a> <br><br>
    </form>
  </div>
</body>
</html>
