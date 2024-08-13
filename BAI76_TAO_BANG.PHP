<!-- BÀI 75 TA tạo bảng trực tiếp trên server localhost, hôm nay ta sẽ tạo database = code php
  -->
<?php
//kết nối database: chính là bài 74 ta đã kết nối với database "cosodulieu"
include "BAI74_KETNOI_DATABASE.PHP";

/*tạo bảng : $tenBien = "CREATE TABLE tenBảng(
                        tenCot1  kdl(số lg ký tự),                           
                        tenCot2  kdl(số lg ký tự),                           
                        tenCot3  kdl(số lg ký tự)                           
)";
*/
$taoBang = "CREATE TABLE thanhvien(
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
taikhoan varchar(20) not null,
matkhau varchar(20) not null,  
level int(2) 
)";
/*
-- UNSIGNED:ko nhận gtri âm;  AUTO_INCREMENT:tự động đánh số tăng dần từ 1,2,3.. ; primary key: ta đặt id làm khóa chính
--ta để not null để ko đc phép bỏ trống 
--cột level sẽ có tác dụng: khi ở level 1 nó chỉ có quyền xem nhưng ko đc thay đổi, level 2 thì dc thay đổi dữ liệu chẳng hạn 
*/
//thực hiện truy vấn đến Bảng vừa tạo:
if ($conn->query($taoBang) == TRUE) {  //ta gọi biến $conn để kết nối với database, sau đó gọi "query($taoBang)" để tạo 1 bảng mới 
  echo "tạo bảng thành công";
} else
  echo "tạo bảng thất bại ";
?>

<!-- khi ta mở file php này, lệnh sẽ dc chạy và tạo ra 1 Bảng mới, ta vào "http://localhost:8080/phpmyadmin/" để ktra -->