<!-- ta sẽ học sâu hơn về câu lệnh in ra màn hình "echo"
-ta có thể dùng để in gtri biến, hàng số, chuỗi... 
-->

<?php
//in ra 1 chuỗi :
echo "tôi tên là <h1>Đăng</h1>";
echo "<br>";  //in ra thẻ br dể ngắt xuống dòng
//in ra 1 biến:
$name = "đăng";
$tuoi = 19;
echo "$name" . "$tuoi";
echo "<br>";

//in ra 1 chuỗi và gtri biến cùng 1 dòng (dùng dấu . để nối 2 vế):
echo "xin chào " . $name . " bạn " . $tuoi . " tuổi";
?>