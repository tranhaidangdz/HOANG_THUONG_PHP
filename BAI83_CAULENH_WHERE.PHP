<!-- ta sẽ lấy dữ liệu từ 1 bảng TM đk nào đó
-thay vì dùng select * from tenBang để lấy ra toàn bộ dữ liệu từ bảng
- ta dùng where để đặt đk cho 1 số dòng TM đk thì ta mới đc lấy dữ liệu 
-->

<?php
include "BAI74_KETNOI_DATABASE.PHP";
/*
-cú pháp:
$tenBien = "SELECT * FROM tenBang 
            WHERE tenCot = 'giá trị' ";  
*/
$layDuLieu = "SELECT * FROM thanhvien 
            WHERE id=8";  //nó chỉ lấy dữ liệu có id=4 thôi
$result = mysqli_query($conn, $layDuLieu);  //trả về true và 1 bảng $result nếu lấy dữ liệu thành công

if (mysqli_num_rows($result) > 0) {  //đếm số dòng có trong bảng đó xem có >0(tức là bảng có dữ liệu) ko?
    while ($row = mysqli_fetch_array($result)) {  //dùng while lặp qua từng dòng của kết quả truy vấn;hàm mysqli_fetch_array biến toàn bộ dữ liệu lấy dc từ biến $result và  trả về dưới dạng mảng $row
        echo $row['id'] . "|" . $row['taikhoan'] . "|" . $row['matkhau'] . "|" . $row['level'];
        echo '<br>';
    }
}
?>