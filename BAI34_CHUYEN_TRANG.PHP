<!-- ta muốn chuyển từ trang php này sang trang php khác
-như HTML là ta truyền đg dẫn file .html là nó sẽ nhảy sang 
nếu ta truyền đg dẫn ntn: nó sẽ nhảy sang file "bài 33..."
http://localhost:8080/HOANG_THUONG_PHP/BAI33_ARRAY_SANG_STRING.PHP
nếu ta truyền đg dẫn ntn: nó sẽ nhảy sang file index.php (do ko có dg dẫn cụ thể thì nó luôn ưu tiên file index đầu tiên)
http://localhost:8080/HOANG_THUONG_PHP

-->
<?php
//ta dùng hàm header('location:đg dẫn muốn chuyển trang');
header('location:http://localhost:8080/HOANG_THUONG_PHP/BAI33_ARRAY_SANG_STRING.PHP');  //KHI ta mở file bài 34 này, nó thấy lệnh chuyển trang => nó chuyển sang bài 33 luôn
?>