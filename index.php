<!DOCTYPE html>
<html lang="en">
<head>
<?php

    $dbh = new PDO('mysql:host=localhost;dbname=modernwaxdb', 'root', 'root');
?>

    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title> Modern Wax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        .jumbotron {
            background-color: black;
            color: #fff;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }
        .container-fluid {
            padding: 60px 50px;
        }
        .bg-grey {
            background-color: #f6f6f6;
        }
        .logo-small {
            color: black;
            font-size: 50px;
        }
        .logo {
            color: black;
            font-size: 200px;
        }
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }
        .carousel-control.right, .carousel-control.left {
            background-image: none;
            color: black;
        }
        .carousel-indicators li {
            border-color: black;
        }
        .carousel-indicators li.active {
            background-color: black;
        }
        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        .item span {
            font-style: normal;
        }
        .panel {
            border: 1px solid black;
            border-radius:0 !important;
            transition: box-shadow 0.5s;
        }
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }
        .panel-footer .btn:hover {
            border: 1px solid black;
            background-color: #fff !important;
            color: black;
        }
        .panel-heading {
            color: #fff !important;
            background-color: black !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        .panel-footer {
            background-color: white !important;
        }
        .panel-footer h3 {
            font-size: 32px;
        }
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        .panel-footer .btn {
            margin: 15px 0;
            background-color: black;
            color: #fff;
        }
        .navbar {
            margin-bottom: 0;
            background-color: black;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #fff !important;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: black !important;
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: black;
        }
        .slideanim {visibility:hidden;}
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        @keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }
    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">Modern Wax</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#portfolio">MUSIC</a></li>
                <li><a href="#pricing">PRICING</a></li>
                <li><a href="#contact">SIGN UP</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>Modern Wax</h1>
    <p>Your music sharing friend</p>
    <br>
    <p>Log In</p>
    <form class="form-inline">
        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
        <button type="button" class="btn btn-danger">Email</button>
        <br>
        <br>
        <input type="email" class="form-control" size="47" placeholder="Password" required>
        <button type="button" class="btn btn-danger">Password</button>
    </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>About Modern Wax</h2><br>
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <br><button class="btn btn-default btn-lg">Get in Touch</button>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-cd logo"></span>
        </div>
    </div>
</div>



<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-ok logo-small"></span>
            <h4>SUBSCRIBE</h4>
            <p>Select a payment method that suits you</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-envelope logo-small"></span>
            <h4>WAIT</h4>
            <p>Your records will be shipped as soon as you sign up</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-headphones logo-small"></span>
            <h4>ENJOY</h4>
            <p>Enjoy the music! , and share it with your friends and family </p>
        </div>
    </div>
    <br><br>
    <div class="row slideanim">

        </div>
    </div>


<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>Music</h2><br>
    <h4>Some of the titles you can receive</h4>
    <div class="row text-center slideanim">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="http://cdn3.pitchfork.com/news/57841/4425c018.jpeg" alt="Paris" width="400" height="300">
                <p><strong>D'Angelo - Black Messiah</strong></p>
                <p>Black Messiah is a study in controlled chaos, and D'Angelo is the rare classicist able to filter the attributes of the greats in the canon into a sound distinctly his own. - Pitchfork</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="https://consequenceofsound.files.wordpress.com/2015/04/tame-impala-currents.jpg" alt="New York" width="400" height="300">
                <p><strong>Tame Impala - Currents</strong></p>
                <p>Nearly every song on Currents is a statement of leader Kevin Parker's range and increasing expertise as a producer, arranger, songwriter, and a vocalist. - Pitchfork</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="http://potholesinmyblog.flywheelsites.com/wp-content/uploads/2013/01/j-dilla-donuts.jpg" alt="San Francisco" width="400" height="300">
                <p><strong>J Dilla - Donuts</strong></p>
                <p>Jay Dee continues to update soul music by paying homage to the selfsame sounds he's modernizing. - Pitchfork</p>
            </div>
        </div>
    </div><br>

    <h2>What our customers say</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h4>"I love the music selection! , This company is the best!"<br><span style="font-style:normal;">Aiden Navarro, Professional Basket Weaver</span></h4>
            </div>
            <div class="item">
                <h4>"One word... WOW!!"<br><span style="font-style:normal;">Belita Chevy, Student</span></h4>
            </div>
            <div class="item">
                <h4>"It's Like it's not real "<br><span style="font-style:normal;">Ethel Heckel, Aiden's Wife</span></h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
    <div class="text-center">
        <h2>Pricing</h2>
        <h4>Choose a payment plan that works for you</h4>
    </div>
    <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Basic</h1>
                </div>
                <div class="panel-body">
                    <p> <strong>2 random records monthly</strong></p>
                    <p> 2 Modern Wax record sleeves</p>
                </div>
                <div class="panel-footer">
                    <h3>$10</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Pro</h1>
                </div>
                <div class="panel-body">
                    <p> <strong>4 random records monthly</strong></p>
                    <p> 4 Modern wax record sleeves</p>
                    <p>Modern Wax T-Shirt</p>
                </div>
                <div class="panel-footer">
                    <h3>$15</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Premium</h1>
                </div>
                <div class="panel-body">
                    <p><strong>6 random records monthly</strong></p>
                    <p> 6 Modern Wax record sleeves</p>
                    <p> Modern Wax T-Shirt </p>
                    <p> 1 year subscription to Record Collector magazine</p>
                    <p> MP3 download with every record</p>
                </div>
                <div class="panel-footer">
                    <h3>$25</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container (Contact Section) -->
<?php

if (isset($_POST['submit'])) {
    // Grab the user data from the POST
    $username   =   $_POST['username'];
    $password   =   $_POST['password'];

    if (empty($username) || empty($password))   {
        echo '<p>Please fill out all the form</p>';
    }
    else {
        $query = 'INSERT INTO users (username, password)
        VALUES (:username, :password)';
        $stmt = $dbh->prepare($query);
        $result = $stmt->execute(
            array(
                'username'  =>  $username,
                'password'  =>  $password,
            )
        );
        echo '<div class="content"><p>Thanks for subscribing</p>';
        echo '<p><strong>Username: </strong>' . $username . '<br />';
        echo '<p><strong>Password: </strong>' . $password . '<br />';
        echo '<p><a href="index.php">&lt;&lt; Back to main page </a></p></div>';
        $username   = "";
        $password   = "";

    }
}

?>


<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">SIGN UP</h2>
    <div class="row">
        <p>Please enter your username and desired password to sign up to Modern Wax.</p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>
                <legend>Registration Info</legend>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php if (!empty($username)) echo $username; ?>" /><br />
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php if (!empty($password)) echo ''; ?>" /><br />
                <label for="password2">Password (retype):</label>
                <input type="password" id="password2" name="password2" /><br />
            </fieldset>
            <input type="submit" value="Sign Up" name="submit" />
        </form>
</body>
</html>



</div>


<!-- Add Google Maps -->
<form>





</form>

<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>

</footer>

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>
