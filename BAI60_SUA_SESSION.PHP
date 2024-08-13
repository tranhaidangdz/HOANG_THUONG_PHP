<?php
//session: khi ta đăng nhập tài khoản youtube chẳng hạn. khi ta thoát ra và vào lại trang đó => tài khoản mặc định đã đc lưu
//session sẽ lưu lại các thông tin đăng nhập của ng dùng để ta truy cập vào trang web nhanh hơn 

//khởi tạo session:
session_start();
//bắt đầu tạo session: ta dùng hàm $SESSION['tenSession'] = "gtri"
//$_SESSION['name'] = "đăng";  //ta tạo 1 session "name" có gtri "đăng"

//3. SỬA SESSION: ta sửa tên và gtri session trực tiếp trong code php luôn (giống như sửa cookie):
// $_SESSION['name'] = "đăng";
$_SESSION['name'] = "nhung"; //ta đã sửa gtri session
$_SESSION['hoTen'] = "nhung"; //ta đã sửa tên session