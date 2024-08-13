

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Edit Category</h1>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group" style="border: 1px solid black">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name', $category->name)); ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control"><?php echo e(old('description', $category->description)); ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary">Back to Categories</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server2\htdocs\new\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>