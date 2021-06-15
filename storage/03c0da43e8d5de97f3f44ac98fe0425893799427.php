<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="<?php echo e(THEME_ASSET_URL); ?>css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="?url=home" title="Logo">
                    <img src="<?php echo e(THEME_ASSET_URL); ?>img/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <!-- require_once "layoutbase/menu.php"  -->
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="?url=category">Categories</a>
                    </li>
                    <li>
                        <a href="?url=product&action=index">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- het menu -->
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
   
    <section class="food-search text-center">
        <div class="container">

            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    
     <!-- require_once "view/".$viewPast."" -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
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

</body>

</html><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/site/layout-site/layout-site.blade.php ENDPATH**/ ?>