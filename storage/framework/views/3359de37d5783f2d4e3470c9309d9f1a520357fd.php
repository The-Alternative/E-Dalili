;

<?php $__env->startSection('content'); ?>
    <div class="clearfix">
        <a href="<?php echo e(route('categories.create')); ?>" class="btn float-right btn-success" style="margin-bottom: 10px">Add Category</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Categories</div>
        <div class="card-body"> No categories yet</div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\edalely\resources\views/categories/index.blade.php ENDPATH**/ ?>