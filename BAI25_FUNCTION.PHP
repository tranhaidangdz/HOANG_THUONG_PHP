<!--FUNCTION: hàm số
-đc dùng để giải quyết 1 công việc cụ thể nào đó
-function sẽ gồm các chức năng cụ thể do chính ng dùng xd
VD 1 số hàm đc php xd sẵn: 
isset()  :ktra biến có tồn tại ko
empty() :ktra mảng có rỗng ko

-còn nếu ta muốn tự xd 1 hàm để giải quyết 1 bài toán nào đó, đó chính là function do ng dùng tự định nghĩa:
-cú pháp:

function tenHam(tham số)
{
//câu lệnh
}
-->

<?php
//1. Function ko có tham số: hàm này chỉ có tác dụng in ra câu "xin chào khi ta gọi hàm
function chao()
{
    echo "xin chào <br>";
}
//gọi hàm:
chao();

//2.Function có đối số: ta sẽ truyền 1 biến vào hàm

function hello($ten)  //nó sẽ lấy gtri biến tên vào hàm này,sau đó hiển thị "xin chào đăng"
{
    echo "xin chào " . $ten;
}
hello("đăng");  //khi gọi hàm ta truyền vào gtri cho biến $ten
hello("phương anh");
hello("nhung");

//3. truyền nhiều tham số vào hàm: các tham số cách nhau bởi dấu phẩy ","
function xinChao($ten, $namSinh, $tuoi)
{
    echo "<br>" . "xin chào $ten, bạn sinh năm $namSinh, năm nay bạn $tuoi tuổi";
}
xinChao("đăng", 2005, 19);
xinChao("nhung", 2004, 20);

//4. hàm có trả về gtri (có return gtri):
//VD hàm tính tổng 2 số, ta truyền vào hàm 2 số a,b, sau đó trả về kq tổng
function tong($a, $b)
{
    $tong = $a + $b;
    return $tong; //trả về tổng
}
echo tong(4, 5);  //nó tính tổng 4+5=9
//ta có thể ép kiểu KDL cho các tham số truyền vào, tức là ng dùng chỉ có thể truyèn tham số kiểu int
function tong2(int $a, int $b)
{
    $tong = $a + $b;
    return $tong; //trả về tổng
}
echo tong2(4, 5);  //nó tính tổng 4+5=9
?>