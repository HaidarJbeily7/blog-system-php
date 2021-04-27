<?php include("./app/controllers/users.php"); ?>

<?php include("./app/database/db.php"); ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!-- Font Awesome -->
 <link rel="stylesheet" href= "assets/css/font-awesome.min.css"  />

<!-- Custom CSS -->
<link rel="stylesheet" href=  "assets/css/style.css" />


  <title>Haidar Inspires Blog</title>
</head>

<body>



    <?php include("./app/include/header.php") ?>
    <?php if (isset($_SESSION['message'])) : ?>
      <div class="msg <?php echo $_SESSION['type'];  ?> "> 
      	<p>
          <?php 
          	echo $_SESSION['message']; 
          	unset($_SESSION['message']);
          ?>
      	</p>
      </div>
    <?php endif; ?>    
      <?php if(isset($_SESSION['id'])):?>
    <div class="content "  style="margin-bottom: 10px;">
    <a href="create_post.php">
    <button class = 'btn' > 
   Create Post
    </button>
    </a>
    </div>
    <?php endif; ?>


    <!-- content -->
    <div class="content clearfix">
      <div class="page-content">
        <h1 class="recent-posts-title">Recent Posts</h1>

        <?php foreach($posts as $post):?>
        <div class="post clearfix">
          <img src=' <?php echo "./assets/images/".$post['image']; ?>' class="post-image" alt="">
          <div class="post-content">

            <h2 class="post-title"><a href="#"><?php echo  $post['title']; ?></a></h2>

            <div class="post-info">
              <i class="fa fa-user-o"></i> <?php
               echo getUserById($post['user_id'])['username'];

              ?>
              &nbsp;
              <i class="fa fa-calendar"></i> Mar 18, 2021
            </div>
            <p class="post-body"> <?php echo $post['body']; ?>
            </p>
            
            <a href="http://localhost/BLOG/single.php" class="read-more">Read More</a>
          </div>
        </div>
        <?php endforeach;?>
<!--         
        <div class="post clearfix">
          <img src="./assets/images/image_2.png" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">That love is all there is, is all we know of love</h2></a>
            <div class="post-info">
              <i class="fa fa-user-o"></i> Hiudar Jbeily
              &nbsp;
              <i class="fa fa-calendar"></i> Feb 18, 2020
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
           
            <a href="http://localhost/BLOG/single.php" class="read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="./assets/images/image_3.png" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">Do anything, but let it produce joy</a></h2>
            <div class="post-info">
              <i class="fa fa-user-o"></i> Haidar Jbeily
              &nbsp;
              <i class="fa fa-calendar"></i> Jan 18, 2019
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
  
            <a href="http://localhost/BLOG/single.php" class="read-more">Read More</a>
          </div>
        </div>-->
      </div>
     
    </div>
    <!-- // content -->

  
  

 
  <?php include("./app/include/footer.php"); ?>


  <!-- JQuery -->
  <script src="./assets/js/jquery.min.js"></script>
  <script src="./assets/js/scripts.js"></script>

</body>

</html>