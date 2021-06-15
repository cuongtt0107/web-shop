
<?php $__env->startSection('title', 'Danh sách hóa đơn '); ?>
<?php $__env->startSection('main-content'); ?>
<table class="table table-striped">
    <thead>
    <th>STT</th>
        <th>ID</th>
        <th>Khách hàng</th>
        <th>SDT</th>
        <th>Email</th>
        <th>Địa chỉ </th>
        <th>Tổng giá</th>
        <th>Hành động</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr> <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($c->id); ?></td>
                <td><?php echo e($c->customer_name); ?></td>
                <td><?php echo e($c->customer_phone_number); ?></td>
                <td><?php echo e($c->customer_email); ?></td>
                <td><?php echo e($c->customer_address); ?></td>
                <td><?php echo e($c->total_price); ?></td>
                <td><a href="invoicedetail?id=<?php echo e($c->id); ?>">chi  tiết</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/invoice/list-invoice.blade.php ENDPATH**/ ?>