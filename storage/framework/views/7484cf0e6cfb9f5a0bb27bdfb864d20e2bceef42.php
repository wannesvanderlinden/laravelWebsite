
<?php $__env->startSection('content'); ?>

    <h1>Categories</h1>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($categorie->name); ?></h5>
                    <p class="card-text"><?php echo e($categorie->summary); ?></p>
                    <a href="/FAQ/<?php echo e($categorie->id); ?>/show" class="btn btn-primary">Go to questions</a>
                </div>
            </div>
        </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/faq.blade.php ENDPATH**/ ?>