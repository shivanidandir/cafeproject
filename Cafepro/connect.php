<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'cafed');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));

//$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());

function NewUser() {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));

    $name21 = $_POST['name'];
    $hmppl = $_POST['howppl'];
    $dt = $_POST['DateTime'];
    $spcl = $_POST['special'];
    $contact = $_POST['contact'];

//    $hquery = "Select count(name) from rege group by dt";
//    if ($hquery < "4") {
        $query = "INSERT INTO rege (name,hmppl,dt,spcl,contact) VALUES ('$name21','$hmppl','$dt','$spcl','$contact')";
        $data = mysqli_query($con, $query)or die(mysqli_error($con));
        if ($data) {
            echo '<script>alert("Your table is Successfully booked!");</script>';
            header("refresh:0; url=index.php");
        }
  //  }
// else {
//        echo '<script>alert("All tables are full select some other time slot!");</script>';
//            header("refresh:0; url=book.php");
//    }
}

function SignUp() {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));


    if (!empty($_POST['name'])) { //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
        $query = mysqli_query($con, "SELECT * FROM rege WHERE name = '$_POST[name]'") or die(mysqli_error(con));

        if (!$row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            newuser();
        } else {
            echo '<script>alert("Sorry you already booked the table!");</script>';

            header("refresh:0; url=book.php");
        }
    }
    else
    {
         echo '<script>alert("No data entered!");</script>';

            header("refresh:0; url=book.php");
    }
}

if (isset($_POST['submit'])) {
    SignUp();
}?>