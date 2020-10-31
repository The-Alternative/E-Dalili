;

<?php $__env->startSection('content'); ?>
    <div class="clearfix">
        <a href="<?php echo e(route('brands.create')); ?>" class="btn float-right btn-success" style="margin-bottom: 10px">Add Brand</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Brands</div>
            <?php if($brands->count() > 0): ?>
            <table class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th class="float-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($brand->name); ?>

                            </td>
                            <td>
                                <img src="<?php echo e(asset('storage/'.$brand->image)); ?>" width="100px" height="50px">
                            </td>
                            <td>
                                <form class="float-right ml-2" action="<?php echo e(route('brands.destroy', $brand->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm">
                                        <?php echo e($brand->trashed() ? 'Delete' : 'Trash'); ?>

                                    </button>
                                </form>
                                <?php if(!$brand->trashed()): ?>
                                    <a href="<?php echo e(route('brands.edit',$brand->id)); ?>" class="btn btn-primary float-right btn-sm">
                                        Edit
                                    </a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </table>
            <?php else: ?>
                <div class="card-body">
                    <h1 class="text-center">
                        No Brands Yet.
                    </h1>
                </div>
            <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\edalely\resources\views/brands/index.blade.php ENDPATH**/ ?>