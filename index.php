<!-- /**
 * @Author: adhibarfan
 * @Date:   2016-11-02 19:32:42
 * @Last Modified by:   adhibarfan
 * @Last Modified time: 2016-11-04 06:46:04
 */
 -->

 <?php

require_once "core/init.php";
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}
?>

<h1>Halaman Profil <?php echo $_SESSION['user'] ?></h1>

		<a href="logout.php">Logout</a>
