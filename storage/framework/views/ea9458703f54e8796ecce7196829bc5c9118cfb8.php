
<?php $__env->startSection('content'); ?>

    <form action="" method="post">
        <?php echo method_field('PUT'); ?>
        <legend>Add a question</legend>


        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label for="answer" class="form-label">answer:</label>
            <input type="text" id="answer" name="answer" class="form-control" value="">
        </div>
        <label for="cars">Choose a categorie:</label>
        <select name="categories" id="categories">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br><br>

        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <button type="submit">Save</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/questionAdd.blade.php ENDPATH**/ ?>