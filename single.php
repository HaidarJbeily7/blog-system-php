

<?php include('./app/controllers/users.php') ?>

<?php include('./app/include/head.php') ?>





  <title> Blog | Post</title>
</head>

<body>



  <?php include("./app/include/header.php") ?>
    


    <!-- // content -->
    <?php   if( isset( $_SESSION['id']) ):?>  
      <?php if($_SESSION['id'] == $_POST['post-data']['user_id']):?>  
        <form action="edit_post.php" method="post">
          <div class="content "  style="margin-bottom: 0px; width:60%">
          <input type="hidden" name="post-id" value='<?php echo  $_POST['post-data']['id']  ;?>'>
          <input type="hidden" name="title" value='<?php echo  $_POST['post-data']['title']  ;?>'>
          <input type="hidden" name="body" value='<?php echo  $_POST['post-data']['body']  ;?>'>
            <button type="submit" class = 'btn' > 
                Edit Post
            </button>
          
          </div>
        </form>
      <?php endif;?>
    <?php endif;?>


    <?php if( isset( $_SESSION['id']) ):?>  
      <?php if($_SESSION['id'] == $_POST['post-data']['user_id']):?>  
        <form action="delete_post.php" method="post">
          <div class="content "  style="margin-bottom: 0px; width:60%">
          <input type="hidden" name="post-id" value='<?php echo  $_POST['post-data']['id']  ;?>'>
            <button type="submit" class = 'btn' > 
                Delete Post
            </button>
          
          </div>
        </form>
      <?php endif;?>
    <?php endif;?>


  <!-- Page wrapper -->
    <div class="page-wrapper">

    <!-- content -->
      <div class="content clearfix">

        <div class="page-content single">
          <h2 style="text-align: center;"><?php echo $_POST['post-data']['title']; ?></h2>
          <br>

          <p>
              <?php echo $_POST['post-data']['body']; ?> 
          </p>
        </div>

            <?php if(isset($_SESSION['id'])): ?>
            <form action="single.php" method="post">
                <div class="lk">
                  <button type="submit" name="like" class = "btn-sm">Like</button>
                  <button type="submit" name = "dislike" class = "btn-sm" >Dislike</button>
                </div>
                <div>
                  <textarea name="comment" cols="30" rows="3" class="text-input contact-input" placeholder="Comment..."></textarea>
                  <button type="submit" name="send-msg-btn" class="send-msg-btn btn-sm">
                    <i class="fa fa-send"></i> comment
                  </button>
                </div>
              </form>
            <?php endif; ?> 
        </div>        
    </div>
  
  

 
  <?php include("./app/include/footer.php"); ?>


  <!-- JQuery -->
 
  <script src="./assets/js/scripts.js"></script>

</body>

</html>