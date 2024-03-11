<?php
session_start();
include("connection.php");
include("function.php");
        // Connect to your database (replace DB_HOST, DB_USER, DB_PASSWORD, and DB_NAME with your database credentials)
        $con = mysqli_connect($dbhost,$dbuser,$dpass,$dbname);

        // Check connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch recipes from the database
        $query= "select * from recipes where content = '$content'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0)  {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="recipe">';
                echo '<p><strong>Ingredients:</strong> ' . $row["ingredients"] . '</p>';
                echo '<p><strong>Instructions:</strong> ' . $row["instructions"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "<p>No recipes found.</p>";
        }

        // Close the database connection
        mysqli_close($con);

?>