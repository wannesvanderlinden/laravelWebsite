

<?php $__env->startSection('content'); ?>
    <br>
    <div class="card text-center" style="opacity: 0.7;">

        <div class="card-body">
            <h5 class="card-title">Active news</h5>
            <p class="card-text">Down here you can see the news items</p>

        </div>

    </div>
    <br>


    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



        <?php echo csrf_field(); ?>
        <div class="card  shadow-lg p-3 mb-5 bg-body rounded"
            style="width: 50%; height:5%; margin-right:auto; margin-left:auto; ">
            <img class="card-img-top" src="<?php echo e(asset('storage/news/' . $new->img)); ?>" alt="Card image cap" style=" width:auto;
                                max-width:900px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($new->title); ?></h5>
                <p class="card-text"><?php echo e($new->content); ?></p>
                <p class="card-text"><small class="text-muted">Created at:<?php echo e($new->created_at); ?>

                    </small></p>


                <?php if(Auth::user() !== null): ?>
                    <form action="" method="post">
                        <?php echo csrf_field(); ?>
                        <label class="form-label" for="reaction">reaction</label>
                        <input type="text" name="reaction" id="reaction" width="100px">
                        <button type="submit">post</button>
                        <input type="hidden" id="news_id" name="news_id" value="<?php echo e($new->id); ?>">
                <?php endif; ?>
            </div>
            <hr>
            <?php $__currentLoopData = $new->reactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <br>
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        Reaction: <a class="nav-link"
                            href="/profile/user/<?php echo e($reaction->user_id); ?>"><?php echo e($reaction->name); ?></a>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p><?php echo e($reaction->content); ?></p>
                            <footer class="blockquote-footer"><?php echo e($reaction->created_at); ?></footer>
                        </blockquote>
                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <?php if($errors->has('reaction')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e($errors->first('reaction')); ?>

                </div>

            <?php endif; ?>

        </div>
        </form>


        <br>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/welcome/welcome.blade.php ENDPATH**/ ?>