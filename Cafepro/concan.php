<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

define('DB_HOST', 'localhost');
define('DB_NAME', 'cafed');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));

//$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
function deleteuser() {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
    $myname = $_POST['name1'];
    $query = "DELETE FROM rege where name='$myname'";

    $data = mysqli_query($con, $query);
    
     echo '<script>alert("Your booking is Successfully cancelled!");</script>';

     header("refresh:0;url=index.php");
    
}

function Deleteup() {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));

    if (!empty($_POST['name1'])) { //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
        $query = mysqli_query($con, "SELECT * FROM rege WHERE name = '$_POST[name1]'") or die();
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if ($row) {
            deleteuser();
        } else {
            echo '<script>alert("no table booking present!");</script>';
            header("refresh:0; url=cancel.php");
        }
    }
    else{
         echo '<script>alert("No name entered!");</script>';
            header("refresh:0; url=cancel.php");
    }
}

if (isset($_POST['ok'])) {
    Deleteup();
}
?>