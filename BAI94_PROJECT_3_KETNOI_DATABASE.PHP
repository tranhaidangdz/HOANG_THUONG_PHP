<!-- hôm nay ta sẽ kết nối database Website với file bai94.php
-bài 94.php này sẽ có tác dụng giống bài 74.php, đây sẽ là file dùng để kết nối với database
-->

<?php
//đầu tiên ta tạo 4 biến của 1 database để lưu giá trị:
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'website';
//sau đó ta truyền 4 biến này vào hàm tạo của mysqli(kết nối database bằng kiểu hướng đói tượng trong mysqli)
$conn = new mysqli($server, $user, $pass, $database, 3307);  //nhớ truyền cổng 3037 do ta đã thay đổi cổng  3306 mặc định rồi

//khi đó biến $conn đã có dữ liệu, trả về true nếu tồn tại:
if ($conn) {
    mysqli_query($conn, " SET NAMES 'utf8' ");  //dùng hàm mysqli_query và truyền biến $conn để kết nối csdl và set tiếng việt cho nó
    echo "kết nối thành công";
} else
    echo "kết nối ko thành công";
?>