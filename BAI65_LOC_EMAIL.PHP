<!-- giống như các bài lọc số nguyên,lọc IP, lọc gmail...
-ta gõ "FILTER_VALIDATE_" rồi CTRL+ dấu cách
=> nó sẽ gợi ý các hàm dùng để lọc dữ liệu 
-->
<?php
//ta gõ "FILTER_VALIDATE_" rồi CTRL + dấu cách để nó gợi ý
// FILTER_VALIDATE_IP:LỌC ip
// FILTER_VALIDATE_INT:LỌC số nguyên
// FILTER_VALIDATE_URL:LỌC đg dẫn 
// FILTER_VALIDATE_BOOL:LỌC đúng sai
// FILTER_VALIDATE_EMAIL:LỌC email
// FILTER_VALIDATE_DOMAIN:LỌC tên miền
$gmail = "trandang   &^^  211@gmail.com";
$gmail_sau_khi_loc = filter_var($gmail, FILTER_SANITIZE_EMAIL);
echo "chuỗi sau khi làm sạch: " . $gmail_sau_khi_loc . "<BR>";

/*
FILTER_SANITIZE_EMAIL được dùng để làm sạch chuỗi và loại bỏ các ký tự không hợp lệ(dấu cách, ký tự #$%&...) rồi mới tiên hành lọc email.
FILTER_VALIDATE_EMAIL được dùng để kiểm tra tính hợp lệ của một địa chỉ email.
*/
if (filter_var($gmail_sau_khi_loc, FILTER_VALIDATE_EMAIL)) {
    echo "email hợp lệ";
} else
    echo "email ko hợp lệ";
?>