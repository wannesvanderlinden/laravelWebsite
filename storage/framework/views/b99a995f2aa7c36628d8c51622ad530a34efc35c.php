
<?php $__env->startSection('content'); ?>

    <form action="" method="post" enctype="multipart/form-data">

        <legend>Profile</legend>
        <img src="<?php echo e(asset('storage/profile/profile.jpg')); ?>" class="img-thumbnail" alt="..." width="240px"
            height="240px">
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">username:</label>
            <input type="text" id="username" name="username" class="form-control" value="<?php echo e(Auth::user()->username); ?>">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">name:</label>
            <input type="text" id="name" name="name" class="form-control" value="<?php echo e(Auth::user()->name); ?>">
        </div>

        </div>
        <div class="mb-3">

            <label for="disabledTextInput" class="form-label">Birthday:</label>
            <input type="date" id="birthday" name="birthday" class="form-control" value="<?php echo e(Auth::user()->birthday); ?>">
        </div>
        </div>
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">aboutMe:</label>
            <textarea name="aboutMe" id="aboutMe" cols="30" rows="10"><?php echo e(Auth::user()->aboutMe); ?>   </textarea>
        </div>
        <div class="form-group">
            <label for="photo">Attach a photograph</label>
            <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file">
        </div>

        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <button type="submit">Save</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/profileEdit.blade.php ENDPATH**/ ?>