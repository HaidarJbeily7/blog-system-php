<?php include('./app/database/db.php'); ?>

<?php include("./app/controllers/users.php"); ?>

<?php include('./app/include/head.php') ?>

  <title>Login</title>
</head>

<body>


    <?php include("./app/include/header.php") ?>

    
  
 
     


  <div class="auth-content">
    <form action="login.php" method="post">
      <h3 class="form-title">Login</h3>
      
      <?php if(count($errors) > 0): ?>
        <div class="msg error">
          <?php foreach($errors as $error): ?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </div> 
      <?php endif; ?>

      <div>
        <label>Username</label>
        <input type="text" name="username" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input  type="password" name="password" class="text-input">
      </div>
      <div>
        <button  type="submit" name="login-btn" class="btn">Login</button>
      </div>
      <p class="auth-nav">Or <a href="register.php">Sign Up</a></p>
    </form>
  </div>



  <!-- JQuery -->


  <script src="./assets/js/scripts.js"></script>


</body>

</html>