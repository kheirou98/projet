<?php include('server.php') ?>
<!DOCTYPE html>
<html>
 <link rel="stylesheet" type="text/css" href="../public/css/style2.css">
<div class="header">
  	  <h3>Register</h3>
   </div>
   <body>
<form method="post" action="home.php">
  <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
	    <p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  
  	</div>
</body>
<meta http-equiv="pragma" content="no-cache"/>
</html>