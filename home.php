
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Homepage</title>
    <link rel="stylesheet" href="home.css">
    
</head>
<body>
<header>
        <nav>
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="admin.php">Admin login</a></li>
                <li><a href="index.php">Author Signup</a></li>
                <li><a href="login.php">Author Login</a></li>
            </ul>
        </nav>
    </header>
<form action="home_con.php">
<h1>Try out Our Recipies</h1>
<div class="product-grid">
    <?php
    include("connection.php");

    $query = "SELECT * FROM recipe_author";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product-container'>";
            echo "<h3>" . $row['title'] . "</h3>";
                echo "<p>Procedure And Ingredience:" . $row['content'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No products found.";
    }

    mysqli_close($con);
    ?>
   </div>
</body>
</html>

   