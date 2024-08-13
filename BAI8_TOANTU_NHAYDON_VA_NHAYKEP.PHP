<!-- phân biệt toán tử nháy đơn '' và nháy kép "" 
'': dùng để in 1 chuỗi ra trang web 
"": dùng để in 1 chuỗi or 1 gtri biến ra trang web  => ta thường dùng nháy kép hơn
-->

<?php
//ta có 1 biến:
$name = "đăng";
//in ra gtri biến đó:
echo "$name"; //nó vẫn coi đây là 1 biến để in ra gtri
echo '$name'; //nó coi đây là 1 chuỗi và in ra '$name'

//=> nháy đơn sẽ dùng để in ra 1 chuỗi, còn nháy kép ta có thể in 1 gtri biến or 1 chuỗi đều đc 
?>