<!-- ta đã từng học đăng nhập đăng ký nhưng đấy là dữ liệu có sẵn, còn bây giờ ta tạo trang đăng nhập, khi nhập vào dữ liệu
-nó sẽ ss với dữ liệu có trong CSDL , nếu giống nhau thì mới cho đăng nhập 
-->

<?php
include "BAI74_KETNOI_DATABASE.PHP";
session_start();
//khi ng dùng vào trang đăng nhập ta ktra session đã tồn tại chưa,nếu có rồi tức là ng dùng đã đăng nhập => chuyển sang trang admin luôn
if (isset($_SESSION['mySession'])) {
    header('location: BAI103_PROJECT_12_TRANG_DANGNHAP.php');
}
if (isset($_POST['dangnhap'])) {
    // ta tạo ra 2 biến lưu gtri tài khoản, mật khẩu đc nhập từ bàn phím
    $username = $_POST['username'];
    $password = $_POST['password'];

    // sau đó ta tìm trong csdl, bảng thanhvien, tìm trong cột taikhoan,matkhau có gtri nào giống gtri user,password mà ta nhập vào ko
    //nếu tìm thấy trong csdl => ta nhập đúng, nếu ko thì ta nhập sai 
    $sql = "SELECT * FROM thanhvien
        where taikhoan='$username' and matkhau='$password'";

    $result = mysqli_query($conn, $sql);  //trả về bảng kết quả từ câu lệnh select ở trên


    if (mysqli_num_rows($result) == 1) {  //ktra nếu tìm thấy 1 dòng trong bảng kq(tức là tìm thấy taikhoan,matkhau ng dùng nhập)

        header("location: bai104_project_13_hoanthien_dangnhap.php");
        // tuy nhiên nếu ng dùng vào luôn trang admin khi chưa đăng nhập thì vẫn vào đc 
        //ta phải tạo 1 session trong file đăng nhập này, khi đăng nhập thành công nó sẽ tạo 1 session và chuyển sang trang admin
        //ở trang admin nó sẽ kiểm tra xem session đó đã tồn tại chưa, nếu chưa tức là chưa đăng nhập ta phải quay lại trang này 
        $_SESSION['mySession'] = $username;
    } else {
        echo "kết nối thất bại";
    }
}
?>

<!-- ta tạo 1 form để ng dùng nhập mật khẩu và tai khoản sau đó có nút đăng nhập để gửi dữ liệu : -->
<form action="BAI103_PROJECT_12_TRANG_DANGNHAP.PHP" method="post">
    username: <input type="text" name="username">
    password: <input type="text" name="password">
    <button type="submit" name="dangnhap">đăng nhập</button>
</form>