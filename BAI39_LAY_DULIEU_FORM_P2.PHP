<!-- bài 38 ta đã học lấy dữ liệu từ thẻ input có type="text"
-hôm nay ta sẽ lấy dữ liệu đc nhập từ thẻ input có type="radio" (lựa chọn radio)
-->
<!-- ta có 1 form HTML: -->
<form action="BAI38_LAY_DULIEU_FORM.HTML" method="post">
    <input type="radio" name="gioitinh" value="nam">Nam
    <input type="radio" name="gioitinh" value="nu">Nữ
    <input type="submit" value="Gửi">
</form>

<?php
echo $_POST['gioitinh'];  //nó lấy gtri của thẻ input có name ="gioitinh",khi ng dùng tích vào và nhấn gửi, nó sẽ gửi đến bài 39 và in ra 
?>