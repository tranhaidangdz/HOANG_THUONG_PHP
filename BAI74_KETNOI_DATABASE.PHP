<!-- để kết nối php với csdl MYsql ta phải truy cập thông qua 4 biến
-tên server : chính là "localhost"
-tên  user: mặc định là "root"
-mật khẩu: mặc định là chưa có gì ""
-tên CSDL muốn truy cập: VD truy cập csdl "cosodulieu"
-->

<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'cosodulieu';
//ta tạo 1 đối tg mysqlLi để kết nối với 4 biến trên: truyền 4 tên biến vào 
$conn = new mysqli($server, $user, $pass, $database, 3307);  //ta đổi cổng 3306 sang 3307 nên ta phải thêm cổng này khi tạo đối tg $conn khi kết nối với sql

//ktra biến $conn chứa csdl đã kết nối thành công với 4 biến kia chưa
if ($conn) {
    mysqli_query($conn, "SET NAMES 'utf8' ");
    /*
Đoạn code mysqli_query($conn, "SET NAMES 'utf8' "); được sử dụng trong PHP để thiết lập mã hóa ký tự cho kết nối đến cơ sở dữ liệu MySQL. Dưới đây là giải thích chi tiết về từng phần của đoạn mã:

mysqli_query(): Đây là một hàm của PHP dùng để thực hiện một truy vấn đối với cơ sở dữ liệu MySQL. Hàm này nhận hai tham số: kết nối đến cơ sở dữ liệu và câu truy vấn SQL.

$conn: Đây là biến chứa kết nối đến cơ sở dữ liệu MySQL. Kết nối này thường được tạo ra trước đó bằng cách sử dụng hàm mysqli_connect().

"SET NAMES 'utf8'": Đây là câu truy vấn SQL. Câu lệnh này thiết lập mã hóa ký tự mà MySQL sẽ sử dụng cho các trao đổi dữ liệu trong phiên kết nối hiện tại. Trong trường hợp này, nó thiết lập mã hóa ký tự là UTF-8.

Cụ thể, câu lệnh SET NAMES 'utf8' thông báo cho MySQL sử dụng mã hóa ký tự UTF-8 để:

-Đọc dữ liệu từ các truy vấn SQL (client -> server).
-Viết dữ liệu vào các bảng trong cơ sở dữ liệu (server -> client).
-Trao đổi dữ liệu giữa client và server.
    */
    echo " đã kết nối thành công";
    echo '<br>';
} else
    echo "kết nối thất bại";
?>

<!-- để bắt đàu sd CSDL ta sẽ gọi file này trong file index.php: include "BÀI74_KETNOI_DATABASE.PHP"
 -sau đó trong file index.php ta sẽ bắt đầu code php
-->