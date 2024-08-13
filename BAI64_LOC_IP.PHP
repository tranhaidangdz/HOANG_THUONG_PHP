<!-- hôm nay ta học về lọc dữ liệu dạng IP
 IP: địa chỉ mạng của máy tính (nơi đặt cục wifi mà máy tính bắt)
 Ip có dạng 192.168.2.2.2
 -->
<?php
$IP = "192.168.1.1";  //IP đc viết trong cặp ngoặc kép "" giống như chuỗi
//ktra biến này có phải 1 ip ko
if (filter_var($IP, FILTER_VALIDATE_IP)) {  //ta chỉ thay đuôi int thành "IP" thôi
    echo "đây là 1 ip";
} else
    echo "đây kp  là ip";
?>