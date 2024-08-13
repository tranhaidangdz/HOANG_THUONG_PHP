<!-- hàm isset() :dùng để ktra 1 biến có tồn tại trong ctrinh ko?
 -cú pháp: isset($tenBien);
 -nếu biến có tồn tại nó trả về true, nếu ko trả về false
-->

<?php
//ta có 1 biến a:
$a = 10;
if (isset($a))  //hàm isset($tenBien) thường đc dùng như 1 biểu thức đk trong lệnh if-else
    echo "biến a tồn tại";
else
    echo " biến a ko tồn tại";

//nếu ta ko có biến $b mà ktra biến b có tồn tại ko
if (isset($b))   //biểu thức này SAI
    echo "biến b tồn tại";
else
    echo " biến b ko tồn tại";  //=> trả về ko tồn tại
?>

<!-- hàm isset thường dùng ktra dữ liệu có tồn tại ko, VD khi người dùng nhập vào tìm kiếm gì đó, nó sẽ ktra xem trong input đầu 
 vào đã có dữ liệu chưa (ktra người dùng có nhập gì chưa)
-->