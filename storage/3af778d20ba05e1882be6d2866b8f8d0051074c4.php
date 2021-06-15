
<?php $__env->startSection('title', 'Giỏ Hàng '); ?>
<?php $__env->startSection('conten'); ?>
<div class="container-1410">
    <div class="row">
        <div class="col col-xs-12">
            <div class="woocommerce">
                <div id="div1">
                    <table class="shop_table shop_table_responsive cart" id="cartx">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Number</th>
                                <th scope="col">Action</th>
                                <th scope="col">into money</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_SESSION['tong_tien'] = 0; ?>
                            <?php if(isset($_SESSION['cart'])): ?>

                            <?php $__currentLoopData = $_SESSION['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($pr['name']); ?></td>
                                <td><img width="50" src="<?php echo e($pr['image']); ?>" alt=""></td>
                                <td><?php echo e($pr['price']); ?> $</td>
                                <td><input onchange="updateCart(<?php echo $pr['id'] ?>)" id="number_<?php echo $pr['id'] ?>" type="number" value="<?php echo e($pr['number']); ?>"></td>
                                <td><button onclick="xoa(<?php echo $pr['id'] ?>)" class="btn">xóa</button></td>
                                <td><?php echo e($pr['price']*$pr['number']); ?> VND</td>
                            </tr>
                            <?php $_SESSION['tong_tien'] += $pr['price'] * $pr['number'];

                            ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="cart-collaterals">
                <div id="div2">
                    <div class="cart_totals calculated_shipping" id="tien">
                        <h2>Cart Totals</h2>
                        <table class="shop_table shop_table_responsive" >
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">£</span><?php echo e($_SESSION['tong_tien']); ?></span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        Free Shipping                                       
                                    </td>
                                </tr>

                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span><?php echo e($_SESSION['tong_tien']); ?></span></strong> </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="wc-proceed-to-checkout">
                            <a href="<?php echo e(BASE_URL.'checkout'); ?>" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>    
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.cilent", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/site/cart.blade.php ENDPATH**/ ?>