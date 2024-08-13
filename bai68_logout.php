<!-- trong file login,khi ta bấm đăng nhập, nó tạo ra 1 session
 - trong file admin, nó ktra session có giống trang login ko thì nó mới cho truy cập(đăng nhập vào admin)
 -còn khi muốn xóa đi thông tin đăng nhập (tức là khi bâm nút đăng xuất, ta sẽ xóa session ở trang login đi)
 => trong trang admin ko tìm thấy session đó nữa và ko cho phép truy cập
-->
<?php
session_start();

if (isset($_SESSION['email'])) {
    unset($_SESSION['email']);  //nó ktra session này có tồn tại ko , nếu có thì xóa đi session này
} else {
    header('location:bai68_login.php'); //nếu đã xóa session=> chuyển trang login để ng dùng đăng nhập lại
}
?>