<!-- hôm nay ta sẽ dùng vòng lặp for để duyệt các ptu có trong array, ta có thể lựa chọn thay đổi gtri 
 or in ra các  ptu đó -->
<?php
$name = array("đăng", "nhung", "hương");
//c1: dùng vòng for:
for ($i = 0; $i <= count($name); $i++) {  //nó chạy từ ptu 0-> ptu cuối cùng trong  mảng và in ra 
    echo $name[$i] . "<br>";
}
?>