
<?php $__env->startSection('title', 'Thanh Toán'); ?>
<?php $__env->startSection('conten'); ?>
<section class="checkout-section section-padding">


            <div class="container-1410">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="woocommerce">
                           
                            <form action="<?php echo e(BASE_URL.'new-invoice'); ?>" method="post" class="checkout woocommerce-checkout"  enctype="multipart/form-data">
                                <div class="col2-set" id="customer_details">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">

                                            <h3>Billing Details</h3>

                                            <p class="form-row form-row form-row-wide" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">Họ và Tên <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="input-text" name="customer_name">
                                            </p>
                                            
                                            <p class="form-row form-row form-row-wide" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="input-text" name="customer_email">
                                            </p>
                                            
                                            <p class="form-row form-row form-row-wide" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">Số Điện Thoại <abbr class="required" title="required">*</abbr></label> <br>
                                                <input type="text" class="input-text" name="customer_phone_number">
                                            </p>
                                            
                                            <p class="form-row form-row form-row-wide" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">Địa chỉ<abbr class="required" title="required">*</abbr></label>
                                                <textarea name="customer_address"  class="input-text"  cols="20" rows="5"></textarea>
                                            </p>
                                            <p class="form-row form-row form-row-wide" id="billing_first_name_field">
                                            <button type="submit"  class="my-5 btn btn-danger form-control" > Thanh toán</button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- order_review_heading -->
                                <h3 id="order_review_heading">Your order</h3>

                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($_SESSION['cart'])): ?>
                                        <?php $__currentLoopData = $_SESSION['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                <?php echo e($pr['name']); ?> x <?php echo e($pr['number']); ?>

                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount"><?php echo e($pr['price']*$pr['number']); ?> $</span>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="woocommerce-Price-amount amount"><?php echo e($_SESSION['tong_tien']); ?> $</span>
                                                </td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td data-title="Shipping">
                                                    Free Shipping
                                                    <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping:1" class="shipping_method" />

                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><span class="woocommerce-Price-amount amount"><?php echo e($_SESSION['tong_tien']); ?> $</span>
                                            </tr>

                                        </tfoot>
                                    </table>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <?php $__env->stopSection(); ?>       
<?php echo $__env->make("layout.cilent", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/site/test.blade.php ENDPATH**/ ?>