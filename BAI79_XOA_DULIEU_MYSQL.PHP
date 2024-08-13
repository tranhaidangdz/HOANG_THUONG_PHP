<!-- ta có thể xóa thủ công từng dòng dữ liêu trong bảng: 
 -mở bảng trong csdl
 -tích vào ô vuông bên cạnh dòng dữ liệu
 -nhấn xóa => nó sẽ mất hết 1 dòng đó đi
  -->

<?php
include "BAI74_KETNOI_DATABASE.PHP";
/*
-cú pháp:
$tenBien = "DELETE FROM tenBang 
            WHERE tenCot= giaTri"; 

-nó sẽ xóa đi các dòng trong bảng mà TM 1 điều kiện nào đó, VD cột có id="1" thì nó sẽ xóa dòng đó đi
-nếu ta chỉ để DELETE FROM tenBang mà ko có đk where => nó sẽ xóa toàn bộ bảng 
*/
$xoaDuLieu = "DELETE FROM thanhvien
                WHERE id=4 
                ";
$result = mysqli_query($conn, $xoaDuLieu);  //trả về true nếu lấy dữ liệu thành công
if ($result) {
    echo "xóa thành công";
} else
    echo "xóa ko thành công";
?>