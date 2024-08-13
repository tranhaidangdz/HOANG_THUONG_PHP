<!-- 
-cách chạy 1 file php: ta sẽ chạy trên trình duyệt chrome
1. mở xampp, bật apache lên(bấm start đến khi nó hiện xanh là đc)
(do apache mình sửa cổng 80 ->8080) nên khi mở trên chrome:
"localhost:8080/TEN_thuMuc/tenFile_php"
VD: " localhost:8080/HOANG_THUONG_PHP/BAI2_CUPHAP_PHP.PHP"
-nếu ta chỉ đặt đc dẫn "localhost:8080/HOANG_THUONG_PHP" thì nó sẽ tìm và mở file index.php đầu tiên (giống như trong html nó ưu tiên mở file index.html)

2. bắt đầu code php:
<?php  //thẻ mở
//ta code php vào giữa cặp thẻ này
?>  //thẻ đóng

-->

<?php
echo "dang dep trai";  //in ra 1 câu lệnh, sau mỗi câu lệnh php ta phải chấm phẩy ";"
?>
<!-- 3. TA CÓ THỂ VIẾT CODE HTML TRONG FILE PHP LUÔN: -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* viết css vào đây */
    </style>

</head>

<body>

    <!-- js -->
    <script src="bai1.JS">
        console.log("code js thì viết giữa 2 thẻ script");
    </script>
</body>

</html>

<?php
//code php ở đây
?>