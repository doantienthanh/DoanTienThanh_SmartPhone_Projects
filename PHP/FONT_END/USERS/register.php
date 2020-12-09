<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../CSS/Element.CSS">
    <link rel="stylesheet" href="../../../CSS/Header.CSS">
    <link rel="stylesheet" href="../../../CSS/Bottom.CSS">
    <link rel="stylesheet" href="../../../CSS/Register.CSS">
    <link rel="stylesheet" href="../../../CSS/Reponsive.CSS">
    <title>Title</title>
</head>

<body>
    <?php
    include('../../ELEMENTS/header.php');
    ?>
    <div class="body-register">
        <div class="border-register">
            <div class="title-register">
                <h1 class="text-center-title">SIGN UP</h1>
            </div>
            <div class="content-register">
                <form action="" method="post" class="form-register" onsubmit="return checkRegister()">
                    <div class='text-group'><i class="fas fa-user-alt icons-register"></i><input type="text"
                            name="userName" id="userName" class="item-input-register" placeholder="Enter your user name"></div>
                    <div class='text-group'><i class="fas fa-lock icons-register"></i><input type="password"
                            name="password" id="password" class="item-input-register" placeholder="Enter your password"></div>
                    <div class='text-group'><i class="fas fa-envelope-square icons-register"></i><input type="email"
                            name="email" id="email" class="item-input-register" placeholder="Enter your email"></div>
                    <div class='text-group'><i class="fa fa-phone icons-register"></i><input type="number"
                            name="numberPhone"  id="phoneNumber" class="item-input-register" placeholder="Enter your number phone"></div>
                    <div class='text-group'><i class="fas fa-map-marker-alt icons-register"></i><input type="text"
                            name="address" id="address" class="item-input-register" placeholder="Enter your address"></div>
                    <p class="showError" id="showError"></p>
                    <button class="btn-submit btn-register">sign up</button>
                </form>
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