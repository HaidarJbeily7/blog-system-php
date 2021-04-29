<?php include("./app/controllers/users.php"); ?>

<?php include("./app/database/db.php"); ?>

<?php include("./app/controllers/posts.php"); ?>

<?php  $posts =getPosts(); ?>
<?php include('./app/include/head.php') ?>


  <title>Haidar Inspires Blog</title>
</head>

<body>



    <?php include("./app/include/header.php") ?>

    <?php  if (isset($_SESSION['message'])) : ?>
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
        <form action="single.php" method="post">
          <?php foreach($post as $key => $value ):?>
        <input type="hidden" name="post-data[<?php echo $key;?>]" value=" <?php echo $value; ?>">
        <?php endforeach; ?>
        <div class="post clearfix">
          <img src=' <?php echo "./assets/images/".$post['image']; ?>' class="post-image" alt="">
          <div class="post-content">

            <h2 class="post-title"><a href="#"><?php echo  $post['title']; ?></a></h2>

            <div class="post-info">
              <i class="fa fa-user-o"></i> <?php
             echo getUserById($post['user_id']);

              ?>
              &nbsp;
              <i class="fa fa-calendar"></i><?php echo date("F j, Y ", strtotime($post["created_at"])); ?>
            </div>
            <p class="post-body">
             <?php
              $Tbody = $post['body']; 
             if(strlen($Tbody) > 150)
               {
                 echo substr($Tbody,0,150).'.....';
                }
            else 
            {
               echo $Tbody.'.....';
              }
            ?>


            </p>
            
            <button type="submit" class = "read-more" name="single-post">Read More</button>
          </div>
        </div>
        </form>
        <?php endforeach;?> 
        
        </div>
     
     </div>






     
    <!-- // content -->

  
  

 
  <?php include("./app/include/footer.php"); ?>


 
  <script src="./assets/js/scripts.js"></script>

</body>

</html>