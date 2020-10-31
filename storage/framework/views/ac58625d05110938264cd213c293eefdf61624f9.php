;

<?php $__env->startSection('content'); ?>
    <div class="clearfix">
        <a href="<?php echo e(route('products.create')); ?>" class="btn float-right btn-success" style="margin-bottom: 10px">Add Product</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Products</div>
          <?php if($products->count() > 0): ?>
                <table class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="float-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($product->title); ?>

                                </td>
                                <td>
                                    <form class="float-right ml-2" action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="<?php echo e(route('products.edit',$product->id)); ?>" class="btn btn-primary float-right btn-sm">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </table>
          <?php else: ?>
              <div class="card-body">
                  <h1 class="text-center">
                      No Products Yet.
                  </h1>
              </div>
          <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\edalely\resources\views/products/index.blade.php ENDPATH**/ ?>