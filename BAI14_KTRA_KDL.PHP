<!-- hôm nay ta học kiểm tra KDL của biến trong php
-giống như JS, biến trong php sẽ tự mang kdl theo gtri nó đc nhận
-trong js ta dùng typeof();  còn php ta sd hàm var_dump($tenBien) 
-->

<?php
$ten = "dang";  //gtri chuỗi
$tuoi = 19;  //gtri số nguyên
$tien = 200.5;  //gtri số thực
$A;  //nếu ta khai báo mà ko gán gtri biến A
//khi ktra sẽ báo lỗi do nó ko thể xác định gtri biến là gì 

//ta sẽ nhận dc kdl tương ứng : var_dump($tenBien);
echo var_dump($ten);  //string
echo var_dump($tuoi); //int
echo var_dump($tien); //float
echo var_dump($A); //lỗi 
?>