<!-- độ nhạy cảm trong php: kiểu như phân biệt hoa thường thôi
-các ngôn ngữ khác thì cú pháp có phân biệt hoa thường
-php giống với SQL, tức là cú pháp in hoa hay in thường ko quan trọng 
-->

<?php
echo "xin chào";  //3 lệnh này đều như nhau, tuy nhiên ta thường sd viết thường hơn
echo "xin chào";
echo "xin chào";

//với cú pháp php thì ko phân biệt hoa thường, nhưng nếu là biến thì vẫn phân biệt hoa-thường (quy tắc đặt tên biến):
$bien = 5;  //3 biến này là khác nhau (dù chỉ khác 1 chữ cái)
$BIEN = 5;
$bIEn = 5;

?>