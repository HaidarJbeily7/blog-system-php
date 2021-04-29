
<?php include('./app/database/db.php') ?>
<?php include('./app/controllers/users.php') ?>
<?php include('./app/controllers/posts.php') ?>
<?php include('./app/include/head.php') ?>

<?php $id = $_POST['post-id'] ; ?>

<title> Blog | Delete </title>
</head>

<body>



  <?php include("./app/include/header.php") ?>
    
    <!-- content -->
    <div class="page-wrapper">

     <div class="content clearfix">
        <h1>Are you sure?</h1>
        <form action="delete_post.php" method="post">
            <input type="hidden" name="post-id" value="<?php echo $id; ?>">
            <button type="submit" name="yes" class='btn-sm'>Yes, I am sure</button>
            <button type="submit" name="no" class='btn-sm'>No, I am not</button>

        </form>
     </div>
     </div>

  <?php include("./app/include/footer.php") ?>


  
  <!-- JQuery -->
 
  <script src="./assets/js/scripts.js"></script>

</body>

</html>