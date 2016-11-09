<!-- /**
 * @Author: adhibarfan
 * @Date:   2016-11-02 19:28:58
 * @Last Modified by:   adhibarfan
 * @Last Modified time: 2016-11-04 17:02:54
 */
 -->
 <?php

function register_user($username, $password)
{

    global $link;

    //mencegah sql injection
    $username = mysqli_real_escape_string($link, $username);
    $password = mysqli_real_escape_string($link, $password);

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query    = "INSERT INTO users (username, password) VALUES ('$username','$password')";

    if (mysqli_query($link, $query)) {
        return true;
    } else {
        return false;
    }
}

//validasi register nama
function register_cek_nama($username)
{

    global $link;
    $username = mysqli_real_escape_string($link, $username);

    $query = "SELECT * FROM users WHERE username = '$username'";

    if ($result = mysqli_query($link, $query)) {
        if (mysqli_num_rows($result) == 0) {
            return true;
        } else {
            return false;
        }

    }
}

function cek_data($username, $password)
{
    global $link;

    //mencegah sql injection
    $username = mysqli_real_escape_string($link, $username);
    $password = mysqli_real_escape_string($link, $password);

    $query  = "SELECT password FROM users WHERE username ='$username'";
    $result = mysqli_query($link, $query);
    $hash   = mysqli_fetch_assoc($result)['password'];

    // print_r($hash);

    if (password_verify($password, $hash)) {
        return true;

    } else {
        return false;
    }

}

?>