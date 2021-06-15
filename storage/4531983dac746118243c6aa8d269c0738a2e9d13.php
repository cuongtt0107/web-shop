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

    <?php echo $__env->make("layout.scriptCilent", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                <?php echo $__env->make("layout.frontend.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end of header -->
                <!-- start of hero -->
                <?php echo $__env->yieldContent("conten"); ?>

               <!-- start instagram-section -->
               <?php echo $__env->make("layout.frontend.intagram", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- end instagram-section -->  
                <!-- start site-footer -->
                <?php echo $__env->make("layout.frontend.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- end site-footer -->
                <!-- start newsletter-popup-area-section -->
        <!-- end newsletter-popup-area-section -->       
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <?php echo $__env->make("layout.script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

<!-- Mirrored from wp-ts.com/azedw-html-live/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 04:17:30 GMT -->
</html>
<?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/layout/cilent.blade.php ENDPATH**/ ?>