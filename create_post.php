

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
    

        <h2 style="text-align: center;">Create Post</h2>

        <form action="create.php" method="post">
          <div class="input-group">
            <label>Title</label>
            <input type="text" name="title" class="text-input">
          </div>
          <div class="input-group">
            <label>Body</label>
            <textarea class="text-input" name="body" id="body"></textarea>
          </div>
          
          <div class="input-group">
            <label>
              <input type="checkbox" name="publish" /> Publish
            </label>
          </div>
          <div class="input-group">
            <button type="submit" name="save-post" class="btn">Save Post</button>
          </div>
        </form>

      
    </div>
    
    <!-- // Admin Content -->

  

 
        <?php include("./app/include/footer.php"); ?>


<!-- JQuery -->
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/scripts.js"></script>

</body>

</html>