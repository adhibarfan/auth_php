<!-- /**
 * @Author: adhibarfan
 * @Date:   2016-11-04 06:39:01
 * @Last Modified by:   adhibarfan
 * @Last Modified time: 2016-11-04 06:44:09
 */
 -->
<?php
require_once "core/init.php";

session_destroy();
header('Location: login.php');

?>