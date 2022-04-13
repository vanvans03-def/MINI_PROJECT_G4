<?php 
    session_start();
    include('server.php');


    
    $errors = array();

    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($email)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
 
            $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);

                $username = "SELECT * FROM user WHERE email='$email' ";
                $_SESSION['email'] = $email;
                $_SESSION['type'] = $row['type'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['success'] = "Your are now logged in ";
                if($_SESSION['type'] == '1'){
                    header("location: admin");
                }
                elseif($_SESSION['type'] == '0'){
                header("location: index.php");
                }
            } else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: login.php");
            }
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: login.php");
        }
    }
