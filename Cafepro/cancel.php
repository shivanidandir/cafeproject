<!DOCTYPE HTML>

<html>

    <head>

        <title>Sign-Up</title>

        <link rel="stylesheet" type="text/css" href="book.css">
    </head>



    <div class="header">

        <h1>CAFE DECUSTARD</h1>

    </div  >
    <div class="background"></div>
    <div class="backdrop"></div>
    <div class="login-form-container" id="login-form">
        <div class="login-form-content">
            <div class="login-form-header">
                <h1>CAFE DECUSTARD</h1>
                <div class="logo">
                    <img src=""/>
                </div>
                <h3>Cancel your booking:-</h3>
            </div>
            <form method="post" action="concan.php" class="login-form">
                <?php include 'concan.php'?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="input-container">
                        <i class="fa fa-envelope"></i>
                        <input type="text" class="input" name="name1" placeholder="Your name please"/>
                    </div>
                    <input type="submit" name="ok" value="Ok" class="button"/>


                </div>
                </div>
            </div>
    </body>

</html>