<!-- hôm nay ta sẽ tạo trang login, logout(đăng nhập-đăng ký)
-ta sẽ có 3 file: bài68_login.php;  bai68_logout.php ,bài68_admin.php
-khi ng dùng bấm đăng nhập từ file login -> chuyển sang trang admin(đã đăng nhập tài khoản thành công)
-khi ng dùng bấm đăng xuất từ file admin -> chuyển sang trang logout(xóa tk đã đăng nhập )
-khi ng dùng bấm đăng nhập từ file logout -> chuyển sang trang login ( bắt đầu đăng nhập)
-->


<!-- ta sẽ dùng file này làm trang admin -->
<h1> đây là trang admin</h1>

<!-- ở file bài68_login.php: ta đã tạo 1 session có gtri = gtri email mà ng dùng nhập vào
 -có 1 lỗi ta đã xét :néu ta truy cập trực tiếp trang admin mà ko cần đăng nhập "BAI68_CHUCNANG_DANGNHAP_DANGKY.PHP" => vẫn truy cập dcd
=> ở file admin ta sẽ ktra session email có tồn tại ko, nếu có tức là ng dùng đã đăng nhập rồi và ta mới cho phép truy cập 
-->
<?php
session_start();
if (!isset($_SESSION['email']))  //nếu ko tìm thấy session email đã tạo ở file login
{
    header('location:bai68_login.php');  //thì ta chuyển hướng sang trang login và bắt ng dùng đăng nhập
}
?>

<a href="bai68_logout.php">
    <button type="submit">Đăng xuất</button>
    <!-- khi ng dùng nhấn nút đăng xuất, nó chuyển tới trang logout(nó sẽ xóa session và chuyển từ logout->login) -->
</a>