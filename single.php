<?php include('./app/controllers/users.php') ?>

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


  <title> Blog | Post</title>
</head>

<body>



    <?php include("./app/include/header.php") ?>
    
    <!-- // content -->
    
    <div class="content "  style="margin-bottom: 10px; width:80%">
    <a href="create_post.php">
    <button class = 'btn' > 
   Edit Post
    </button>
    </a>
    </div>
  <!-- Page wrapper -->
  <div class="page-wrapper">

<!-- content -->
<div class="content clearfix">

  <div class="page-content single">
    <h2 style="text-align: center;">A replacement for new year resolutions - A 12 months challenge</h2>
    <br>

    <p>Many times I have come across instances where some people scorn the practice of setting New Year Resolutions.
    </p>
    <p>Their reason for this goes something like this:</p>
    <p>The very word resolution is an indication of some form of internal conflict springing from an ineffectual
      self-governance in a person. It means the individual is waging a fight against something undesirable in their
      life; or is making a conscious decision to pursue certain ideals that before were absent in their life.</p>
    <p>Aren’t you supposed to be pursuing these ideals every day of your life? Isn’t it supposed to be the default
      state of your life? Why would you wait for a new year before you make a resolution to better your life?</p>
   

  </div>

</div>
<button type="submit" class = 'btn-sm'>Like</button>
            <button type="submit"class = 'btn-sm'>Dislike</button>
  </div>
  
  

 
  <?php include("./app/include/footer.php"); ?>


  <!-- JQuery -->
  <script src="./assets/js/jquery.min.js"></script>
  <script src="./assets/js/scripts.js"></script>

</body>

</html>