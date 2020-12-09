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

?>