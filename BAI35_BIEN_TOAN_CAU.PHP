<!-- biến toàn cục:
 -có 3 loại biến toàn cầu:
  $GLOBALS
  $_POST
  $_GET
-->
<?php
//ta có 1 biến:
$a = 10;
$b = 5;
function ham()
{
  // echo $a;  //nếu ta gọi biến a ntn nó sẽ lỗi, do biến a ko có trong phạm vi của hàm
  //ta sd từ khóa $GLOBALS( để các biến có phạm vi toàn cầu ),có thể truy cập ở bất cứ đâu trong ctrinh
  //cú pháp:  $GLOBALS['tenBien'];
  echo $GLOBALS['a'];
  //nếu ta thực hiện phép cộng:
  $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
echo $GLOBALS['c'];  //do ta gọi biến c từ ngoài hàm nên ta cũng cần từ khóa globals để truy cập

?>
<!-- 2. $_POST , $_GET:  đều dùng để nhận dữ liệu từ form HTML  -->

<!-- ta có 1 form HTML: -->
<form action="BAI35_BIEN_TOAN_CAU.PHP" method="post">
    <!-- action="bài 35..." : đây là tên file php mà ta muốn gửi dữ liệu đến
       method="post": đây là phương thức dùng để nhận dữ liệu (ở đây là $POST)
    -->
    <input type="text" name="dulieu">
    <input type="submit">
</form>

<?php
//ta dùng $_POST để lấy dữ liệu
//cú pháp: $_POST['name'];  
//"name" chính là tên của thẻ input đc nhập dữ liệu
echo $_POST['dulieu'];  //ta lấy dữ liệu từ thẻ input có name="dulieu" và in ra

?>

<!-- 3. $_GET: cũng giống hệt như $_POST -->
<!-- ta có 1 form HTML: -->
<form action="BAI35_BIEN_TOAN_CAU.PHP" method="get">
    <!-- action="bài 35..." : đây là tên file php mà ta muốn gửi dữ liệu đến
       method="get": đây là phương thức dùng để nhận dữ liệu (ở đây là $get)
    -->
    <input type="text" name="dulieu">
    <input type="submit">
</form>

<?php
//ta dùng $_GET để lấy dữ liệu (nếu ta đặt method="get" thì khi lấy dữ liệu ta phải dùng $_GET để lấy)
//cú pháp: $_GET['name'];   
//"name" chính là tên của thẻ input đc nhập dữ liệu
echo $_GET['dulieu'];  //ta lấy dữ liệu từ thẻ input có name="dulieu" và in ra

?>

<!-- ĐIỂM KHÁC NHAU GIỮA POST VÀ GET:
$_GET: khi nhận dữ liệu và nhấn gửi, ta sẽ thấy gtri đã nhập trên đg dẫn trình duyệt luôn
http://localhost:8080/HOANG_THUONG_PHP/BAI35_BIEN_TOAN_CAU.PHP?dulieu=DANG  //ta nhập chữ DANG và ta thấy gtri của nam="dulieu" chính là DANG
                                                      
$_POST: khi dùng post để lấy dữ liệu và nhấn gửi(submit) thì trên đg dẫn url của trình duyệt nó ko hiển thị dữ liệu
-khi làm form đăng nhập , đki thường ta sd $_POST hơn
-->

<!-- 4. $_REQUEST: CŨNG dùng để lấy dữ liệu như post, get -->
<form action="BAI35_BIEN_TOAN_CAU.PHP" method="get">

    <input type="text" name="dulieu">
    <input type="submit">
</form>

<?php
//ta dùng $_POST để lấy dữ liệu (nếu ta đặt method="POST" thì khi lấy dữ liệu ta phải dùng $_POST để lấy)
//ta dùng $_GET để lấy dữ liệu (nếu ta đặt method="get" thì khi lấy dữ liệu ta phải dùng $_GET để lấy)

//tuy nhiên, ta có thể dùng $_REQUEST để lấy dữ liệu mặc kệ method ta đặt là "post" hay "get"
//cú pháp: $_REQUEST['name'];   
//"name" chính là tên của thẻ input đc nhập dữ liệu

echo $_REQUEST['dulieu'];  //ta lấy dữ liệu từ thẻ input có name="dulieu" và in ra
//mặc dù method="get" nhưng ta dùng $_request để lấy cũng dc
//giống như post, request sẽ ko hiển thị gtri đã nhận lên đg dẫn trình duyệt
?>