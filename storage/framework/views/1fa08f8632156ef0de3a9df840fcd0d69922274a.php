  
  <?php $__env->startSection('content'); ?>
      <form action="" method="post">
          <?php echo csrf_field(); ?>
          <div class="form-group">
              <label for="username" class="text-info">Email:</label><br>
              <input type="text" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
              <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
          </div>
      </form>
      <?php if($errors->has('email')): ?>
          <div class="alert alert-danger" role="alert">
              <?php echo e($errors->first('email')); ?>

          </div>

          <?php if(Session::has('success')): ?>
              <div class="alert alert-success">
                  <?php echo e(Session::get('success')); ?>

              </div>
          <?php endif; ?>


      <?php endif; ?>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/userLogin/forgot-password.blade.php ENDPATH**/ ?>