<!-- upload file: cho phép ng dùng tải hình ảnh  lên trang web
-UPLOAD file cơ bản: nó chỉ hiện thông số(tên, kích thước...) lên trang web chứ ta ko nhìn thấy ảnh
-upload lên thư mục: nó vừa hiện hình ảnh trên trang web và đưa luôn hình ảnh vào thư mục ta chỉ định 
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="BAI51_UPLOAD_FILE_COBAN.PHP" method="post" enctype="multipart/form-data">
        <input type="file" name="hinhanh" value="chọn tệp">
        <!-- ta để kiểu type="file" để có thể tải ảnh từ input
        name="hinhanh": ta sẽ lấy bức ảnh này qua tên của thẻ input này ="name"
        value="chọn tệp": tên ta đăt cho thẻ input này 
        ***LƯU Ý: ĐỂ có thể gửi ảnh đến file bai51.php ta phải thêm: enctype="multipart/form-data" vào thẻ form
        -->
        <input type="submit" name="btn" value="gửi">
    </form>
</body>

</html>

<?php
// khi ta chọn hình ảnh và ấn gửi, ảnh đó đã đc gửi đến file bài 51.php
$a = $_FILES['hinhanh'];  //dùng phương thức $_file['name'] để lấy hình ảnh đc tải lên , thông qua name="hinhanh" của thẻ input

print_r($a);  //in ra thông số của bức ảnh dưới dạng mảng:
/*
Array ( [name] => dangandnhung.jpg [full_path] => dangandnhung.jpg [type] => image/jpeg [tmp_name] => C:\xampp2\tmp\phpF038.tmp [error] => 0 [size] => 453721 )
-[name] => dangandnhung.jpg :tên của bức ảnh
-[type] => image/jpeg :kiểu của tệp (ở đây là image: hình ảnh)
-[tmp_name] => C:\xampp2\tmp\phpF038.tmp :bức ảnh đc gửi từ đâu(nguồn gốc)
-[error] => 0  :số lỗi 
-[size] => 453721 : kích thước bức ảnh 
*/
?>