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
                <h1>cafe Login</h1>
                <div class="logo">
                    <img src=""/>
                </div>
                <h3>Login</h3>
            </div>
            <form method="post" action="loginconnect.php" class="login-form">
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="input" name="email" required="" placeholder="Enter your email" 
                           oninvalid="this.setCustomValidity('Enter Valid email')"
                           oninput="setCustomValidity('')"      
                           ></input>
                </div>
                <div class="input-container">
                    <i class="fa fa-lock"></i>
                    <input type="password"  id="login-password" class="input" name="password"  placeholder="Enter your password"
                           oninvalid="this.setCustomValidity('password incorrect')"
                           oninput="setCustomValidity('')"></input>
                </div>
                <input type="submit" name="login" value="Login" class="button"/>
                <pre>                <a href="forgot.php" name="forgot">Forgot Password?</a>
                New User?<a href="signup.php" style="text-decoration: underline" >Signup</a></pre>
            </form>
        </div>
    </div>
</body>
</html>
