<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Energym Login</title>
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="icon" type="image/png" href="assets/images/gymlogo.jpeg">
</head>
<body>
  <div class="container">
    <div class="login-background">
      <div class="image">
        <a href="<?php echo e(url('/page')); ?>"><img src="<?php echo e(asset('assets/images/Energy gim wt.png')); ?>" alt="login-image"></a>
      </div>
    </div>
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="role">Role</label>
            <div class="select-container">
                <select id="role" name="role" class="custom-select">
                    <option value="gym_member">Gym Member</option>
                    <option value="trainer">Trainer</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control">
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="color: red;"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary login-btn">Login</button>
    </form>
  <script src="assets/js/login.js"></script>
</body>
</html>
<?php /**PATH D:\energym-gymnasium\resources\views/login.blade.php ENDPATH**/ ?>