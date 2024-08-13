<!-- lọc đg dẫn , đường link, VD 1 đg dẫn hợp lệ phải có đuôi ".com" -->
<?php
$URL = "trandang *&^    211@gmail.com";  //VD: ban đầu url còn chứa dấu cách và ký tự đặc biệt=> chưa hợp lệ, ta dùng hàm FILTER_SANITIZE_URL để loại bỏ các ký tự thừa đó
$URL_sau_khi_loc = filter_var($URL, FILTER_SANITIZE_URL);
echo "chuỗi sau khi làm sạch: " . $URL_sau_khi_loc . "<BR>";
/*
FILTER_SANITIZE_URL được dùng để làm sạch chuỗi và loại bỏ các ký tự không hợp lệ(dấu cách, ký tự #$%&...) trong URL rồi mới tiên hành lọc URL.
FILTER_VALIDATE_URL được dùng để kiểm tra tính hợp lệ của một địa chỉ URL.
*/
if (filter_var($URL_sau_khi_loc, FILTER_VALIDATE_URL)) {
    echo "URL hợp lệ";
} else
    echo "URL ko hợp lệ";
?>