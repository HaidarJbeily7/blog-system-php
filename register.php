<?php include('./app/database/db.php'); ?>

<?php include("./app/controllers/users.php"); ?>

<?php include('./app/include/head.php') ?>


  <title>Register</title>
</head>

<body>

  <?php include("./app/include/header.php") ?>

  <div class="auth-content">
    <form action="register.php" method="post">
      <h3 class="form-title">Register</h3>

      <?php if(count($errors) > 0): ?>

       <div class="msg error">
       <?php foreach($errors as $error): ?>
        <li><?php echo $error ?></li>
          <?php endforeach; ?>
      </div> 
      <?php endif; ?>

      <div>
        <label>Username</label>
        <input type="text" name="username" class="text-input" value="<?php echo $username ?>" >
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" class="text-input" value="<?php echo $email ?>" >
      </div>
      <div>
        <label>Password</label>
        <input id = "Pass1" type="password" name="password" value="<?php echo $password?>" class="text-input" >
      </div>
      <div>
        <label>Confirm Password</label>
        <input id = "Pass2" type="password" name="passwordConf" value="<?php echo $passCfg ?>" class="text-input" >
      </div>
      <div id = 'cnf'></div>
      <div>
        <button id ='registerBtn' type="submit" name="register-btn" class="btn">Register</button>
      </div>
      <p class="auth-nav">Or <a href="login.php">Sign In</a></p>
    </form>
  </div>


  <!-- JQuery -->
 

  <script src="./assets/js/scripts.js"></script>

  
</body>

</html>