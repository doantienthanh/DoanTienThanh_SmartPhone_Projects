<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../CSS/Element.CSS">
    <link rel="stylesheet" href="../../../CSS/Header.CSS">
    <link rel="stylesheet" href="../../../CSS/Login.CSS">
    <link rel="stylesheet" href="../../../CSS/Bottom.CSS">
    <link rel="stylesheet" href="../../../CSS/Reponsive.CSS">
    <title>Title</title>
</head>

<body>
    <?php
    include('../../ELEMENTS/header.php');
    ?>
    <div class="body-login">
        <div class="border-login">
            <div class="title-login">
                <div class="border-icon-login"><i class="fas fa-user-alt icon-login"></i></div>
            </div>
            <div class="content-login">
                <form action="../../BACK_END/auth.php" method="post" onchange="return checkLogin()">
                    <div class='text-login'><i class="fas fa-user-alt icons-login"></i><input type="text"
                            name="userNameLogin" id="userNameLogin" class="item-input-login" placeholder="Users name or email">
                    </div>
                    <div class='text-login'><i class="fas fa-lock icons-login"></i><input type="password"
                            name="passwordLogin" id="passwordLogin" class="item-input-login" placeholder="Password">
                    </div>
                    <?php
                        if(isset($_GET['error_login'])){
                            echo"<span class='showError' style='color:red; color: red;
                            font-size: 13px;
                            text-align: center;
                            padding:20px;
                            margin-left:23%;
                            '>".$_GET['error_login']."</span>";
                        }
                        ?>
                    <button type="submit" class="btn-submit btn-login" name="btn_login" id="btn_login">Login</button>
                </form>
            </div>
            <div class="footer-login">
                <a href="#" class="foget-pass">Forgot password !</a>
            </div>
        </div>
    </div>
    <?php
    include('../../ELEMENTS/bottom.php')
    ?>
    <script src='../../../JS/Reponsive.js'></script>
    <script src='../../../JS/Interface.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>