<?php 

        session_start();
        $username = "";
        $password = "";
        $email = "";
        $passCfg = ""; 
        $errors = array();


        if(isset($_POST['register-btn'])){
            $username = esc($_POST['username']);
            $password = esc($_POST['password']);
            $email = $_POST['email'];
            $passCfg = esc($_POST['passwordConf']);        
            if ( empty($username))
            {
            array_push( $errors,'username is required');
            }
            if ( empty($password))
            {
                array_push($errors,"password is required" );
            }
            if ( empty($email))
            {
                array_push($errors,"Email is required" );
            }
            if ($password !== $passCfg)
            {
                array_push($errors, "confirm the password right");
            }   
            $user_check_query = "SELECT * FROM users WHERE username='$username' 
                                    OR email='$email' LIMIT 1";

            $result = mysqli_query($conn, $user_check_query);
            $user = mysqli_fetch_assoc($result);

            if ($user) { // if user exists
                if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
                }

                if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
                }
            }
            if(count($errors) == 0)
            {
                $password = md5($password);//encrypt the password before saving in the database
                $query = "INSERT INTO users (username, email, password, created_at) 
                        VALUES('$username', '$email', '$password', now())";
                $conn->query($query);

                $reg_user_id =mysqli_insert_id($conn); // get id of created user

                $_SESSION['id'] = $reg_user_id ;
                $_SESSION['user'] = getUserById($reg_user_id); // put logged in user into session array

                $_SESSION['message'] = "You are now logged in"; 
                $_SESSION['type'] ='success';
                header('location: index.php');
                exit(0);
            }

            
        }
        
        // LOG USER IN
        if (isset($_POST['login-btn'])) {

           
            $username = esc($_POST['username']);
            $password = esc($_POST['password']);
            echo $username;
            if (empty($username)) { 
                array_push($errors, "Username required"); 
            }

            if (empty($password)) { 
                array_push($errors, "Password required"); 
            }

            var_dump( $errors );


            if (empty($errors)) {
                $password = md5($password);

                $sql = "SELECT * FROM users WHERE username='$username' and password='$password' LIMIT 1";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // get id of created user
                    $reg_user_id = mysqli_fetch_assoc($result)['id']; 

                    // put logged in user into session array
                    $_SESSION['user'] = getUserById($reg_user_id); 
                    $_SESSION['message'] = "You are now logged in"; 
                    $_SESSION['type'] ='success';
                    $_SESSION['id'] = $reg_user_id ;
                    // redirect to home page
                    header('location: index.php');
                    exit(0);
                } else {
                    array_push($errors, 'Wrong credentials');
                }
            }


            
            

        }



       
