
<?php $__env->startSection('content'); ?>
<?php echo csrf_field(); ?>
    <div class="container">
    <table class="table table-dark table-striped">
        <h1>Book</h1>
    <a href="<?php echo e(url('book/create')); ?>">Them</a>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Avatar</th>
            <th>Details</th>
            <th>Author</th>
            <th>Type</th>
            <th>NXB</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th>
                <?php echo e($item ->id); ?>

            </th>
            <th>
                <?php echo e($item -> name); ?>

            </th>
            <th>
    	        <?php echo e($item -> avatar); ?>

            </th>
            <th>
                <?php echo e($item -> details); ?>

            </th>
            <th>
                <!--  $item -> author -> name -->
                <?php echo e($item -> id_author); ?>

            </th>
            <th>
                <!--  $item -> book_type -> name -->
                <?php echo e($item -> id_type); ?>

            </th>
            <th>
                <!--  $item -> nxb -> name -->
                <?php echo e($item -> id_nxb); ?>

            </th>
            <th>
                <a href="<?php echo e(url('book/'.$item->id.'/edit')); ?>">Edit</a>
            </th>
            <th>
                <!-- <a href="<?php echo e(url('book/'.$item->id.'/delete')); ?>">Delete</a> -->
                <form action="<?php echo e(url('book/'.$item->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </th>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
        </div>
        
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\project2\resources\views/library/book/index.blade.php ENDPATH**/ ?>