<!-- /**
 * @Author: adhibarfan
 * @Date:   2016-11-02 19:33:17
 * @Last Modified by:   adhibarfan
 * @Last Modified time: 2016-11-04 16:54:54
 */ -->

 <?php

//validasi register

require_once "core/init.php";

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // die($username . " " . $password);

//    echo $username . $password;

    if (!empty(trim($username)) && !empty(trim($password))) {

        if (cek_data($username, $password)) {

            $_SESSION['user'] = $username;

            header('Location: index.php');

        } else {
            echo "data anda salah";
        }

    }
}

require_once "views/header.php";

?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Please Login to continue</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" action="login.php" method="post">
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
            <a href="register.php" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>



<!-- <form action='login.php' method="post">
        <label>Username</label><br>
        <input type="text" name="username">
        <br>
        <br>

        <label>Password</label><br>
        <input type="password" name="password">

        <br>
        <br>

        <input type="submit" name="submit" value="Daftar">

     </form> -->


<?php

require_once "views/footer.php";
?>


