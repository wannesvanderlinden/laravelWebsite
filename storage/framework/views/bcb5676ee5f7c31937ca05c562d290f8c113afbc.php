
<?php $__env->startSection('content'); ?>
    <br>
    <div class="card text-center">

        <div class="card-body">
            <h5 class="card-title">
                <legend>Create Categorie</legend>
            </h5>
            <p class="card-text">Down here you can create a categorie</p>

        </div>

    </div>
    <br>
    <form action="" method="post">


        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary:</label>
            <input type="text" id="summary" name="summary" class="form-control" value="">
        </div>

        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <button type="submit">create</button>
        </div>
    </form>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/categorieCreate.blade.php ENDPATH**/ ?>