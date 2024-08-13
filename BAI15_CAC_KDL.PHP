<!-- 8 kdl TRONG PHP:
 string:kiểu chuỗi (gồm chữ , số, ký tự)
 int: kiểu số nguyên
 float: kiểu số thực
 boolean:kiểu luận lý true,false
 array: kiểu mảng
 object: kdl đối tg
 null: kdl rỗng
 resource:
-->

<?php
//1.KDL string: cho gtri vào 2 nháy kép:
$a = "xin chào";
echo var_dump($a);

//2.KDL int: số nguyên
$b = 123;
echo var_dump($b);

//3.KDL float :số thực (số có phần lẻ, phần thập phân)
$c = 123.5;
echo var_dump($c);

//4.kdl boolean: có 2 gtri true, false:
$d = true;
echo var_dump($d);

//array và object ta học sau
//5.kdl null: 
$e;
echo var_dump($e);  //null (nếu ta chưa gán gtri gì cho bién thì nó ko xác định đc kdl và biến có kdl=null)

//6. resource: ko phải 1 kdl thực tế mà là 1 nơi lưu trữ 1 tài liệu tham khảo đến function và tài nguyên ở bên ngoài php

?>