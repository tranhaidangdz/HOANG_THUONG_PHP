<!-- ta sẽ tạo 1 form đăng nhập để nhập thông tin vào đây -->
<form action="bai68_login.php" method="post">
    Email: <input type="text" name="email">
    Password: <input type="password" name="password">
    <button type="submit" name="dangnhap">Đăng nhập</button>
</form>

<?php
session_start();
//ta sẽ xd 1 đk ktra: nếu session "email" đã tồn tại rồi=> chuyển trang admin luôn chứ ko bắt ng dùng đăng nhập nữa
if (isset($_SESSION['email'])) {
    header('location:BAI68_CHUCNANG_DANGNHAP_DANGKY.PHP');
}
//khi ngta nhấn nút đăng nhập => ta ktra nút đó có tồn tại ko, nếu có mới bắt đầu làm việc
if (isset($_POST['dangnhap'])) {
    //nếu ng dùng nhấn nút đăng nhập => ta sẽ tạo 2 biến lưu gtri "email" và "password" đó
    $email = $_POST['email'];
    $password = $_POST['password'];
    //ta ktra nếu email và mật khẩu ng dùng nhập khớp với email và mk đăng nhập => cho phép đăng nhập (chuyển sang trang admin)
    if ($email == 'trandang211@gmail.com' && $password == '12345') {
        $_SESSION['email'] = $email;  //ta tạo 1 session có gtri = gtri email ng dùng nhập, sau đó ở trang admin ta ktra session này
        header('location:BAI68_CHUCNANG_DANGNHAP_DANGKY.PHP');  //dùng hàm header để chuyển trang 
    } else
        echo "tài khoản or mật khẩu ko đúng";
    //có 1 VẤN ĐỀ Ở ĐÂY: khi ng dùng đã đăng nhập để chuyển sang trang admin rồi, khi ngta vào lại trang admin mà ko phải đăng nhập thì nó vẫn vào đc (do chưa có session để lưu thông tin đăng nhập)
    //tức là trang admin bị bẻ khóa (ta phải tạo 1 session ở file login, sau đó ở file admin ta ktra xem có giống session đó ko thì mới cho vào)
    //trc khi chuyển sang trang "BAI68_CHUCNANG_DANGNHAP_DANGKY.PHP "ta tạo 1 session ở bài68_login.php này

}
?>