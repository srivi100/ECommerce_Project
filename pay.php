<?php

require_once ("/Applications/XAMPP/xamppfiles/htdocs/login/web_2/CreateDb.php");
require_once ("/Applications/XAMPP/xamppfiles/htdocs/login/web_2/component.php");
require_once ("/Applications/XAMPP/xamppfiles/htdocs/login/web_2/cart.php");
?>
<!DOCTYPE html>
<html lang="en">
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

</head>
<body>
<div class="signup-form" id="frm">
    <form action="success.php" method="post" enctype="multipart/form-data">
		<h2>Payment!!</h2>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="form-label">Address</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="landmark" placeholder="Near Landmark" required="required">
        </div>
		<div class="form-group" id="btn">
      <h6>$<?php
          echo $total;
          ?></h6>
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block" style="width:150%; margin-top: 10px;">Cash on delivery</button>
        </div>

    </form>
</div>
</body>
</html>
