<!-- ta có 2 cách tạo file
c1: chuột phải + new document + viết ND file và tạo dc file .txt
c2: dùng code php 
-->
<?php
$myFile = fopen("newFIle", "w");  //ta để chế độ đọc file là "w" (ghi file), nếu chưa có file tên như thế nó sẽ tạo 1 file mới để ghi
//khi ta chạy file php này nó sẽ tạo 1 file mới

?>