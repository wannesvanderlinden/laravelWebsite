
<?php $__env->startSection('content'); ?>
    <br>
    <form action="" method="post" enctype="multipart/form-data" class="shadow-lg p-3 mb-5 bg-body rounded">
        <div class="form-group">
            <label for="content">Title</label>
            <textarea class="form-control" id="title" rows="1" width="5" name="title"></textarea>
            <?php if($errors->has('title')): ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo e($errors->first('title')); ?>

                </div>


            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="content">Story</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            <?php if($errors->has('content')): ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo e($errors->first('content')); ?>

                </div>


            <?php endif; ?>
        </div>


        <div class="form-group">
            <label for="photo">Attach a photograph</label>
            <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file">
            <?php if($errors->has('photo')): ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo e($errors->first('photo')); ?>

                </div>


            <?php endif; ?>
        </div>
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <button type="submit">Save</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/adminNews/newsCreator.blade.php ENDPATH**/ ?>