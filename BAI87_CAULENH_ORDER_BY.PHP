<!-- câu lệnh order by dùng để sắp xếp dữ liệu 1 cột tăng dần theo bảng chữ cái hoặc tăng dần theo giá trị, 
 ta cũng có thể sắp xếp giảm dần theo chữ cái và theo giá trị -->

<?php
include "BAI74_KETNOI_DATABASE.PHP";
/*
-cú pháp:
$tenBien = "SELECT * FROM tenBang 
            WHERE tenCot = 'giá trị'
            ORDER BY tenCot ASC|DESC ";  
*/
$layDuLieu = "SELECT * FROM thanhvien   
                ORDER BY id desc
             ";
//nếu ta để ORDER BY id asc : đây là sx tăng dần ; hoặc ta ko viết asc nó cũng hiểu mặc định là sx tăng dần
//nếu ta để ORDER BY id desc : đây là sx giảm dần 
$result = mysqli_query($conn, $layDuLieu);  //trả về true và 1 bảng $result nếu lấy dữ liệu thành công

if (mysqli_num_rows($result) > 0) {  //đếm số dòng có trong bảng đó xem có >0(tức là bảng có dữ liệu) ko?
    while ($row = mysqli_fetch_array($result)) {  //dùng while lặp qua từng dòng của kết quả truy vấn;hàm mysqli_fetch_array biến toàn bộ dữ liệu lấy dc từ biến $result và  trả về dưới dạng mảng $row
        echo $row['id'] . "|" . $row['taikhoan'] . "|" . $row['matkhau'] . "|" . $row['level'];
        echo '<br>';
    }
}