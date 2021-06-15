
<?php $__env->startSection('title', 'Edit Product'); ?>
<?php $__env->startSection('main-content'); ?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <input class="form-control" type="hidden" name="id" value="<?php echo e($productdetail->id); ?>">
        <label for="">Name</label>
        <input class="form-control" type="text" name="name" value="<?php echo e($productdetail->name); ?>">
    </div> <br>
    <div class="form-group">
    <img width="100px" src="<?php echo e($productdetail->image); ?>" alt=""> <br>
       <input type="hidden" name="image" value="<?php echo e($productdetail->image); ?>">
        <label for="">image</label>
        <input class="form-control" type="file" name="file">
    </div>
    <div class="form-group">
        <label for="">price</label>
        <input class="form-control" type="number" name="price" value="<?php echo e($productdetail->price); ?>">
    </div>
    <div class="form-group">
            <select class="form-control" name="cate_id">
           <?php foreach($cate as $ct) : ?>

                    <?php if($ct->id == $productdetail->cate_id) : ?>
                    <option selected="selected" value="<?php echo e($ct->id); ?>"><?php echo e($ct->cate_name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($ct->id); ?>"><?php echo e($ct->cate_name); ?></option>
                    <?php endif;?>    
           <?php endforeach; ?>
            </select>
    </div>
    <div class="form-group">
       <label for="">short desc</label>
       <input class="form-control" type="text" name="short_desc"  value="<?php echo e($productdetail->short_desc); ?>">
    </div>
    <div class="form-group">
       <label for="">detail</label>
     <textarea class="form-control" name="detail" id="" cols="30" rows="10"><?php echo e($productdetail->detail); ?></textarea>
    </div>
    <div>
        <button  class="btn btn-primary" type="submit">update</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/products/edit-product.blade.php ENDPATH**/ ?>