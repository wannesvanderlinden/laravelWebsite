
<?php $__env->startSection('content'); ?>
    <form action="" method="post">
        <div class="card">
            <div class="card-header">
                Form of user
            </div>
            <div class="card-body">
                <h5 class="card-title">Name: <?php echo e($contact->name); ?></h5>
                <p class="card-text">Message: <?php echo e($contact->message); ?></p>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                Reply Admin
            </div>
            <div class="card-body">
                <h5 class="card-title">Name: <input type="text" id="name" name="name"> </h5>
                <?php if($errors->has('name')): ?>
                    <div class="error">
                        <?php echo e($errors->first('name')); ?>

                <?php endif; ?>
            </div>
            <p class="card-text">Message: <textarea id="message" name="message" rows="4" cols="50">
    </textarea>
                <?php if($errors->has('message')): ?>
                    <div class="error">
                        <?php echo e($errors->first('message')); ?>

                <?php endif; ?>
        </div>
        </p>

        <?php echo csrf_field(); ?>
        <input type="submit" value="Reply">
        </div>
        </div>


    </form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/adminInbox/adminReplyContact.blade.php ENDPATH**/ ?>