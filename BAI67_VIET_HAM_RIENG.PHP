<!-- từ trc đén giờ ta sd các hàm đã đc xd sẵn trong php, hôm nay ta sẽ tự viết các hàm để giải quyết bài toán nào đó
-cú pháp :
function tenHam(tham số)
{
//câu lệnh
} 
-->
<?php
//VD ta xd 1 hàm để cộng hai số nào đó:
$a = 5;
$b = 10;
function cong($a, $b)
{
    return $a + $b;
}

//goi hàm:
echo cong(10, 10);  //ta truyền vào 2 số thực tế =>kq=20
echo "<br>";

echo cong($a, $b);  //hoặc ta truyền vào 2 biến đã lưu 2 gtri số =>kq=15
echo "<br>";

//sau này ta có thể viết 1 file php chứa các hàm
//1 file php gọi các hàm này để xử lý (khi muốn gọi file php chứa các hàm ta dùng include ("tenFile_đó")

//VD: file bài67.php chứa các hàm giải pt bậc 2
//ta sẽ gộp file đó vào file này và sd hàm đó:
include("BAI67.PHP");  //lúc này coi như hàm giải pt bậc 2 dã đc gộp vào file này và ta có thể gọi để sd nó 

pt_bac2(1, 2, -3);  //ta gọi hàm tính pt bậc 2 và truyền vào 3 tham số 
//có 2 nghiệm : x1=1 , x2=-3
?>