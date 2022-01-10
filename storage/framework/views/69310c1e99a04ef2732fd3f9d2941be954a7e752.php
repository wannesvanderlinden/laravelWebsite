
<?php $__env->startSection('content'); ?>
    <?php if($questions->isEmpty()): ?>
        <h1
            style="margin:auto; position: absolute;
                                                                                            top: 50%;
                                                                                            left: 50%;
                                                                                            margin-right: -50%;
                                                                                            transform: translate(-50%, -50%)">
            No posed
            questions
            at
            the
            moment
        </h1>
    <?php endif; ?>
    <br>

    <br>
    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="" method="post">
            <div class="card  shadow-lg p-3 mb-5 bg-body rounded"
                style="width: 50%; height:5%; margin-right:auto; margin-left:auto; ">
                <div class="card-body">
                    <h5 class="card-title">Question of user: <?php echo e($question->question); ?></h5>
                    <input type="hidden" id="title" name="title" value="<?php echo e($question->question); ?>">
                    <input type="hidden" id="id" name="posedId" value="<?php echo e($question->id); ?>">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Answer:</label>
                        <textarea name="answer" id="aboutMe" cols="60%" rows="10" width="100%"
                            style="display:block;">   </textarea>
                    </div>
                    <label for="categories">Choose a categorie:</label>
                    <select name="categories" id="categories">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div> <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <button type="submit">add</button>
                </div>
        </form>
        <a href="/FAQ/question/posed/delete/<?php echo e($question->id); ?>" class="btn btn-primary">delete</a>
        </div>
        <?php if($errors->has('title')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e($errors->first('title')); ?>

            </div>

        <?php endif; ?>
        <?php if($errors->has('answer')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e($errors->first('answer')); ?>

            </div>

        <?php endif; ?>
        <?php if($errors->has('categories')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e($errors->first('categories')); ?>

            </div>

        <?php endif; ?>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/adminPosedQuestions/posedQuestions.blade.php ENDPATH**/ ?>