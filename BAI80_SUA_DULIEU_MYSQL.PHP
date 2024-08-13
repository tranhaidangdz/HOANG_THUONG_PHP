<!-- ta cũng có thể sửa dữ liêu thủ công:
-vào csdl, chọn bảng muốn sửa
-bấm nút "sửa' có hình cây bút chì
-thay gtri mới vào các ô gtri muốn sửa 
-->

<?php
include "BAI74_KETNOI_DATABASE.PHP";
/*
-cú pháp:
$tenBien = "UPDATE  tenBang
            SET tenCot1= gtri1, tenCot2=gtri2, ...
            WHERE tenCot= giaTri"; 

- nó sẽ set gtri cho các cột thỏa mãn 1 đk nào đó 
*/
//ta có 1 số biến lưu gtri mới để thay thế cho các gtri cũ:
$id = 8;
$taikhoan = "phuonganh";
$matkhau = "2222";
$level = 2;

$suaDuLieu = "UPDATE thanhvien
                SET id='$id',taikhoan='$taikhoan',matkhau='$matkhau',level='$level'
                WHERE id=3";

$result = mysqli_query($conn, $suaDuLieu);  //trả về true nếu sửa dữ liệu thành công
if ($result) {
    echo "sửa thành công";
} else
    echo "sửa ko thành công";
?>