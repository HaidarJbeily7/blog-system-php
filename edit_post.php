<?php include('./app/database/db.php'); ?>

<?php include('./app/controllers/users.php') ?>

<?php include('./app/controllers/posts.php') ?>

<?php include('./app/include/head.php') ?>


  <title> Blog | Edit</title>
</head>

<body>



    <?php include("./app/include/header.php") ?>
    <div class="content ">
    
       
    <?php if(count($errors) > 0): ?>
        <div class="msg error">
          <?php foreach($errors as $error): ?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </div> 
      <?php endif; ?>

        <h2 style="text-align: center;">Edit Post</h2>

        <form action="create_post.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value='<?php echo  $_POST['post-id'] ;?>'>
          <div class="input-group">
            <label>Title</label>
            <input type="text" name="title" class="text-input" value = '<?php echo $_POST['title']; ?> '>
          </div>
          <div class="input-group">
            <label>Body</label>
            <textarea class="text-input" name="body" id="body" ><?php echo $body; ?><?php echo $_POST['body']; ?></textarea>
          </div>
          <div>
          <label style="float: left; margin: 5px auto 5px;">Featured image</label>
				<input 
					type="file"
					name="featured_image"
          value = '<?php echo $image; ?>'
					>
          </div>
         
          <div class="input-group">
            <button type="submit" name="update-post" class="btn">Update Post</button>
          </div>
        </form>

      
    </div>
    
 
        <?php include("./app/include/footer.php"); ?>


<!-- JQuery -->

<script src="./assets/js/scripts.js"></script>

</body>

</html>