
<?php $__env->startSection('content'); ?>
    <?php if($questions->isEmpty()): ?>
        <h1 style="margin:auto; position: absolute;
                                                                                    top: 50%;
                                                                                    left: 50%;
                                                                                    margin-right: -50%;
                                                                                    transform: translate(-50%, -50%)">No
            questions
            at
            the
            moment
        </h1>
    <?php endif; ?>
    <br>
    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="card">
            <div class="card-header">
                <b> <?php echo e($question->title); ?></b>
            </div>
            <div class="card-body">

                <p class="card-text"><?php echo e($question->answer); ?></p>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br>
    <?php if(Auth::user() !== null): ?>
        <p>If you want to pose a question for the FAQ put it here</p>
        <form class="form-horizontal " action="" method="post">
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Question" name="question">
                </div>
                <div class="col">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-primary">Pose</button>
                </div>
            </div>
        </form>
    <?php endif; ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/userFAQ/faqQuestions.blade.php ENDPATH**/ ?>