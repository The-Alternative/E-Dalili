;

<?php $__env->startSection('content'); ?>
    <div class="card card-default">
        <div class="card-header">Add a new Category</div>
        <div class="card-body">
            <form action="#">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="category">Category Name:</label>
                    <input type="text" class="form-control" placeholder="Add a new category">
                </div>
                <div class="form-group">
                    <label for="category">Category slug:</label>
                    <input type="text" class="form-control" placeholder="Add category slug">
                </div>
                <div class="form-group">
                    <a href="#" class="btn btn-success">Add</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\edalely\resources\views/categories/create.blade.php ENDPATH**/ ?>