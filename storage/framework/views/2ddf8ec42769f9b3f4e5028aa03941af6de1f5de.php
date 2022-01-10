
<?php $__env->startSection('content'); ?>
    <br>
    <div class="card text-center">

        <div class="card-body">
            <h5 class="card-title">Categories</h5>
            <p class="card-text">Down here you can edit categories and there qoustions and add some</p>

        </div>

    </div>

    <br>

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <div class="card shadow-lg p-3 mb-5 bg-body rounded " style="margin-right:auto; margin-left:auto; width: 50%; ">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($categorie->name); ?></h5>
                <p class="card-text"><?php echo e($categorie->summary); ?>

                <p>
                    <a href="/FAQ/categorie/<?php echo e($categorie->id); ?>/edit" class="btn btn-primary">edit categorie</a>
                    <a href="/FAQ/categorie/<?php echo e($categorie->id); ?>/delete" class="btn btn-primary">delete categorie</a>
                    <a href="/FAQ/categorie/<?php echo e($categorie->id); ?>/edit/questions" class="btn btn-primary">edit
                        questions</a>
                    <a href="/FAQ/question/add" class="btn btn-primary">add question</a>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br>

    <?php if(Session::has('succes')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('succes')); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/faqEdit.blade.php ENDPATH**/ ?>