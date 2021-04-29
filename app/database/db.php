<?php

include('connect.php');

 function SelectAll($table)
{
    global $conn;
    $stmt = "select * FROM  $table";
    $result = mysqli_query($conn, $stmt);
    $array = mysqli_fetch_assoc($result);
    return $array;
}

function getUserById($id)
	{
		global $conn;
		$sql = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query($conn, $sql);

	
		$user = mysqli_fetch_all($result, MYSQLI_ASSOC);

       
       
		return $user[0]['username']; 
	}


  
    
     // escape value from form
     function esc(String $value)
     {	
         // bring the global db connect object into function
         global $conn;

         $val = trim($value); // remove empty space sorrounding string
         $val = mysqli_real_escape_string($conn, $value);

         return $val;
     }

     function getPosts() {
		global $conn;

		$sql = "SELECT * FROM posts";
		$result = mysqli_query($conn, $sql);

		// fetch all posts as an associative array called $posts
		$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $posts;
        
    }

    function deletePost($post_id)
	{
		global $conn;
		$sql = "DELETE FROM posts WHERE id=$post_id";

		if (mysqli_query($conn, $sql)) {
			$_SESSION['message'] = "Post successfully deleted";
            $_SESSION['type'] = "success";
			header("location: index.php");
			exit(0);
		}
	}

