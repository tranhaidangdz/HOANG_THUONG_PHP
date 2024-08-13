<!-- bài 49 ta dùng quyền "a" để viết thêm vào cuối file
hôm nay ta dùng quyền "w" để ghi đè file 
-->
<?php
$myFile = fopen("BAI47.TXT", "w") or die("lỗi");  //cú pháp giống hệt bài 49 nhưng ta thay quyền "a" thành quyền "w"
//quyền "a": cho phép ghi thêm ND vào cuối file
//quyền "w": cho phép ghi thêm ND vào file, nếu có ND cũ thì nó sẽ xóa hết thành file trắng rồi mới thêm ND
fwrite($myFile, "bài 50");

fclose($myFile);
?>