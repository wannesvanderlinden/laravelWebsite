
<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <fieldset disabled>
        <legend>Profile</legend>


        <img src="<?php echo e(asset('storage/profile/' . Auth::user()->img)); ?>" class="img-thumbnail" alt="..." width="240px"
            height="240px">
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">username:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo e(Auth::user()->username); ?>">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">name:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo e(Auth::user()->name); ?>">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Created at:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo e(Auth::user()->created_at); ?>">
        </div>
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Birthday:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo e(Auth::user()->birthday); ?>">
        </div>
        </div>
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">aboutMe:</label>
            <textarea name="aboutMe" id="aboutMe" cols="30" rows="10" disabled><?php echo e(Auth::user()->aboutMe); ?>   </textarea>
        </div>


    </fieldset>
    <div class="mb-3">
        <button type="button" onclick="window.location='http://127.0.0.1:8000/profile/edit'">Edit data</button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/profile.blade.php ENDPATH**/ ?>