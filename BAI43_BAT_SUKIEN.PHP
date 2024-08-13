<!-- ta sẽ bắt các sự kiện khi ng dùng nhấn nút gửi -->

<?php
//cách bắt sự kiện ktra ng dùng đã ấn gửi chưa?
if (isset($_POST["btn"])) {  //nó ktra nút btn có dc gửi đến bài 42 ko(tức là ktra ng dùng đã nhấn nút gửi chưa), bài trc ta dùng $_SERVER["REQUEST_METHOD"] == "post" để ktra xem server đã nhận dc phương thức post chưa 
    echo "hello";            //bài này ta dùng hàm isset để ktra sự tồn tại của nút "btn"
}

?>

<form action="BAI42_CHUCNANG_TIMKIEM.PHP" method="post">
    tên: <input type="text" name="name">
    <input type="submit" value="gửi" name="btn">
</form>