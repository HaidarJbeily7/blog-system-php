<?php include("./app/database/connect.php") ?>
  <!-- header -->
   
  <header class="clearfix">
    <div class="logo">
      <a href="index.php">
        <h1 class="logo-text"><span>Haidar</span>Inspires</h1>
      </a>
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        
        <?php if(isset($_SESSION['id'])) : ?>
          <li> 
          <a href="#" class="userinfo">
            <i class="fa fa-user">
           
            </i>
            <?php  echo ($_SESSION['user'])==NULL?'Guest':$_SESSION['user']; ?>
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="logout.php" class="logout">logout</a></li>
          </ul>
        </li>
        <?php else: ?>
          <li><a href="register.php">Sign up</a></li>
        <li>
          <a href="login.php">
            Login
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
  <!-- // header -->