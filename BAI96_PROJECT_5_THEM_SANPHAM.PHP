<!-- ta có thể thêm sản phẩm thủ công vào database xampp, tuy nhiên hôm nay ta sẽ thêm = code php
-->

<?php
include "BAI94_PROJECT_3_KETNOI_DATABASE.PHP";
if (isset($_POST['btn'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    //chỉ lấy gtri tên của hình ảnh , sau đó tạo thành đg dẫn hình ảnh đầy đủ để gửi lên database
    $image = $_FILES['hinhanh']['name'];
    //lấy đg dẫn của bức ảnh trong thư mục máy tính:
    $image_tmp_name = $_FILES['hinhanh']['tmp_name'];

    $price = $_POST['price'];
    $guarantee = $_POST['guarantee'];

    //bắt đầu chèn dữ liệu vào bảng:
    $sql = "INSERT INTO sanpham(id,name,image,price,guarantee)
    VALUE('$id','$name','$image','$price','$guarantee')";

    mysqli_query($conn, $sql);

    //đưa luôn bức ảnh vào thư mục:
    move_uploaded_file($image_tmp_name, 'C:/xampp2/htdocs/HOANG_THUONG_PHP/' . $image);
}

?>

<form action="BAI95_PROJECT_4_HIENTHI_THONGTIN_SANPHAM_P1.PHP" method="post" enctype="multipart/form-data">
    <p>id</p>
    <input type="text" name="id">
    <p>name</p>
    <input type="text" name="name">

    <p>image</p>
    <input type="file" name="hinhanh">
    <!--  ta dùng chế độ upload file lên thư mục để ta tải hình ảnh lên -->

    <p>price</p>
    <input type="text" name="price">

    <p>guarantee</p>
    <input type="text" name="guarantee">
    <br>
    <button id="submit" name="btn">Gửi</button>

</form>