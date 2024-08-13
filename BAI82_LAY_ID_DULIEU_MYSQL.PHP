<!-- bài 77 ta đã chèn dữ liệu vào 1 bảng trong csdl . hôm nay ta sẽ lấy dữ liệu từ 1 bảng nào đó trong csdl 
-muốn lấy dữ liệu từ toàn bộ bảng => ta dùng lệnh select * giống như mysql 
-->

<?php
include "BAI74_KETNOI_DATABASE.PHP";
/*
-cú pháp:
$tenBien = "SELECT * FROM tenBang ";  
*/
$layDuLieu = "SELECT * FROM thanhvien";
$result = mysqli_query($conn, $layDuLieu);  //trả về true nếu lấy dữ liệu thành công

while ($row = mysqli_fetch_array($result)) {  //dùng while lặp qua từng dòng của kết quả truy vấn;lấy từng dòng của kết quả truy vấn và trả về dưới dạng mảng 
    //$row['id'] để truy cập vào gtri của ptu id có trong mảng $row

?>
    <!-- để chèn html cho các dòng php này, phần trc ngoặc mở "{" thì ta để nguyên trong khối php ban đầu
-đoạn code ở giữa trong thẻ while cho đến dấu ngoặc đóng "}" thì ta cho ra ngoài khối php
-bọc từng dòng php bằng thẻ <PHP>
-sau đó ALT+W để chèn thẻ html cho code php, ta có thể chèn cấu trúc 1 bảng html để dữ liệu php đc điền trong 1 bảng 
-->
    <tr>
        <!-- tr=table row, mỗi thẻ này tương ứng 1 dòng trong bảng
    td=table data: mỗi thẻ này tương ứng 1 ô dữ liệu trong bảng  
    -->
        <td> <?php echo $row['id']; ?></td>
        <td> <?php echo $row['taikhoan']; ?></td>
        <td> <?php echo $row['matkhau']; ?></td>
        <td> <?php echo $row['level']; ?></td>

        <span>
            <a href="bai82_edit.php?this_id= <?php echo $row['id'] ?>">sửa</a>
            <!-- khi ta ấn "sửa" , biến this_id sẽ nhận gtri id đc lấy ra từ bảng "thanhvien" trong csdl
            -và nó sẽ chuyển trang sang file bai82_edit.php 
            -->
        </span>
        <span><a href="">xóa</a></span>

        <br>
    </tr>
<?php } ?>