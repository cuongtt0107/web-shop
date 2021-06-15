
<?php $__env->startSection('title', 'Chi tiết hóa đơn '); ?>
<?php $__env->startSection('main-content'); ?>
<table class="table table-striped">
    <thead>
        <th>STT</th>
        <th>Mã hóa đơn </th>
        <th>Tên sản phẩm </th>
        <th>Ảnh</th>
        <th>Số lượng</th>
        <th>Price</th>
       
    </thead>
    <tbody>
        <?php $__currentLoopData = $invoiceDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?> </td>
                <td><?php echo e($c->invoice_id); ?></td>
                <td><?php echo e($c->product->name); ?> </td>
                <td><img width="50px" src="<?php echo e($c->product->image); ?>" alt=""></td>
                <td><?php echo e($c->quanity); ?></td>
                <td><?php echo e($c->unit_price); ?></td> 
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/invoice/invoice_detail.blade.php ENDPATH**/ ?>