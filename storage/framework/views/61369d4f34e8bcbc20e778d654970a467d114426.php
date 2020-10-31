;

<?php $__env->startSection('content'); ?>
    <div class="clearfix">
        <a href="<?php echo e(route('languages.create')); ?>" class="btn float-right btn-success" style="margin-bottom: 10px">Add Language</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Languages</div>
        <div class="card-body"> No languages yet</div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\edalely\resources\views/languages/index.blade.php ENDPATH**/ ?>