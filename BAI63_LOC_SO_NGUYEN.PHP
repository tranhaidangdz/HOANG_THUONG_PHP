<!-- bài 62 ta đã học lọc dữ liệu dạng chuỗi
-bài này ta lọc dữ liệu, ktra xem nó có phải số nguyên ko 
-cú pháp:
filter_var($tenBien, FILTER_VALIDATE_INT);
-->
<?php
$soNguyen = 1234.5;
if (filter_var($soNguyen, FILTER_VALIDATE_INT)) {  //HÀM filter_var sẽ lọc gtri biến đó, ktra xem có phải dạng số nguyên ko?
    echo "đây là số nguyên";
} else
    echo "ko phải số nguyên";
?>