
<?php $__env->startSection('content'); ?>

    <form action="/FAQ/categorie/<?php echo e($categorie->id); ?>" method="post">
        <?php echo method_field('PUT'); ?>
        <legend>Edit Categorie</legend>
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="<?php echo e($categorie->name); ?>">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary:</label>
            <input type="text" id="summary" name="summary" class="form-control" value="<?php echo e($categorie->summary); ?>">
        </div>

        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <button type="submit">Save</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/categorieEdit.blade.php ENDPATH**/ ?>