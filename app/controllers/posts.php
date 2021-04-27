<?php

    include('path.php');
    $posts = SelectAll('posts');
    $title ='';
    $body = '';
    $image_name = '';
    $errors = array();
    if(isset($_POST['save-post']))
    {
        $image = $_FILES["featured_image"];
       
        unset($_POST['save-post']);
        $title =$_POST['title'];
        $body = $_POST['body'];

        if (!empty($image))
            {
                $image_name = time() . $image['name'];
                $dest = ROOT ."\assets\images\\".$image_name;
                $res =  move_uploaded_file($image[ "tmp_name" ], $dest);
                if(!$res)
                array_push($errors,'Failed to upload the image');
            }
        else
            {
                array_push($errors, 'Post image required');
            }


        if(empty( $title))
            {
                array_push($errors,"Title is required");
            }
        if (empty( $body))
            {
                array_push($errors,"body is required");
            }
        
        if(count($errors) == 0)
        {
         
            $user_id = $_SESSION['id'];
            $sql = "INSERT INTO posts( user_id, title, image, body) VALUES ('$user_id' ,'$title','$image_name' ,'$body')  ";
            
            $result = mysqli_query($conn,$sql);
            if( $result)
                {
                    $_SESSION['message'] = "Post Created"; 
                    $_SESSION['type'] ='success';
                    header('location: index.php');
                    exit(0);
                }
        }
    }
