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
        </div>

        <button type="submit" class="btn btn-primary login-btn">Login</button>
    </form>
  <script src="assets/js/login.js"></script>
</body>
</html>
<?php /**PATH C:\Users\user\Downloads\laragym-master\final\energym-gymnasium\resources\views/login.blade.php ENDPATH**/ ?>