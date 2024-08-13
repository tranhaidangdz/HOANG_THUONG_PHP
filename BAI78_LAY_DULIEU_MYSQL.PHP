<!-- bài 77 ta đã chèn dữ liệu vào 1 bảng trong csdl . hôm nay ta sẽ lấy dữ liệu từ 1 bảng nào đó trong csdl 
-muốn lấy dữ liệu từ toàn bộ bảng => ta dùng lệnh select * giống như mysql 
-->

<?php
include "BAI74_KETNOI_DATABASE.PHP";
/*
-cú pháp:
$tenBien = "SELECT * FROM tenBang ";  
*/
$layDuLieu = "SELECT * FROM thanhvien";
$result = mysqli_query($conn, $layDuLieu);  //trả về true nếu lấy dữ liệu thành công

if (mysqli_num_rows($result) > 0) {  //đếm số dòng có trong bảng đó xem có >0(tức là bảng có dữ liệu) ko?
    while ($row = mysqli_fetch_array($result)) {  //dùng while lặp qua từng dòng của kết quả truy vấn;lấy từng dòng của kết quả truy vấn và trả về dưới dạng mảng liên kết (associative array) hoặc mảng chỉ số (numeric array).
        echo $row['id'] . "|" . $row['taikhoan'] . "|" . $row['matkhau'] . "|" . $row['level'];  //là các cột trong bảng cơ sở dữ liệu. Mỗi lần lặp, nó sẽ xuất giá trị của các cột này, ngăn cách bằng dấu |
        echo '<br>';
    }
}
?>