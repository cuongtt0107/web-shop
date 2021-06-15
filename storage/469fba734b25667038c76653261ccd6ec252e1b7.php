<?php
?>



<?php $__env->startSection('title', 'Add Product'); ?>
<?php $__env->startSection('main-content'); ?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="">Tên Sản Phẩm</label>
        <input class="form-control" type="text" name="name" value="<?php echo e(isset($data['name']) ? $data['name'] : ''); ?>">
        <span style="color:red"><?php echo e(isset($err['name']) ? $err['name'] : ""); ?></span>
    </div>
    <div class="form-group"> <label for="">Image</label>
        <input class="form-control" type="file" name="file" id="">
        <span style="color:red"><?php echo e(isset($err['file']) ? $err['file'] : ""); ?></span>
    </div>
    <div class="form-group"> <label for="">Price</label>
       <input class="form-control" type="number" name="price" value="<?php echo e(isset($data['price']) ? $data['price'] : ''); ?>">
       <span style="color:red"><?php echo e(isset($err['price']) ? $err['price'] : ""); ?></span>
    </div>
    <div class="form-group"><label for="">Category</label>
            <select class="form-control" name="cate_id">
           <?php foreach($cate as $ct) : ?>
                    <option value="<?= $ct->id ?>"><?= $ct->cate_name ?></option>
           <?php endforeach; ?>
            </select>
    </div>
    <div class="form-group"> <label for="">Short Desc</label>
       <input class="form-control" type="text" name="short_desc" value="<?php echo e(isset($data['short_desc']) ? $data['short_desc'] : ''); ?>" >
       <span style="color:red"><?php echo e(isset($err['short_desc']) ? $err['short_desc'] : ""); ?></span>
    </div>
    <div class="form-group"> <label for="">Detail</label>
       <input  class="form-control" type="text" name="detail" value="<?php echo e(isset($data['detail']) ? $data['detail'] : ''); ?>" >
       <span style="color:red"><?php echo e(isset($err['detail']) ? $err['detail'] : ""); ?></span>

    </div>
    <div >
        <button class="btn btn-primary" type="submit"> Submit </button>

    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/products/add-product.blade.php ENDPATH**/ ?>