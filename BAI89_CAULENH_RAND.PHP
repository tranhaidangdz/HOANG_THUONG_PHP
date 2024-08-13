<!-- câu lệnh RAND =random => nó sẽ đảo lộn các dòng ngẫu nhiên trong bảng
 VD khi ta vào trang chủ facebook và thấy 1 số bài viết, khi thoát ra và vào lại ta thấy các bài viết cũ đã bị trôi mất và thay = các bài viết mới , đó chính là câu lệnh RAND()
-do đó câu lệnh RAND luôn đi cùng order by để sắp xếp các dòng đc lấy ra ( tuy nhiên ta ko truyền vào asc và desc nữa vì như vậy RAND() sẽ mất tác dụng)
-->
<?php
include "BAI74_KETNOI_DATABASE.PHP";
/*
-cú pháp:
$tenBien = "SELECT * FROM tenBang 
            WHERE tenCot = 'giá trị'
            ORDER BY  RAND()";  
*/
$layDuLieu = "SELECT * FROM thanhvien   
                ORDER BY   RAND()
             ";

$result = mysqli_query($conn, $layDuLieu);  //trả về true và 1 bảng $result nếu lấy dữ liệu thành công

if (mysqli_num_rows($result) > 0) {  //đếm số dòng có trong bảng đó xem có >0(tức là bảng có dữ liệu) ko?
    while ($row = mysqli_fetch_array($result)) {  //dùng while lặp qua từng dòng của kết quả truy vấn;hàm mysqli_fetch_array biến toàn bộ dữ liệu lấy dc từ biến $result và  trả về dưới dạng mảng $row
        echo $row['id'] . "|" . $row['taikhoan'] . "|" . $row['matkhau'] . "|" . $row['level'];
        echo '<br>';
    }
}