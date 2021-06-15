
<?php $__env->startSection('title', 'Thanh Toán'); ?>
<?php $__env->startSection('conten'); ?>
<div class="container">
    <div class="row">
        <div class="col col-8">
            <h4>Điền Thông Tin Nhận Hàng</h4>
            <form action="<?php echo e(BASE_URL.'new-invoice'); ?>" method="post" >
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Họ Tên </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="customer_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Email </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="customer_email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Number</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="customer_phone_number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Địa chỉ</label>
                    <div class="col-sm-10">
                        <textarea name="customer_address"  class="form-control" name="" id="" cols="20" rows="5"></textarea>
                        <button type="submit"  class="my-5 btn btn-danger form-control" > Thanh toán</button>
                    </div>
                    
                </div>
               
            </form>
        </div>

        <div class="col col-4">
            <h4>Giỏ Hàng</h4>
            <ul class="list-group">
                <?php $__currentLoopData = $_SESSION['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div><img width="60" src="<?php echo e($pr['image']); ?>" alt=""></div>
                        <div>
                            <p> <?php echo e($pr['name']); ?></p>
                            <p> <?php echo e($pr['price']); ?> x <?php echo e($pr['number']); ?> = <?php echo e($pr['price']*$pr['number']); ?> VND</p>
                        </div>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <div>
                        <h5>Tổng Tiền : <?php echo e($_SESSION['tong_tien']); ?> VND </h3>
                            <h5>Khuyễn mãi: </h3>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.cilent", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/site/checkout.blade.php ENDPATH**/ ?>