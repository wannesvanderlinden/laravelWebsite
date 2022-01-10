

<?php $__env->startSection('content'); ?>
    <br>
    <div class="card text-center">

        <div class="card-body">
            <h5 class="card-title">News manager</h5>
            <p class="card-text">Down here you can see the news items and can delete and edit them</p>

        </div>

    </div>
    <br>
    <div class="row">
        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <div class="col-sm-6 d-flex justify-content-center">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded"
                    style="width: 18rem;margin-left:0em; margin-right:0em;margin-top:1em;">
                    <img class="card-img-top" src="<?php echo e(asset('storage/news/' . $new->img)); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($new->title); ?></h5>
                        <p class="card-text"><?php echo e($new->content); ?></p>
                        <a href="/news/<?php echo e($new->id); ?>/edit" class="btn btn-primary">edit</a>
                        <a href="/news/<?php echo e($new->id); ?>/delete" class="btn btn-primary">delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/adminNews/editNews.blade.php ENDPATH**/ ?>