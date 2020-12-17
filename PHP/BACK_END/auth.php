<?php
require_once('../DATA/connection.php');
    if(isset($_POST['btn_login'])){ 
        login($connection);
    }
    function login($connection)
{
    $userName = $_POST['userNameLogin'];
    $password = $_POST['passwordLogin'];
    $password_enCode=base64_encode($password);
    $user="SELECT * FROM users WHERE email='$userName' OR user_name='$userName' AND password='$password_enCode'";
    $result = $connection->query($user);
    if ($result->num_rows > 0) {
        while ($user = $result->fetch_assoc()) {
                        $id_user=json_encode($user['id']);
                        $id_enCode=base64_encode($id_user);
                        $cookie_name='id_user';
                        setcookie($cookie_name,$id_enCode,time() + 3600, '/');
                        if($user['position']==0){
                            header('location:../FONT_END/ADMIN/dashboard.php');
                        }else{
                            header('location:../FONT_END/USERS/homepage.php');
                        }
                }
    }else{
        header('location:../FONT_END/USERS/login.php?error_login= Username or password incorrect !');
    }
}
if(isset($_COOKIE['id_user'])){
    unset($_COOKIE['id_user']); 
    setcookie('id_user', null, -1, '/'); 
    header('location:../FONT_END/USERS/homepage.php');
}

if(isset($_POST['btn_rigister'])){
    registerAccount($connection);
}
function registerAccount($connection){
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone_number=$_POST['numberPhone'];
    $address=$_POST['address'];
    $checkEmail="SELECT * FROM users WHERE email='$email'";
    $resultCheckEmail=$connection->query($checkEmail);
    $checkNumberPhone="SELECT * FROM users WHERE number_phone='$phone_number'";
    $resultCheckNumberPhone=$connection->query($checkNumberPhone);
    $checkUserName="SELECT * FROM users WHERE user_name='$userName'";
    $resultCheckUserName=$connection->query($checkUserName);
    if($resultCheckUserName->num_rows>0){
        $checkError='Username already exist !';
        header("location:../FONT_END/USERS/register.php? error=$checkError");
    }
    elseif($resultCheckEmail->num_rows>0){
        $checkError='Email already exist !';
        header("location:../FONT_END/USERS/register.php? error=$checkError");
    }elseif($resultCheckNumberPhone->num_rows>0){
        $checkError='Numbers Phone already exist !';
        header("location:../FONT_END/USERS/register.php? error=$checkError");
    }else{
       $endcodePassword=base64_encode($password);
       $addUser="INSERT INTO users(user_name,password,email,number_phone,address,created_date,position)
       VALUES ('$userName','$endcodePassword','$email','$phone_number','$address','CURDATE()',1)";
       $resultInsertUser=$connection->query($addUser);
       if($resultInsertUser===true){
            getIdUser($email,$connection);
       
      }else{
           $checkError="Create new account failed try again !";
           header("location:../FONT_END/USERS/register.php? error=$checkError");
       }
    }
}
function getIdUser($email,$connection){
    $users="SELECT * FROM users WHERE email='$email'";
    $resultUser=$connection->query($users);
    while ($user = $resultUser->fetch_assoc()) {
        $id_enCode=base64_encode($user['id']);
        $cookie_name='id_user';
        setcookie($cookie_name,$id_enCode,time() + 3600, '/');
        header('location:../FONT_END/USERS/homepage.php');
    }
}
?>
