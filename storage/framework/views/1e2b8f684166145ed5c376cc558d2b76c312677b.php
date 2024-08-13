

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1>Create New Category</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('categories.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"><?php echo e(old('description')); ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary">Back to Categories</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server2\htdocs\new\resources\views/admin/category/create.blade.php ENDPATH**/ ?>