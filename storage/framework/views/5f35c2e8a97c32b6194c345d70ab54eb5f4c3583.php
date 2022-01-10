
<?php $__env->startSection('content'); ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">answer</th>
                <th scope="col"> edit</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($question->id); ?></th>
                    <td><?php echo e($question->title); ?></td>
                    <td><?php echo e($question->answer); ?></td>
                    <td> <a class="nav-link" href="/FAQ/questions/<?php echo e($question->id); ?>/edit">Edit</a></td>
                    <td> <a class="nav-link" href="/FAQ/questions/<?php echo e($question->id); ?>/delete">Delete</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/questionEdit.blade.php ENDPATH**/ ?>