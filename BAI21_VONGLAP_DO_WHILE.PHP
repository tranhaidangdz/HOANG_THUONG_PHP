<!-- cú pháp:
do {
//câu lệnh
} while(đk);

//đầu tiên nó thực hiện câu lệnh trong do
//sau đó mới ktra đk trong while, nếu đúng thì lại quay lại do thực hiện câu lệnh,nếu sai thì dừng
==> nếu dùng do-while thì ít nhất câu lệnh đã đc thực hiện 1 lần
-->

<?php
$i = 1;
do {
    echo $i;  //in ra biến i =1
    $i++;  //tăng biến i++ = 2
} while ($i > 10); //đk sai,do 2<10 , dùng ctrinh; tuy nhiên ta đã kịp in ra gtri i=1 rồi

?>