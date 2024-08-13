<!-- ta có thể bấm vào "chèn" trong http://localhost:8080/phpmyadmin/
-sau đó tương ứng với các cột đã tạo ta sẽ thêm vào cột "giá trị" để chèn gtri vào bảng 
-->
<?php
//kết nối database:
include "BAI74_KETNOI_DATABASE.PHP";
/*
-Cú pháp:
$tenBien = "INSERT INTO tenBang(cột1,cột2,cột3...)
                    VALUES (GTRI 1,gtri2,gtri3...),        //mỗi 1 dòng này tương ứng thêm dữ liệu vào 1 dòng trong bảng
                     (GTRI 1,gtri2,gtri3...),  
                     (GTRI 1,gtri2,gtri3...)";
-ta gọi tên bảng muốn thêm dữ liệu ra, truyền vào các gtri tương ứng với các cột có trong bảng, nó sẽ thêm t/ứng cho từng cột
-VD bảng có 4 cột thì ta truyền 4 gtri vào
*/
$themDuLieu = "INSERT INTO thanhvien(id,taikhoan,matkhau,level)
VALUES (7,'hương','1234',1),
 (4,'trang','1234',2),
 (3,'phuong anh','1234',1)";
//bảng thanhvien có 4 cột: id, taikhoan,matkhau,level, ta truyền vào 4 gtri tương ứng
//hoặc ta có thể tạo ra  các biến đc gán gtri, sau đó truyền các biến này vào hàm
$id = "";
$taikhoan = 'đăng';
$matkhau = '123';
$level = 1;
$themDuLieu2 = "INSERT INTO thanhvien(id,taikhoan,matkhau,level)
VALUES ('$id','$taikhoan','$matkhau','$level')";

if (mysqli_query($conn, $themDuLieu)) {  //ta truyền vào biến $conn để kết nối với csdl ; $themdulieu để ktra xem nó có đc thêm vào bảng đó ko
    echo "thêm dữ liệu thành công";
} else
    echo "thêm dữ liệu thất bại";

if (mysqli_query($conn, $themDuLieu2)) {  //ta truyền vào biến $conn để kết nối với csdl ;  $themdulieu để ktra xem nó có đc thêm vào bảng đó ko
    echo "thêm dữ liệu thành công";
} else
    echo "thêm dữ liệu thất bại";
?>