
<?php $__env->startSection('content'); ?>
<?php echo csrf_field(); ?>
    <div class="container">
    <table class="table table-dark table-striped">
    <a href="<?php echo e(url('/add')); ?>">Them</a>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Author</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $__empty_1 = true; $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <th>
                <?php echo e($item->id); ?>

            </th>
            <th>
                <?php echo e($item->name); ?>

            </th>
            <th>
                <?php echo e($item->details); ?>

            </th>
            <th>
                <a href="">Edit</a>
            </th>
            <th>
                <a href="<?php echo e(url('/delete/'.$item->id)); ?>">Delete</a>
            </th>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="6" style="text-align: center;">
                    The list is empty
                </td>
            </tr>
        <?php endif; ?>
    </table>
        </div>
        
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\project2\resources\views/admin/book/show.blade.php ENDPATH**/ ?>