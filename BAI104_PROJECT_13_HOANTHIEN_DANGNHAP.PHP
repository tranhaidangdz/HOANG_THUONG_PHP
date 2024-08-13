<?php
session_start();
if (!isset($_SESSION['mySession'])) {  //ktra nếu chưa có session này thì ta quay lại trang đăng nhập
    header('location: BAI103_PROJECT_12_TRANG_DANGNHAP.php');
}
?>
<h1>đăng nhập thành công</h1>
<h1>đây là trang admin</h1>

<a href="BAI105_PROJECT_14_TAO_DANGXUAT.PHP">
    <button type="submit" name="dangxuat">đăng xuất</button>
</a>