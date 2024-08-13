<!-- 
CÁC LOẠI TOÁN TỬ TRONG PHP:
-toán tử số học
-toán tử gán
-toán tử so sánh
-toán tử tăng giảm
-toán tử logic
-toán tử chuỗi
-toán tử mảng
-toán tử gán có điều kiện
-->

<?php
//1. toán tử số học: các phép toán cộng , trừ nhân chia, chia dư
$a = 5;
$b = 10;
echo ($a + $b);
echo "<br>";

echo ($a - $b);
echo "<br>";

echo ($a * $b);
echo "<br>";

echo ($a / $b);
echo "<br>";

echo ($a % $b);
echo "<br>";
//2. toán tử gán: chính là dấu bằng "=" (dùng để gán gtri kq tính toán cho 1 biến)
$c = 10;
$b = 10;
$kq = $c * $b; //ta gán kq phép nhân này cho biến kq
echo $kq;
//ngoài ra còn 1 số phép gán rút gọn:
$c += $d; //tương đương $c = $c+$d
$c -= $d; //tương đương $c = $c-$d
$c *= $d; //tương đương $c = $c*$d
$c /= $d; //tương đương $c = $c/$d

//3. TOÁN TỬ SO SÁNH: ta dùng 2 dấu bằng "==":
$a1 = 5;
$a2 = 5;
if ($a == $b)
    echo "đúng";
else
    echo "sai";
//ngoài ra ta có thể so sánh >,<,>=,<=  , !=(khác)
//TA có thể dùng 3 dấu bằng "===" : giống như JS, 3 dấu bằng vừa ss gtri biến vừa ss KDl
//VD: ta so sánh chuỗi 1 và so sánh số 1:
$e = 1;
$f = "1";
if ($e == $f)  //do nó chỉ ss gtri nên chuỗi "1" và số 1 là giống nhau
    echo "đúng <br>";
else
    echo "sai <br>";

//so sánh "===":
if ($e == $f)  //do nó ss gtri và KDL nên chuỗi "1" và số 1 là khác nhau
    echo "đúng <br>";
else
    echo "sai <br>";  //kq: sai


//4. TOÁN TỬ TĂNG GIẢN:++, --
/*có 2 TH: tăng trước tăng sau, giảm trước giảm sau
++a  :tăng gtri biến a rồi mới thực hiện tính toán
--a  :giảm gtri biến a rồi mới thực hiện tính toán

a++  : thực hiện tính toán rồi mới tăng gtri biến a 
a--  : thực hiện tính toán rồi mới giảm gtri biến a 
*/
//VD: 
$a = 10;
$b = 20;
$bieuThuc = (++$a - 4) + ($b-- + 10);
//đầu tiên nó tăng biến a lên 1 =>a=11
//sau đó tính (++$a-4) = 11-4=7
//($b--+10)=20+10= 30
//7+30=37
//sau khi tính toán xong nó mới giảm biến b-- = 19

?>