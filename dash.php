<?php
//session_start();

//include("connection.php");
  // include("function.php");

   // var_dump($_SESSION['password']);

//if (isset($_SESSION['password']))
//{
    //$user_data = $_SESSION['password'];
//} else {
    //header("Location: dash.php");
   // exit;
//}
?>
<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta carset= "UTF-8">
        <meta http-equiv= "X-UA-Compatible" content= "IE=edge">
        <meta name= "viewport" content= "width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="dash.css">
        <title>RECIPE CHANEL </title>
    </head>

    <body>
        <div class= "sidemenu">
        <div class= "brand-name">  
            <h1>PRAISE DELICACIES</h1>
    </div>
    <ul>
    <li><image src="images/dashboard.png" alt="dashboard">&nbsp;Dashboard</li>
    <li><image src="images/menu.png" alt="menu">&nbsp;Food Menu</li>
    <li><image src="images/about.png" alt="about">&nbsp;About</li>
    <li><image src="images/settings.png" alt="settings">&nbsp;Settings</li>
    
    </ul>
        </div>
        <div class= "container">
         <div class = "header">
         <div class= "nav">
         <div class= "search">
            <input type= "text" placeholder= "Search..">
            <button type= "submit"><image src="images/search.png" alt="search"></button>

            <div class= "user">
                <a href="index.php" class="btn">Add new</a>
                <image src="images/user.png" alt="user">
                    <div class= "image-case">
                    <image src="images/not.png" alt="not"> 
                    </div>
            </div>
         </div>
         <a href= "home.php" class= "btn">logout</a>
        </div>
            <ul class="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="delete.php">Delete Authors</a></li>
                <li><a href="admin.php">Admin login</a></li>
                <li><a href="index.php">Author Signup</a></li>
                <li><a href="recipe.php">Recipe</a></li>
                <?php
                //if ($user_data === 'password') {
                    //echo'<li><a href="index.php">Author Signup</a></li>';
               // }
                ?>
                <li><a href="login.php">Author Login</a></li>
               
            </ul>
         </div>
         
         <div class= "content">
         <div class= "cards">
         <div class= "card">
         <div class= "box">
            <h1>1</h1>
            <h3>Admin</h3>
         </div>
         <div class= "icon-case">
         <image src="#notif" alt=""> 
         </div>
         </div>
         <div class= "card">
         <div class= "box">
            <h1>2</h1>
            <h3>Authors</h3>
         </div>
         <div class= "icon-case">
         <image src="#notif" alt=""> 
         </div>
         </div>
         <div class= "card">
         <div class= "box">
            <h1>4</h1>
            <h3>Recipes</h3>
         </div>
         <div class= "icon-case">
         <image src="#notif" alt=""> 
         </div>
         </div>
         <div class= "card">
         <div class= "box">
            <h1>2</h1>
            <h3>Hotels</h3>
         </div>
         <div class= "icon-case">
         <image src="#notif" alt=""> 
         </div>
         </div>
         </div>
         <div class= "content-2">
         <div class= "new-recipe">
            <div class= "title">
               <h2>Recipes</h2>
               <a href="home.php" class="btn">View All</a>
            </div>
             <table>
                <tr>
                    <th>Author</th>
                    <th>Recipe</th>
                </tr>
             </table>
         </div>
         </div>
         </div>
        </div>
    </body>

</html>
