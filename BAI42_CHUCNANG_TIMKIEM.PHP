<!-- hôm nay ta sẽ làm chức năng tìm kiếm trên trang web
-khi ta nhập 1 từ gì đó để tìm kiếm,VD tìm kiếm sản phẩm, tìm kiếm thông tin ... 
-->

<?php
//bắt sự kiện
if ($_SERVER["REQUEST_METHOD"] == "post") //nó ktra phương thức yêu cầu từ phía server có phải phương thức post ko 
//  (tức là ktra ng dùng đã ấn nút submit chưa, tại vì khi nhấn thì phương thức post trong thẻ form đc hiểu là đã gửi )
{
    $name = $_POST['name'];  //nếu ng dùng có nhập thì ta lưu gtri vừa nhập đó
    //ta sẽ ktra các tên dc nhập xem tên đó rơi vào TH nào để ta thông báo ra:
    if ($name == "dang") {
        echo "đăng sinh năm 2004 đang học lập trình";
    } else if ($name == "nhung") {
        echo "nhung sinh năm 2002 đang học kế toán";
    } else if ($name == "huong") {
        echo "huong sinh năm 2004 đang học marketing";
    } else {
        echo "không tìm thấy tên vùa nhập";
    }
}
?>

<form action="BAI42_CHUCNANG_TIMKIEM.PHP" method="post">
    tên: <input type="text" name="name">
    <input type="submit">
</form>