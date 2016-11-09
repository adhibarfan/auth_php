<!-- /**
 * @Author: adhibarfan
 * @Date:   2016-11-02 19:33:43
 * @Last Modified by:   adhibarfan
 * @Last Modified time: 2016-11-04 17:11:52
 */
 -->
 <?php

//validasi register

require_once "core/init.php";

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // die($username . " " . $password);

    if (register_cek_nama($username)) {
        if (register_user($username, $password)) {
            echo "berhasil";
        } else {
            echo "gagal";
        }
    } else {
        echo "tidak bisa daftar, nama sudah ada";
    }

}

require_once "views/header.php";

?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Please Register to continue</h1>


            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" action="register.php" method="post">
                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in">
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <span class="clearfix"></span>
                </form>
            </div>
            <a href="login.php" class="text-center new-account">Login</a>
        </div>
    </div>
</div>


<?php

require_once "views/footer.php";
?>

