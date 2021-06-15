<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{THEME_ASSET_URL}}css/style.css">

</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container_">
            <div class="logo ">
                <a href="home" title="Logo">
                    <img src="{{THEME_ASSET_URL}}img/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <!-- require_once "layoutbase/menu.php"  -->
            <div class="menu text-right_">
                <ul>
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li>
                        <a href="#">Categories</a>
                    </li>
                    <li>
                        <a href="#">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="cart">Cart</a>
                    </li>
                    <li>
                        <a href="{{BASE_URL}}">ADMIN</a>
                    </li>
                </ul>
            </div>

            <!-- het menu -->
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
   
   
    
        @yield("conten")
    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container_ text-center_">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" /></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">

    </section>
    <!-- footer Section Ends Here -->
    @include("layout.script")

</body>

</html>