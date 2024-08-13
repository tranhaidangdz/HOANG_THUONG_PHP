<!-- hằng số : là 1 biến nhưng ta ko thay đổi đc gtri của nó 
-cú pháp : define("tenHangSo", "gtri_hangSo",true);  //ta gán true để nó ko phân biệt in hoa hay in thường
-->
<?php
define("ten", "đăng", true);
echo ten;  //dùng echo tenHangSo;  để in gtri của nó (ko cần $ vì đây kp in gtri biến)

define("namSinh", "2004", true);
echo namSinh;
?>