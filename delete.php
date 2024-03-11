<?php
 session_start();

 include("connection.php");
 include("function.php");
 

if (isset($_POST['password'])) {
    $query = "DELETE FROM login_admin WHERE password ='$password'";
    
    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare($query);
    $stmt->bind_param($password, $user_data);

    if ($stmt->execute()) {
        // Profile deleted successfully
        // You may also want to perform additional cleanup tasks, like deleting associated data.
        
        // Redirect the user to a success page or log them out.
        header("Location: dash.php");
        exit();
    } else {
        // Error occurred during deletion
        echo "Error: " . $stmt->error;
    }
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>User Profile Deletion</title>
    <link rel="stylesheet" href="delete.css">
</head>
<body>
    <div class="container">
        <h1>User Profile Deletion</h1>
        <form id="deleteForm">
            <div class="form-group">
                <label for="firstname">Username</label>
                <input type="text" id="user_name" name="username" required>
            </div> 
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            </div> 

            <button type="submit">Delete Profile</button>
        </form>
        <div id="message"></div>
    </div>

    <!-- Add your JavaScript here -->
    <script src="delete.js"></script>
</body>
</html>
