<?php  
include ("connection.php");

function check_login ($con)
{

    if(isset($_SESSION['user_id']))
    {
        
        $id= $_SESSION['user_id'];
        $qeury= "select *from login_admin where user_id = '$id' limit 1";

        $result= mysqli_query($con,$qeury);
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data= msqli_fetch_assoc($_result);
            return $user_data;
        }
    }
        //redirect to login
        header("Location: login.php");
        die;
    
}

function connectToDatabase() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dpass = "";
    $dbname = "admin_db";


    // Create connection
    $con =  mysqli_connect($dbhost,$dbuser,$dpass,$dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    return $con;
}
