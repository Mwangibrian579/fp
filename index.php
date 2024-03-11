
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
        <nav>
            <ul class="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="admin.php">Admin login</a></li>
                <li><a href="#inex">Author Signup</a></li>
                <li><a href="login.php">Author Login</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <form action="index_con.php" method="post">
            <h1>Sign Up</h1>
            <div class="form-group">
                <label for="user_name">Username</label>
                <input type="text" id="user_name" name="username" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone number</label>
                <input type="number" id="phone_number"  name="phone_number" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
