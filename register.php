<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="login1.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="login1.css">
</head>
<body>
  <div class="signup-form" id="frm">
  	<h2>Register</h2>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="form-group">
  	  <input type="text"   class="form-control" placeholder="Username" required="required" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="form-group">
  	  <input type="email"  class="form-control" name="email"  placeholder="Email" required="required" value="<?php echo $email; ?>">
  	</div>
  	<div class="form-group">
  	  <input type="password"  class="form-control"name="password_1" placeholder="Type a new password" required="required">
  	</div>
  	<div class="form-group">
  	  <input type="password"  class="form-control" name="password_2" placeholder="Confirm password" required="required">
  	</div>
  	<div class="form-group" id="btn">
  	  <button type="submit" class="btn btn-success btn-lg btn-block" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a user? <a href="login.php">Sign in</a>
  	</p>
  </form>
    </div>
</body>
</html>
