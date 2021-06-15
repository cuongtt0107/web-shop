
<?php $__env->startSection('title', 'Edit Cate'); ?>
<?php $__env->startSection('main-content'); ?>
<form action="" method="post">
    <div class="form-group">
        <label for="">Tên Danh Mục</label>
        <input class="form-control" type="text" name="cate_name" value="<?php echo e(isset($value['value_name']) ? $value['value_name'] : $cate->cate_name); ?>" />    
         
       <?php if(isset($err['cate_name'])): ?>
                <span style="color: red;"> <?php echo e($err['cate_name']); ?> </span>
       <?php endif; ?>
    </div>
    <div class="form-group"> <label for="">Mô Tả </label>
        <textarea class="form-control" cols="50" rows="5" name="desc" ><?php echo e(isset($value['value_desc']) ? $value['value_desc'] : $cate->desc); ?></textarea>
    </div>
    <?php if(isset($err['desc'])): ?>
                <span style="color: red;"> <?php echo e($err['desc']); ?> </span>
       <?php endif; ?>
    <div class="form-group"> <label for="">Show_Menu </label>
       <input type="checkbox"
            <?php if( $cate->show_menu == 1 ): ?>
            checked 
            <?php endif; ?>
        name="show_menu" value="1" >
    </div>
    <div >
        <button class="btn btn-primary" type="submit"> Submit </button>

    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/cates/edit-cate.blade.php ENDPATH**/ ?>