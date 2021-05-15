<!DOCTYPE HTML>
<html>
    <head>
        <title>Sign-Up</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <div class="header">
        <h1>CAFE DECUSTARD</h1>
    </div>

    <div class="topnav">
        <a href="#about" style="width: 25%">About us</a>
        <a href="menu.php" style="width: 25%">Menu</a>
        <a href="login.php" style="width: 25%">Book</a>
        <a href="where.php" style="width: 25%">Where</a>
    </div>

    <div class="main">
        <body id="body-color" >
            <div class="slideshow-container">

                <div class="mySlides fade">             
                    <img src="hi1 - Copy.jpg" width=100% border="5" style="border-color:saddlebrown">

                </div>
                <div class="mySlides fade">             
                    <img src="hi2 - Copy.jpg" width=100% border="5" style="border-color: saddlebrown">

                </div>
                <div class="mySlides fade">               
                    <img src="hi3 - Copy.jpg" width=100% border="5" style="border-color: saddlebrown">

                </div>

                <div class="mySlides fade">               
                    <img src="hi4 - Copy.jpg" width=100% border="5" style="border-color: saddlebrown">

                </div>

                <div class="mySlides fade">              
                    <img src="hi5.jpg" width=100% border="5" style="border-color: saddlebrown">

                </div>



                <br>

                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>

                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 3000); // Change image every 2 seconds
                    }
                </script>
            </div>
            <div id="about"></div>
            <div class="content">
                <br>
                <br>
                <br>
                <h> About us</h> 

            <pre>
        <p>
        Café Decustard, a part of Coffee Day Global Limited, is India’s favourite hangout for coffee and conversations. 
        Popularly known as CD, we strive to provide the best experience to our guests.
        Our coffees are sourced from thousands of small coffee planters, who made us who we are today and we're glad to be a part of their lives.
        We opened our first cafe in 1996 at Brigade Road in Bangalore – the youth and the young at heart immediately took to the cafe,
        and it continues to be one of the most happening places in the city.
        CD to the youth is a “hangout” spot where they meet people, make conversations, and have a whole lot of fun over steaming cups of great coffee.
        It's been an exciting journey since then to becoming the largest organized retail cafe chain in the country.
        We’re also present in Austria, Czech Republic and Malaysia,
        so if your travel takes you there, do stop by our outlets to get a taste from back home!
        </p>
            </pre>    
        </div>
    </div>

</body>
</html>
