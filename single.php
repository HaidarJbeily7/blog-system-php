<?php include("./app/database/db.php"); ?>

<?php include('./app/controllers/users.php') ?>

<?php include('./app/controllers/comments.php') ?>

<?php
if(isset($_POST['post-data']))
  {
    $title =$_POST['post-data']['title'];
    $body  =$_POST['post-data']['body']  ;
    $post_id = $_POST['post-data']['id'];
    $user_id =$_POST['post-data']['user_id'];
  }



?>

    
    <?php include('./app/include/head.php') ?>


  <title> Blog | Post</title>
</head>

<body>



  <?php include("./app/include/header.php") ?>
    
  <?php  if (isset($_SESSION['message'])) : ?>
      <div class="msg <?php echo $_SESSION['type'];  ?> "> 
      	<p>
          <?php 
          	echo $_SESSION['message']; 
            $parg = $_SESSION['message']; 
          	unset($_SESSION['message']);
          ?>
      	</p>
      </div>
    <?php endif; ?>  

    <!-- // content -->
    <?php   if( isset( $_SESSION['id']) ):?>  
      <?php if($_SESSION['id'] == $user_id):?>  
        <form action="edit_post.php" method="post">
          <div class="content "  style="margin-bottom: 0px; width:60%">
          <input type="hidden" name="post-id" value='<?php echo $post_id ;?>'>
          <input type="hidden" name="title" value='<?php echo $title  ;?>'>
          <input type="hidden" name="body" value='<?php echo  $body ;?>'>
            <button type="submit" class = 'btn' > 
                Edit Post
            </button>
          
          </div>
        </form>
      <?php endif;?>
    <?php endif;?>


    <?php if( isset( $_SESSION['id']) ):?>  
      <?php if($_SESSION['id'] == $user_id):?>  
        <form action="delete_post.php" method="post">
          <div class="content "  style="margin-bottom: 0px; width:60%">
          <input type="hidden" name="post-id" value='<?php echo  $post_id ;?>'>
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
          <h2 style="text-align: center;"><?php echo $title; ?></h2>
          <br>

          <p>
              <?php echo $body; ?> 
          </p>
        </div>

            <?php if(isset($_SESSION['id'])): ?>

            <p> <?php echo $parg; ?></p>
            <br>
            <form action="single.php" method="post">
                <div class="lk">
                <input type="hidden" name="post_id" value='<?php echo  $post_id  ;?>'>
                <input type="hidden" name="user_like_id" value='<?php echo  $_SESSION['id'] ;?>'>
                <input type="hidden" name="title" value='<?php echo $title  ;?>'>
                <input type="hidden" name="body" value='<?php echo  $body ;?>'>
                  
          

                  <button type="submit" name="like"  style="  width: 30px;
                                                              height: 30px;
                                                              margin: 0 auto;
                                                              line-height: 30px;
                                                              border-radius: 50%;
                                                              color: rgba(0, 150, 136, 1);
                                                              background-color: rgba(38, 166, 154, 0.3);
                                                              border-color: rgba(0, 150, 136, 1);
                                                              border-width: 1px;
                                                              font-size: 15px;">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                  </button>
                  <button type="submit" name="dislike" style="width: 30px;
                                                            height: 30px;
                                                            margin: 0 auto;
                                                            line-height: 30px;
                                                            border-radius: 50%;
                                                            color: rgba(255, 82, 82, 1);
                                                            background-color: rgba(255, 138, 128, 0.3);
                                                            border-color: rgba(255, 82, 82, 1);
                                                            border-width: 1px;
                                                            font-size: 15px;">
                    	<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                  </button>



                </div>
                <div>
                  <textarea name="comment" cols="30" rows="3" class="text-input contact-input" placeholder="Comment..."></textarea>
                  <button type="submit" name="sub-comment" class="send-msg-btn btn-sm">
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