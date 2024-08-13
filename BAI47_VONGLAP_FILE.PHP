<!-- 
-bài 46 ta đã học hàm fgets để đọc 1 dòng trong file 
ta sẽ dùng vòng lặp for + hàm fgets để đọc từng dòng cho đến hết file -->

<?php
$myFile = fopen("BAI46.TXT", "r") or die("lỗi");  //mở file

while (!feof($myFile)) { //Hàm feof trong PHP được sử dụng để kiểm tra xem con trỏ tập tin đã ở cuối tập tin hay chưa.
    // !feof($myFile): ktra nếu chưa đến cuối tập tin thì ta đọc tiếp
    echo fgets($myFile) . "<br>";  //in ra từng dòng cùa file
}
fclose($myFile);  //đóng file

?>