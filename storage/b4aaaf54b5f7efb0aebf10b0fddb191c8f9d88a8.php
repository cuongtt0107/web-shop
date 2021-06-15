
<header id="header" class="site-header header-style-2">
            <div class="topbar">
                <div class="topbar-text">
                    <p>Join our showroom and get 25 % off ! Coupon code : Bangbang45</p>
                </div>
            </div> <!-- end topbar -->
            <nav class="navigation navbar navbar-default">
                <div class="container-1410">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo e(BASE_URL.'home'); ?>"><img src="<?php echo e(CILENT); ?>assets/images/logo.png" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li >
                                <a href="<?php echo e(BASE_URL.'home'); ?>">Home</a>
                               
                            </li>
                            <li><a href="#">About</a></li>
                            <li >
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                <?php $__currentLoopData = $_SESSION['danhmuc']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(BASE_URL.'category/'.$c['cate_name'].'/'.$c['id']); ?>"><?php echo e($c['cate_name']); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                </ul>
                            </li>
                            <li >
                                <a href="#">Pages</a>
                                
                            </li>
                    
                        </ul>
                    </div><!-- end of nav-collapse -->
                    <div class="header-right">
                       
                        <div class="my-account-link">
                            <a href="<?php echo e(BASE_URL); ?>">Admin<i class="icon-user"></i></a>
                        </div>
                        <div class="wishlist-box">
                            <a href="#"><i class="icon-heart-shape-outline"></i></a>
                        </div>
                        <div class="mini-cart">
                            <button class="cart-toggle-btn"> <i class="icon-large-paper-bag"></i> <span class="cart-count"><?php echo e(isset($_SESSION['cart']) ? count($_SESSION['cart']) : ""); ?></span></button>
                            <div class="mini-cart-content" >
                            <div>
                                <div class="mini-cart-items" >
                                
                                <?php if(isset($_SESSION['cart'])): ?>
                              <?php $__currentLoopData = $_SESSION['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="mini-cart-item clearfix">
                                        <div class="mini-cart-item-image">
                                            <a href="<?php echo e(BASE_URL.'product/'.$ok['id']); ?>"><img src="<?php echo e(BASE_URL.$ok['image']); ?>" alt></a>
                                        </div>
                                        <div class="mini-cart-item-des">
                                            <a href="<?php echo e(BASE_URL.'product/'.$ok['id']); ?>"><?php echo e($ok['name']); ?></a>
                                            <span class="mini-cart-item-quantity">Qty: <?php echo e($ok['number']); ?></span>
                                            <span class="mini-cart-item-price">$<?php echo e($ok['price']); ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                               

                                <div class="mini-cart-action clearfix">
                                    <span class="mini-checkout-price">Subtotal:<?php echo e(isset($_SESSION['tong_tien']) ? '$'.$_SESSION['tong_tien'] : ""); ?> </span>
                                    <a href="<?php echo e(BASE_URL.'cart'); ?>" class="view-cart-btn">View Cart</a>
                                    <a href="<?php echo e(BASE_URL.'checkout'); ?>" class="checkout-btn">Checkout</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/layout/frontend/header.blade.php ENDPATH**/ ?>