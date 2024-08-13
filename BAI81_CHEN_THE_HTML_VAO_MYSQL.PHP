<!-- bài 78 ta đã học lấy dữ liệu từ bảng trong mysql
-hôm nay ta sẽ chèn thẻ html vào csdl mysql 
-->

<?php
include "BAI74_KETNOI_DATABASE.PHP";
/*
-cú pháp:
$tenBien = "SELECT * FROM tenBang ";  
*/
$layDuLieu = "SELECT * FROM thanhvien";
$result = mysqli_query($conn, $layDuLieu);  //trả về true nếu lấy dữ liệu thành công

while ($row = mysqli_fetch_array($result)) {  //dùng while lặp qua từng dòng của kết quả truy vấn;lấy từng dòng của kết quả truy vấn và trả về dưới dạng mảng liên kết (associative array) hoặc mảng chỉ số (numeric array).

?>
<!-- ta có thể viết các câu lệnh php muốn chèn html ra ngoài khối <php> ban đầu (trc thẻ mở "{" sẽ nằm trong php, còn trc thẻ đóng "}" sẽ nằm ngoài khối php)
-sau đó ta bọc các câu lệnh php = 1 khối <php> khác
- ALT+W để ta bọc các khối php này bằng các thẻ html
-->
<i>
    <h1><?php echo $row['id'] . "|" . $row['taikhoan'] . "|" . $row['matkhau'] . "|" . $row['level']; ?></h1>
</i>
<!-- ta muốn bọc thẻ h1 để tiêu đề chữ to lên,dùng thẻ br để xuống dòng, hr để tạo đg kẻ ngang -->
<br>
<hr>
<?php }  ?>