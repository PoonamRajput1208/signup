<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign upL</title>
  <link rel="stylesheet" type="text/css" href="2.css">
  <script type="text/javascript">

</script>

</head>
<body>
  <div class="header">
    <h2>Sign Up</h2>
  </div>
  
  <form method="post" action="reg.php">
    <?php include('error.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?> " required >
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email;?>" required pattern=""/([\w\-]+\@[\w\-]+\.[\w\-]+)/">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" id="a"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2" id="b"  required >
    </div>
    <div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="terms"  required > I accept terms
                    and conditions
                </div>
              </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Sign Up</button>
    </div>
    
                
  </form>
</body>
</html>