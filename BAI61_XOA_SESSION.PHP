<?php
session_start();

$_SESSION['name'] = "đăng";
echo $_SESSION['name'];  //ta có 1 session và ta hiển thị gtri của nó ra trang web
/*có 2 cách xóa session:
c1; xóa thủ công: khi ta xem session trên trang web: 
//chuột phải vào session +  clear

c2: dùng hàm unset($_SESSION['tenSession']) để xóa 
*/
unset($_SESSION['name']);  //ta muốn xóa session có tên ="name" 
//xóa tất cả các session của trang web:
session_destroy();