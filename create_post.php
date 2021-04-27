<?php include('./app/database/db.php'); ?>

<?php include('./app/controllers/users.php') ?>

<?php include('./app/controllers/posts.php') ?>

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
    <div class="content ">
    
       
    <?php if(count($errors) > 0): ?>
        <div class="msg error">
          <?php foreach($errors as $error): ?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </div> 
      <?php endif; ?>

        <h2 style="text-align: center;">Create Post</h2>

        <form action="create_post.php" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <label>Title</label>
            <input type="text" name="title" class="text-input" value = '<?php echo $title ?> '>
          </div>
          <div class="input-group">
            <label>Body</label>
            <textarea class="text-input" name="body" id="body" value = '<?php echo '<p>'.$body.'</p>'; ?>' ></textarea>
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
            <button type="submit" name="save-post" class="btn">Add Post</button>
          </div>
        </form>

      
    </div>
    
 
        <?php include("./app/include/footer.php"); ?>


<!-- JQuery -->
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/scripts.js"></script>

</body>

</html>