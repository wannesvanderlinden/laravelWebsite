
<?php $__env->startSection('content'); ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Message</th>
                <th scope="col"> Email</th>
                <th scope="col"> Send Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($form->isReply == 0): ?>
                    <tr>
                        <th scope="row"><?php echo e($form->id); ?></th>
                        <td><?php echo e($form->name); ?></td>
                        <td><?php echo e($form->message); ?></td>
                        <td><?php echo e($form->email); ?></td>
                        <td> <a class="nav-link" href="/admin/<?php echo e($form->id); ?>/reply">Reply</a></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/adminInboxContact.blade.php ENDPATH**/ ?>