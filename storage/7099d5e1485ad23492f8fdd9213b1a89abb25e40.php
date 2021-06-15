
<?php $__env->startSection('title', 'Add Cate'); ?>
<?php $__env->startSection('main-content'); ?>

<form action="" method="post">

    <div class="form-group">
        <label for="">Tên Danh Mục</label>
        <input class="form-control" type="text" name="cate_name" value="<?php echo e(isset($data['name']) ? $data['name'] : ''); ?>">
        <span style="color:red"><?php echo e(isset($err['name']) ? $err['name'] : ""); ?></span>
    </div>
    <div class="form-group"> <label for="">Mô Tả </label>
        <textarea class="form-control" cols="50" rows="5" name="desc"><?php echo e(isset($data['mota']) ? $data['mota'] : ''); ?></textarea>
        <span style="color:red"><?php echo e(isset($err['mota']) ? $err['mota'] : ""); ?></span>
    </div>
    <div class="form-group"> <label for="">Show_Menu </label>
       <input type="checkbox" name="show_menu" value="1">
    </div>
    <div >
        <button class="btn btn-primary" type="submit"> Submit </button>

    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/cates/addCate.blade.php ENDPATH**/ ?>