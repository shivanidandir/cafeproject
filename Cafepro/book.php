

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
                <h3>Book your Table:-</h3>
            </div>
            <form method="post" action="connect.php" class="login-form">
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="text" class="input" name="name" required="" placeholder="Your name please" pattern="[A-Za-z]{1,15}"
                           oninvalid="this.setCustomValidity('Enter Valid name')"
                           oninput="setCustomValidity('')"      
                           ></input>
                </div>
                <div class="input-container">
                    <i class="fa fa-lock"></i>
                    <input type="number"  id="login-password" pattern="regexp"class="input" name="howppl"  min="1" max="15"  placeholder="How many people"
                           oninvalid="this.setCustomValidity('Table not Available!')"
                           oninput="setCustomValidity('')"></input>

                </div>
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="datetime-local" class="input" name="DateTime" required />
                </div>
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="text" class="input" name="special" placeholder="Special Requirements"/>
                </div>
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <input type="text"  maxlength="10"  pattern="[0-9]{10}" class="input" name="contact" placeholder="Your contact please"
                           oninvalid="this.setCustomValidity('Mobile number should be of 10 digits')"
                           oninput="setCustomValidity('')"></input>
                </div>
                <input type="submit" name="submit" value="Book" class="button"/>
            </form>

            <div id="canup">
               

                <a href="cancel.php" ><button style="width: 47%">Cancel Booking</button></a>
                
                <a href="update.php"><button style="width: 47%">Update Booking</button></a>

            </div>






        </div>
    </div>

</body>

</html>
