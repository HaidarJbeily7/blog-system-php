<?php 
        $title ='';
        $body = '';
        $post_id= 0;
        $user_id= 0;
        $parg ='';
        if (isset($_POST['like']))
        {
        
            $title =$_POST['title'];
            $body =$_POST['body'];

            $post_id =$_POST['post_id'];
            $user_like_id = $_POST['user_like_id'];
            $query = "SELECT * FROM users Where id =$user_like_id ";
            
            
            $res = mysqli_query($conn, $query);

            $field  = mysqli_fetch_all($res, MYSQLI_ASSOC);
   
            $user_like_posts= $field[0]['like'];
            $user_like_posts_arr =  explode(',',$user_like_posts);
            $found =array_search( $post_id,$user_like_posts_arr);
           if( $found == false)
           {
            $newfield = $user_like_posts . ','. $post_id;
            $query =  "UPDATE users SET `like` = '$newfield' WHERE id='$user_like_id' ";
            $result = mysqli_query($conn, $query);
            if($result)
                {
                    $_SESSION['message'] = "You liked this post";
                    $_SESSION['type'] = 'success';
                }
                else{
                    $_SESSION['message'] = "Server Error";
                    $_SESSION['type'] = 'error';
                }
           }
           else{
            $_SESSION['message'] = "You already liked this post";
           }
   
        }



        if (isset($_POST['dislike']))
        {
            $title =$_POST['title'];
            $body =$_POST['body'];

            $post_id =$_POST['post_id'];
            $user_like_id = $_POST['user_like_id'];
            $query = "SELECT * FROM users Where id =$user_like_id ";
            
            
            $res = mysqli_query($conn, $query);

            $field  = mysqli_fetch_all($res, MYSQLI_ASSOC);
   
            $user_dislike_posts= $field[0]['dislike'];
            $user_dislike_posts_arr =  explode(',',$user_dislike_posts);
            $found =array_search( $post_id,$user_dislike_posts_arr);
           if( $found == false)
           {
            $newfield = $user_dislike_posts . ','. $post_id;
            $query =  "UPDATE users SET `dislike` = '$newfield' WHERE id='$user_like_id' ";
            $result = mysqli_query($conn, $query);
            if($result)
                {
                    $_SESSION['message'] = "You disliked this post";
                    $_SESSION['type'] = 'error';
                }
                else{
                    $_SESSION['message'] = "Server Error";
                    $_SESSION['type'] = 'error';
                }
           }
           else{
            $_SESSION['message'] = "You already disliked this post";
            $_SESSION['type'] = 'error';
           }
        }
        if (isset($_POST['sub-comment']))
        {
            
            $title =$_POST['title'];
            $body =$_POST['body'];

            $post_id =$_POST['post_id'];
            $user_like_id = $_POST['user_like_id'];
            $content = $_POST['comment'];
            if(empty($content))
            {
                $_SESSION['message'] = "Comment is Empty";
                $_SESSION['type'] = 'error';
            }else{
            $query = "INSERT into comments (post_id,user_id,content) VALUES ('$post_id','$user_like_id','$content')";
            $res = mysqli_query($conn,$query);
            if($res)
            {
                $_SESSION['message'] = "Comment successed";
                $_SESSION['type'] = 'success';
            }
                else{
                    $_SESSION['message'] = "Server Error";
                    $_SESSION['type'] = 'error';
                }
            }
        }