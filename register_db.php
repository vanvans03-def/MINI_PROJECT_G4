<?php
    session_start();
    include('server.php');
    $errors = array();
    if(isset($_POST['regis_user'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $passwordCheck = mysqli_real_escape_string($conn,$_POST['password2']);

        $name = mysqli_real_escape_string($conn,$_POST['Frist_name']);
        $Lname = mysqli_real_escape_string($conn,$_POST['Last_name']);
        $telephone = mysqli_real_escape_string($conn,$_POST['telephone']);
        
        if(empty($email)){
            array_push($errors,"email is required");
        }
        if(empty($password)){
            array_push($errors,"password is required");
        }
        if(empty($name)){
            array_push($errors,"name is required");
        }
        if(empty($Lname)){
            array_push($errors,"Last Name is required");
        }
        if($password != $passwordCheck){
            array_push($errors,"Password is not match");
        }

        $user_check_query ="SELECT * FROM users WHERE email = '$email'LIMIT 1 ";
        $query = mysqli_query($conn,$user_check_query);
        $result = mysqli_fetch_assoc($query);
        if($result){
            if($result['email' === $email]){
                array_push($errors,"This email already ");
            }
           
        }
        $type = 0;
        if(count($errors) == 0){
            $sql = "INSERT INTO users (email,password,name,Lname,telephone,type) VALUES ('$email','$password','$name','$Lname','$telephone' ,'$type')";
           
            mysqli_query($conn, $sql);

          
        
            $_SESSION['success'] = "สมัครสมาชิกเรียบร้อย";
            
            header('location: index.php'); 
            
        }else {
            header("location: register.php");
        }
    }

?>