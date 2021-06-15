  
  <?php $__env->startSection('title', 'Danh sách sản phẩm '); ?>
  <?php $__env->startSection('main-content'); ?>
  <style>
        .ok{
            padding: 10px;
            display: inline-block;
            background-color: #333;
        }
        .ok a {
            color: white;
            margin-left: 20px;
        }
  </style>
  <table class="table table-striped">
      <thead>
          <tr>
              <th>STT</th>
              <th>Name</th>
              <th>Image</th>
              <th>Price</th>
              <th>Detail</th>
              <th>Category</th>
              <th>
                  <a href="newproduct">Tạo mới</a>
              </th>

          </tr>
      </thead>
      <tbody>
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e($loop->iteration + $stt); ?></td>
              <td><?php echo e($pr->name); ?></td>
              <td><img width="40px" src="<?php echo e($pr->image); ?>" alt=""></td>
              <td><?php echo e($pr->price); ?></td>
              <td><?php echo e($pr->detail); ?></td>
              <td><?php echo e($pr->categories->cate_name); ?></td>
              <td>
                  <a href="removeproduct&id=<?=$pr->id?>">xóa </a>
                  <a href="editproduct&id=<?=$pr->id?>">sửa</a>
              </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td colspan="7" style="text-align: center;">
              <div class="ok">
                      <?php for($i = 1;$i<= $totalPage;$i++): ?>
                          <a href="<?php echo e(BASE_URL.'products?page='.$i); ?>"><?php echo e($i); ?> </a>
                        <?php endfor; ?>
                </div>
              </td>
          </tr>
      </tbody>
  </table>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2_12\buoi3\mvc\app\views/products/product-list.blade.php ENDPATH**/ ?>