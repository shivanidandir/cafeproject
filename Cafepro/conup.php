<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'cafed');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));

//$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
function updateuser() {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
     $hmppl = $_POST['howppl'];
    $dt = $_POST['DateTime'];
    $name2= S_POST['name2'];
   $query = "UPDATE rege set hmppl='$hmppl',dt='$dt' where name='$name2'";
    $data = mysqli_query($con, $query)or die(mysqli_error($con));
   
      echo '<script>alert("Your table is Successfully updated!");</script>';
      
        header("refresh:0; url=index.php");
    
}
function updateup() {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
    
    if (!empty($_POST['name2'])) { //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
        $query = mysqli_query($con, "SELECT * FROM rege WHERE name = '$_POST[name2]'") or die();

        if ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            updateuser();
        }
        else {
            echo "SORRY...no BOOKING PRESENT...";
        }
    }
    else
    {
         echo '<script>alert("No name entered!");</script>';

         header("refresh:0; url=update.php");
    }
}

 if(isset($_POST['update'])){
    updateup();
}

?>