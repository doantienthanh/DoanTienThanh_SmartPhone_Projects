<div class="top-header">
        <div class="col-6  left-top-header">
            <span><a href="homepage.php" style="color:white; list-style:none; text-decoration: none;">tienthanhmobile</a></span>
        </div>
        <div class="col-6  right-top-header">
            <?php
            if(isset($_COOKIE['id_user'])) {
                $id=$_COOKIE['id_user'];
                $id_user=json_decode(base64_decode($id));
                $getUser="SELECT * FROM users WHERE id=$id_user";
                $resultUser = $connection->query($getUser);
                if ($resultUser) {
                    while ($user = $resultUser->fetch_assoc()) {  
                    echo'<a href="#" class="link-header-users header-icon-1"><span class="span-reponsive"><i class="fas fa-user-alt icon-top-header">&nbsp;&nbsp;'.$user["user_name"].'</i>&nbsp;&nbsp;</span></a>';
                    echo'<a href="../../BACK_END/auth.php" class="link-header-users header-icon-2"><span><i class="fas fa-sign-out-alt icon-top-header"></i></span></a>';    
                }
                    }
            }else{
                echo '
                <a href="login.php" class="link-header-users header-icon-3"><span><i class="fas fa-sign-in-alt icon-top-header"></i></span></a>
                <a href="register.php" class="link-header-users header-icon-4"><span><i class="fas fa-user-alt icon-top-header"></i></span></a>
                ';
            }
        
                    ?>
        </div>
    </div>