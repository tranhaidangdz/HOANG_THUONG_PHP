<!-- ta đã thêm nút xóa ở bài 95, khi ấn vào link đó nó sẽ gửi đến trang bài 97, sau đó
nó tạo ra 1 biến id ở trên đg dẫn url lưu gtri id của sản phẩm 
-->

<?php
include "BAI94_PROJECT_3_KETNOI_DATABASE.PHP";

$this_id = $_GET['this_id'];
// ta dùng get để lấy gtri id đc tạo ra trên đg dẫn url của trình duyệt 
$sql = "DELETE FROM sanpham WHERE id=$this_id";  //sau đó viết sql để xóa sp có id = id sản phẩm ta bấm xóa

mysqli_query($conn, $sql);  //kết nối đoạn code sql với csdl để nó thực thi trên csdl 

header('location:BAI95_PROJECT_4_HIENTHI_THONGTIN_SANPHAM_P1.PHP');  //sau khi xóa 1 sp ta sẽ quay lại file bài 95 để xem các sp còn lại 
?>