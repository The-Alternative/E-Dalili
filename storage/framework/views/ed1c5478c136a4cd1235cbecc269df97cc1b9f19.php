;

<?php $__env->startSection('content'); ?>
    <div class="card card-default">
        <div class="card-header">Add a new Brand</div>
        <div class="card-body">
            <form action="#">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="product_category">Product Category Description:</label>
                    <textarea class="form-control" aria-label="With textarea" placeholder="write description"></textarea>
                </div>
                <div class="form-group">
                    <a href="#" class="btn btn-success">Add</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\edalely\resources\views/product_categories/create.blade.php ENDPATH**/ ?>