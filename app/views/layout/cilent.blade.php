<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wp-ts.com/azedw-html-live/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 04:17:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> SHOP </title>
    
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @include("layout.scriptCilent")

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <div class="body-overlay"></div>

        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
        </div>
        <!-- end preloader -->
                <!-- Start header -->
                @include("layout.frontend.header")
        <!-- end of header -->
                <!-- start of hero -->
                @yield("conten")

               <!-- start instagram-section -->
               @include("layout.frontend.intagram")

    <!-- end instagram-section -->  
                <!-- start site-footer -->
                @include("layout.frontend.footer")

        <!-- end site-footer -->
                <!-- start newsletter-popup-area-section -->
        <!-- end newsletter-popup-area-section -->       
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    @include("layout.script")


</body>

<!-- Mirrored from wp-ts.com/azedw-html-live/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 04:17:30 GMT -->
</html>
