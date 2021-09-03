
<?php $__env->startSection('content'); ?>
<form action="#">
    <div class="container">
    <table class="table table-dark table-striped">
    <a href="">Them</a>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Details</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th><a href="">Edit</a></th>
            <th><a href="">Delete</a></th>
        </tr>
    </table>
        </div>
    </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\project2\resources\views/admin/book/index.blade.php ENDPATH**/ ?>