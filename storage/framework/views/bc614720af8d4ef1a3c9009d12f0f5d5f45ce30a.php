
<?php $__env->startSection('content'); ?>
    <br>
    <div class="card shadow-lg p-3 mb-5 bg-body rounded" style=" width:50%; margin:auto;">
        <div class="card text-center">

            <div class="card-body">

                <img src="<?php echo e(asset('storage/profile/' . Auth::user()->img)); ?>" class="rounded-circle" alt="..."
                    width="100%" height="100%" style=" width:auto;
                max-width:300px;">
                <br>
            </div>

        </div>
        <br>

        <?php if($errors->has('username')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e($errors->first('username')); ?>

            </div>
        <?php elseif($errors->has('name')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e($errors->first('name')); ?>

            </div>
        <?php elseif($errors->has('aboutMe')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e($errors->first('aboutMe')); ?>

            </div>
        <?php endif; ?>

        <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-row">


                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Username:</label>
                    <input type="text" id="username" name="username" class="form-control"
                        value="<?php echo e(Auth::user()->username); ?>">
                </div>


                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo e(Auth::user()->name); ?>">
                </div>
            </div>

            <div class="mb-3">

                <label for="disabledTextInput" class="form-label">Birthday:</label>
                <input type="date" id="birthday" name="birthday" class="form-control"
                    value="<?php echo e(Auth::user()->birthday); ?>">
            </div>


            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">AboutMe:</label>
                <textarea name="aboutMe" id="aboutMe" cols="60%" rows="10" width="100%"
                    style="display:block;"><?php echo e(Auth::user()->aboutMe); ?>   </textarea>
            </div>
            <div class="form-group">
                <label for="photo">Attach a photograph</label>
                <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file">
            </div>

            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <button type="submit">Save</button>
            </div>
    </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/profile/profileEdit.blade.php ENDPATH**/ ?>