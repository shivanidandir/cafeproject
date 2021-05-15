<!DOCTYPE HTML>
<html>
    <head>
        <title>Sign-Up</title>
        <link rel="stylesheet" type="text/css" href="book.css">
    </head>
    <div class="header">
        <h1></h1>
    </div  >
    <div class="background"></div>
    <div class="backdrop"></div>
    <div class="login-form-container" id="login-form">
        <div class="login-form-content">
            <div class="login-form-header">
                <h1>Cafe</h1>
                <div class="logo">
                    <img src=""/>
                </div>
                <h3>SIGN UP:-</h3>
            </div>
            <form method="post" action="signupconnect.php" class="login-form">

                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="text" class="input" name="name" required="" placeholder="name" pattern="[A-Za-z]{1,15}"
                           oninvalid="this.setCustomValidity('Enter Valid name')"
                           oninput="setCustomValidity('')"      
                           ></input>
                </div>
                
                <div class="input-container">
                    <i class="fa fa-lock"></i>
                    <input type="number"  id="login-password" pattern="regexp"class="input" name="age"  min="18" max="99"  placeholder="Your Age please"
                           oninvalid="this.setCustomValidity('Not eligible!')"
                           oninput="setCustomValidity('')"></input>

                </div>
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input list="gender" class="input" name="sex" placeholder="Gender" required >
                    <datalist id="gender">
                        <option value="MALE">
                        <option value="FEMALE">
                        <option value="OTHER">
                    </datalist>
                </div>
                 <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <!--                    pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"-->

                    <input type="text" class="input" name="email" required="" placeholder="Email ID" 
                           oninvalid="this.setCustomValidity('Enter Valid Email ID')"
                           oninput="setCustomValidity('')"      
                           ></input>
                </div>
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="password" name="pass" placeholder="Password" id="password" required>
                </div>
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="password" placeholder="Confirm Password" id="confirm_password" required>
                </div>
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="text"  maxlength="10"  pattern="[0-9]{10}" class="input" name="contact" placeholder="Your contact please"
                           oninvalid="this.setCustomValidity('Mobile number should be of 10 digits')"
                           oninput="setCustomValidity('')"></input>
                </div>
               
                <button type="submit" name="submit" value="Sign up" class="button">Sign up</button>

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