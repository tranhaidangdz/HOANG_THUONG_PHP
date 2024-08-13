<!-- ghi ND vào file cũng có 2 cách:
c1: mở file .txt và sửa ND mới or ghi thêm ND
c2: dùng hàm fopen("BAI46.TXT","a") , quyền "a" cho phép viết thêm vào cuối file
-hàm fwrite(tenBien_mở_file, "ND muốn ghi thêm");
-->
<?php
$myFile = fopen("BAI46.TXT", "a") or die("lỗi");

fwrite($myFile, "nội dung này đc thêm vào file");

fclose($myFile); //hàm đóng file: fclose(tenBien_mở_file);
?>