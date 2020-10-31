;

<?php $__env->startSection('content'); ?>
    <div class="clearfix">
        <a href="<?php echo e(route('custom_fields.create')); ?>" class="btn float-right btn-success" style="margin-bottom: 10px">Add custom_fields</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Custom Fields</div>
        <div class="card-body"> No custom_fields yet</div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\edalely\resources\views/custom_fields/index.blade.php ENDPATH**/ ?>