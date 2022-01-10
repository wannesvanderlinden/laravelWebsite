
<?php $__env->startSection('content'); ?>
    <br>
    <div class="card text-center">

        <div class="card-body">
            <h5 class="card-title">Game creator</h5>
            <p class="card-text">You can create your game down here</p>

        </div>

    </div>
    <br>
    <form class="form-horizontal " action="" method="post">


        <br>
        <div class="card shadow-lg p-3 mb-5 bg-body rounded" style=" width:50%; margin:auto;">
            <br>
            <div class="form-row">
                <div class="form-group">
                    <label for="formGroupExampleInput" style="  margin:auto;">Title: <input type="text"
                            class="form-control" name="title" id="formGroupExampleInput" placeholder="title"></label>

                </div>
                <?php if($errors->has('title')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($errors->first('title')); ?>

                    </div>

                <?php endif; ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="explenation">Explenation:<br> <textarea id="explenation" name="explenation" rows="4"
                                cols="50">   </textarea></label>

                    </div>
                    <?php if($errors->has('explenation')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e($errors->first('explenation')); ?>

                        </div>


                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <p>
                        Age groups:</p>
                    <input type="checkbox" id="kleuters" name="kleuters" value="2">
                    <label for="kleuters"> kleuters</label><br>
                    <input type="checkbox" id="GrootPlein" name="GrootPlein" value="3">
                    <label for="GrootPlein">Groot Plein</label><br>
                    <input type="checkbox" id="+13" name="plusd" value="1">
                    <label for="+13"> +13</label><br>

                    <?php echo csrf_field(); ?>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/spellenForum/spellenCreator.blade.php ENDPATH**/ ?>