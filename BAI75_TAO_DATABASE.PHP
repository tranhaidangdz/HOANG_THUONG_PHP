<!-- BÀI 73 TA tạo csdl trực tiếp trên server localhost, hôm nay ta sẽ tạo database = code php
  -->
<?php
//kết nối database: chính là bài 74 ta đã kết nối với database "csdl_của_toi"
include "BAI74_KETNOI_DATABASE.PHP";

//tạo csdl : $tenBien = "CREATE DATABASE tenCSDL";
$SQL = "CREATE DATABASE cosodulieu";
//Muốn nó thực hiện lệnh tạo CSDL ta phải mở :
//thực hiện truy vấn đến csdl vừa tạo:
if (mysqli_query($conn, $SQL)) {  //ta truyền 2 biến vào hàm mysqli_query : biến $conn để kết nối với database "web_cua_toi";  biến $sql để tạo database mới
  echo "tạo database thành công";
} else
  echo "tạo database thất bại ";
?>

<!-- khi ta mở file php này, lệnh sẽ dc chạy và tạo ra 1 csdl mới, ta vào "http://localhost:8080/phpmyadmin/" để ktra -->