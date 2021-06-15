;
<?php $__env->startSection("title","Đăng Ký"); ?>
<?php $__env->startSection('use'); ?>

<form class="use" action="<?php echo e(BASE_URL.'register'); ?>" method="post" enctype="multipart/form-data">
       <?php if(isset($_GET['err'])): ?>
       <h5><?php echo e($_GET['err']); ?> </h5>
    <?php endif; ?>
    <div class="form-group">
    <input type="name" class="form-control" name="name"  aria-describedby="emailHelp" placeholder="Full Nanme">
  </div>
  <div class="form-group">
    <input type="Email" class="form-control" name="email" placeholder="Email Your">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Password Your">
  </div>
  <div class="form-group"> 
     <input class="form-control" type="password" name="password_nhaplai" placeholder="Enter the password"> 
    </div>
    <div class="form-group">
        <label for="">Avatar</label>
        <input class="form-control" type="file" name="avatar">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main-use", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/use/register.blade.php ENDPATH**/ ?>