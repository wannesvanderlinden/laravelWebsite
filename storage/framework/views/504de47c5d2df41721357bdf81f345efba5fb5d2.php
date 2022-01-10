
<?php $__env->startSection('content'); ?>
    <br>
    <div class="card text-center" style="opacity: 0.7;">

        <div class="card-body">
            <h5 class="card-title">Games</h5>
            <p class="card-text">Down here you see some game ideas</p>

        </div>

    </div>
    <br>
    <br>
    <div class="card  shadow-lg p-3 mb-5 bg-body rounded" style="opacity: 0.7;">
        <div class="container">
            <div class="col-md-12">
                <?php $__currentLoopData = $spellen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h1><?php echo e($spel->title); ?></h1>
                    <?php $__currentLoopData = $spel->Leeftijdsgroepen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leeftijdsgroep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="badge badge-warning"><?php echo e($leeftijdsgroep->name); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <p><?php echo e($spel->explenation); ?></p>
                    <div>

                    </div>
                    <hr><br>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/spellenForum/spellenForum.blade.php ENDPATH**/ ?>