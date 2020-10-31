;

<?php $__env->startSection('content'); ?>
    <div class="clearfix">
        <a href="<?php echo e(route('countries.create')); ?>" class="btn float-right btn-success" style="margin-bottom: 10px">Add Country</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Countries</div>
        <div class="card-body"> No Countries yet</div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\edalely\resources\views/countries/index.blade.php ENDPATH**/ ?>