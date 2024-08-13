<!-- VÒNG LẶP FOREACH: DÙNG ĐỂ DUYỆT QUA TỪNG PTU TRONG 1 ARRAY(MẢNG)
-để duyệt 1 mảng ta có thể dùng vòng lặp for để duyệt hết mảng, or duyệt 1 nửa mảng
-còn vòng lặp foreach ta chỉ có thể duyệt từ đầu đến cuối mảng thôi
-cú pháp:
foreach($tenMang as $tenBienChay)
{
//câu lệnh
} 
-->

<?php
//mảng trong php:giống JS,  1 mảng php ta có thể chứa nhiều gtri khác nhau (chuỗi, số, biến...)
$ten = array("đăng", "hương", "phương anh", "nhung");
//dùng for để duyệt mảng 
for ($i = 0; $i <= count($ten); $i++) {  //ta cho biến i chạy từ 0-> số ptu có trong mảng và in ra hết
    echo $ten[$i] . "<br>";  //in ra "đăng", "hương", "phương anh", "nhung"
}
//với vòng lặp for ta có thể lựa chọn in ra bao nhiêu ptu:
for ($i = 0; $i <= count($ten) - 2; $i++) {  //ta cho biến i chạy từ 0-> số ptu có trong mảng , bớt đi 2 ptu cuối
    echo $ten[$i] . "<br>";  //"đăng", "hương", "phương anh"
}


//2. VÒNG LẶP FOREACH:
foreach ($ten as $value) {  //ta truyền từng ptu trong mảng "tên" vào biến chạy "value", thông qua từ khóa "as"
    echo $value . "<br>";  //sau đó ta in ra biến chạy value 
}
?>