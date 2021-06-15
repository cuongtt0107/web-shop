;
<?php $__env->startSection("title","Đăng Nhập"); ?>
<?php $__env->startSection('use'); ?>

<form class="use" action="<?php echo e(BASE_URL.'login'); ?>" method="post">
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control form-control-user" type="text" name="email">
    </div>
    <div class="form-group"> 
     <label for="">Password</label>
      <input class="form-control form-control-user" type="password" name="password">
    </div>
   
    <div >
        <button class="btn btn-primary" type="submit"> Submit </button>
        <a href="registerfrom">đăng ký </a>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main-use", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/use/login.blade.php ENDPATH**/ ?>