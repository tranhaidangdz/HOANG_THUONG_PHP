<!-- khi ta nhập dữ liệu, VD đăng nhập đăng ký, ta sẽ có các đk ktra dữ liệu nhập vào đó
//1. lọc chuỗi: ktra dữ liệu nhập vào có phải dạng chuỗi hay ko 
-->
<?php
$name = "trần hải đăng";
//1. LỌC CHUỖI: SD HÀM filter_var($tenBien,FILTER_SANITIZE_STRING);
filter_var($locChuoi, FILTER_SANITIZE_STRING);
echo $locChuoi;  //in ra chuỗi sau khi đc lọc
?>