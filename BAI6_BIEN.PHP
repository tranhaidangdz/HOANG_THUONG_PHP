<!-- biến: giống như các ngôn ngữ khác biến dùng để lưu trữ dữ liệu
-lưu trữ gtri số, chuỗi, ký tự, ...
-khai báo biến: $tenBien; 
-khởi tạo biến: $tenBien=giá trị;
(khi ta gán gtri gì thì biến sẽ tự động xác định KDL của biến đó luôn, giống với JS)
***quy tác đặt tên biến giống với các ngôn ngữ khác:
-biến ko bắt đầu bằng số
-biến chỉ chứa số, chữ, dấu gạch dưới
VD: $1ten; //sai
$ten*$#^= "dang";  //sai do chứa ký tự đặc biệt 
-->

<?php
$ten = "đăng";  //biến kiểu chuỗi
$namSinh = 1964; //biến kiểu số 

echo "xin chào";
echo $ten;  //cách in ra gtri 1 biến 
echo "$namSinh";  //hoặc ta cho vào nháy kép cũng dc
echo "<br>";
//CÁCH IN RA GTRI 2 BIẾN TRÊN CÙNG 1 DÒNG (DÙNG DẤU CHẤM "." ĐỂ NỐI):
echo "xin chào " . $ten . " bạn sinh năm " . $namSinh;
?>