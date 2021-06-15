
<?php $__env->startSection('title', 'Thanh Toán'); ?>
<?php $__env->startSection('conten'); ?>
<?php echo $__env->make("site.homepage.bannerCate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="shop-section shop-right-sidebar section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-xs-12">
                <div class="shop-area clearfix">
                    <div class="">
                        <div class="woocommerce-content-inner">
                            
                            <ul class="products">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="product">
                                        <div class="product-holder">
                                            <a href="<?php echo e(BASE_URL.'product/'.$item->id); ?>"><img src="<?php echo e(BASE_URL.$item->image); ?>" alt></a>
                                            <div class="shop-action-wrap">
                                                <ul class="shop-action">
                                                    <li><a   title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                    <li><a  title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                    <li><a onclick="add_cart(<?= $item->id ?>)"  title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4><a href="<?php echo e(BASE_URL.'product/'.$item->id); ?>"><?php echo e($item->name); ?></a></h4>
                                            <span class="woocommerce-Price-amount amount">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi><span class="woocommerce-Price-currencySymbol">$</span><?php echo e($item->price); ?></bdi>
                                                    </span>
                                                </ins>
                                            </span>
                                        </div>
                                        <div class="quick-view-single-product">
                                            <div class="view-single-product-inner clearfix">
                                                <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                <div class="img-holder">
                                                    <img src="<?php echo e(BASE_URL.$item->image); ?>" alt>
                                                </div>
                                                <div class="product-details">
                                                    <h4><?php echo e($item->name); ?></h4>
                                                    <div class="price">
                                                        <span class="current">$<?php echo e($item->price); ?></span>
                                                    </div>
                                                    <p><?php echo e($item->detail); ?></p>
                                                    <div class="product-option">
                                                        <form class="form">
                                                            <div class="product-row">
                                                                <div>
                                                                    <input class="product-count" type="text" value="1" name="product-count-8">
                                                                </div>
                                                                <div>
                                                                    <button onclick="add_cart(<?= $item->id ?>)" type="submit">Add to cart</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div> 
                                                    
                                                </div>
                                            </div>
                                        </div> <!-- end quick-view-single-product -->
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                        <div class="pagination-wrapper">
                            <ul class="pg-pagination">
                            <?php for($i = 1;$i<= $totalPage;$i++): ?>
                          <li><a href="<?php echo e(BASE_URL.'category/'.$products[0]->categories->cate_name.'/'.$products[0]->cate_id.'?page='.$i); ?>"><?php echo e($i); ?> </a></li>
                             <?php endfor; ?>                               
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.cilent", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/cates/cateDetail.blade.php ENDPATH**/ ?>