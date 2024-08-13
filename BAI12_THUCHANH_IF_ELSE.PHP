<!-- người dùng nhập vào tên là gì đó, mình dùng if kiểm tra, nếu đúng thì in ra năm sinh của người đó -->

<?php
$ten = "thuong";
if ($ten == "thuong")
    echo "thương sinh năm 2004";
else if ($ten == "huong")
    echo "hương sinh năm 2004";
else if ($ten == "hung")
    echo "hùng sinh năm 2004";
else
    echo "tên này ko có trong lớp học";

?>