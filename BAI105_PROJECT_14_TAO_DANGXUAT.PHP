<!-- chức năng đăng xuất: khi ta vào trang đăng nhập và nhập đúng tài khoản rồi
 => nó tạo 1 session và chuyển sang trang admin, ở trang admin sẽ ktra đã có session kia chưa, nếu có rồi thì cho vào
 nếu chưa nó sẽ quay lại trang đăng nhập bắt ta nhập
 -đăng xuát đơn giản là ktra xem session đó đã tồn tại chưa, nếu tồn tại rồi thì ta xóa session đó đi 
 -->

<?php
session_start();

if (isset($_SESSION['mySession'])) {
    unset($_SESSION['mySession']);
}
header("location: BAI103_PROJECT_12_TRANG_DANGNHAP.php") //sau khi đăng xuất nó sẽ nhảy luôn đến trang đăng nhập để ng dùng đăng nhập lại 
?>