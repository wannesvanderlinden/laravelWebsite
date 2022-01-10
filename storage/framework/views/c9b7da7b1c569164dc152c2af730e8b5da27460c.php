
<?php $__env->startSection('content'); ?>


    <fieldset disabled>
        <legend>Profile</legend>
        <img src="<?php echo e(asset('storage/profile/profile.jpg')); ?>" class="img-thumbnail" alt="..." width="240px" height="240px">
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">username:</label>
            <input type="text" id="disabledTextInput" name="username" class="form-control" value="<?php echo e($user->username); ?>">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">name:</label>
            <input type="text" id="disabledTextInput" name="name" class="form-control" value="<?php echo e($user->name); ?>">
        </div>

        </div>
        <div class="mb-3">

            <label for="disabledTextInput" class="form-label">Birthday:</label>
            <input type="date" id="disabledTextInput" name="birthday" class="form-control" value="<?php echo e($user->birthday); ?>">
        </div>
        </div>
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">aboutMe:</label>
            <textarea name="aboutMe" id="disabledTextInput" cols="30" rows="10"><?php echo e($user->aboutMe); ?>   </textarea>
        </div>
    </fieldset>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/otherUserProfile.blade.php ENDPATH**/ ?>