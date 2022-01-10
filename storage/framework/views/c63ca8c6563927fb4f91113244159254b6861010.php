  
  <?php $__env->startSection('content'); ?>
      <form action="" method="post">
          <?php echo csrf_field(); ?>
          <div class="form-group">
              <label for="email" class="text-info">Email:</label><br>
              <input type="text" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
              <label for="password" class="text-info">Password:</label><br>
              <input type="password" name="password" id="password" class="form-control">
          </div>
          <?php if($errors->has('password')): ?>
              <div class="alert alert-danger" role="alert">
                  <?php echo e($errors->first('password')); ?>

              </div>


          <?php endif; ?>
          <div class="form-group">
              <label for="password_confirmation" class="text-info">Password:</label><br>
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
              <?php if($errors->has('password_confirmation')): ?>
                  <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('password_confirmation')); ?>

                  </div>


              <?php endif; ?>
          </div>

          <input type="hidden" name="token" id="token" class="form-control" value=<?php echo e($token); ?>>
          <div class="form-group">
              <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
          </div>
      </form>
      <?php if($errors->has('email')): ?>

          <div class="alert alert-danger" role="alert">
              Email is not in database
          </div>

      <?php endif; ?>
      <?php if(Session::has('status')): ?>
          <div class="alert alert-success">
              <?php echo e(Session::get('status')); ?>

          </div>
      <?php endif; ?>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\github\project-1---laravel-wannesvanderlinden\resources\views/userLogin/resetPassword.blade.php ENDPATH**/ ?>