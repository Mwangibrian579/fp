<?php
include ('connection.php');

if (isset($_POST["submit"])) {
$title = $_POST["title"];
$content = $_POST["content"];

// Insert the recipe data into the "recipes" table
    $query = "INSERT into recipe_author (title, content) values (?,?)";
    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, "ss", $title, $content);
    mysqli_stmt_execute($stmt);

        echo "Recipe saved successfully.";
        header("Location: home.php");
           }
    $con->close();

?>