<!-- ta có 1 form HTML: -->
<form action="BAI38_LAY_DULIEU_FORM.HTML" method="post">
    name: <input type="text" name="name">
    gmail: <input type="text" name="gmail">
    <input type="submit" value="Gửi">
</form>

<!-- code php: -->
<?php
//do bên trên ta dùng method="post" nên dưới này ta phải dùng $_POST để lấy dữ liệu
echo $_POST['name'];  //ta truyền vào gtri của name="name" và name="gmail" vào hàm post
echo "<br>";
echo $_POST['gmail']; //truyền vào tên của thẻ input ta muốn lấy dữ liệu
//khi ta nhấn nút submit, nó sẽ gửi dữ liệu đến bài 38.php,trong file bai38.php nó sẽ in dữ liệu đó ra
?>