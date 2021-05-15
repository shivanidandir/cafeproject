<!DOCTYPE HTML>
<html>
    <head>
        <title>Welcome to cafe</title>
        <link rel="stylesheet" type="text/css" href="book.css">
    </head>
    <div class="header">
<!--        <h1>Airline Login</h1>-->
    </div  >
    <div class="background"></div>
    <div class="backdrop"></div>
    <div class="login-form-container" id="login-form">
        <div class="login-form-content">
            <div class="login-form-header">
                <h1>Change password</h1>
                <div class="logo">
                    <img src=""/>
                </div>
                <h3>New password</h3>
            </div>
            <form method="post" action="forgotconnect.php" class="login-form">
                 <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="input" name="email" required="" placeholder="Enter your email" 
                           oninvalid="this.setCustomValidity('Enter Valid email')"
                           oninput="setCustomValidity('')"      
                           ></input>
                </div>
               <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="password" name="pass" placeholder="New Password" id="password" required>
                </div>
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="password" name="cpass" placeholder="Confirm Password" id="confirm_password" required>
                </div>
                <input type="submit" name="login" value="Login" class="button"/>
            </form>
        </div>
    </div>
</body>
</html>
 <script>
                var password = document.getElementById("password")
                        , confirm_password = document.getElementById("confirm_password");

                function validatePassword() {
                    if (password.value != confirm_password.value) {
                        confirm_password.setCustomValidity("Passwords Don't Match");
                    } else {
                        confirm_password.setCustomValidity('');
                    }
                }

                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
            </script>