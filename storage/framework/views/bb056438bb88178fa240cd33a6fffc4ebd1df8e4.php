
<?php $__env->startSection('content'); ?>



    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="content">Title</label>
            <textarea class="form-control" id="title" rows="1" width="5" name="title"><?php echo e($new->title); ?></textarea>
        </div>

        <div class="form-group">
            <label for="content">Story</label>
            <textarea class="form-control" id="content" name="content" rows="3"><?php echo e($new->content); ?></textarea>
        </div>


        <div class="form-group">
            <label for="photo">Attach a photograph</label>
            <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file">
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

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/newsEditSave.blade.php ENDPATH**/ ?>