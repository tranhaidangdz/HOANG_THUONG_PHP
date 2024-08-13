<!-- ta sẽ thêm 1 nút sửa ở bên cạnh các sản phẩm, tương tự khi khi ta xóa sp
-nút sửa này cũng tạo ra 1 biến this_id='id sp' khi ta bấm vào sp nào đó và gửi đến trang bài 98_sửa_sản_phẩm này 
-->
<?php
include "BAI94_PROJECT_3_KETNOI_DATABASE.PHP";
$this_id = $_GET['this_id'];

$sql = "SELECT * FROM sanpham
      WHERE id=$this_id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

//khi nhấn nút sửa(có name='btn')
if (isset($_POST['btn'])) {
      //khi ng dùng sửa dữ liệu id, name, price, guarantee của sản phẩm:
      //ta sẽ có các biến để lấy gtri mà người dùng nhập vào (Đây chính là gtri đc sửa mới)
      $id = $_POST['id'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $guarantee = $_POST['guarantee'];

      $image = $_FILES['hinhanh']['name'];  //chỉ lấy tên hình ảnh để đăng lên database

      $image_tmp_name = $_FILES['hinhanh']['tmp_name'];  //lấy đg dẫn của ảnh trong máy tính

      //upload toàn bộ thông tin ở trên lên database:
      $sql = "UPDATE sanpham
            SET name='$name', image='$image', price='$price',guarantee='$guarantee'
            WHERE id= $this_id
            ";
      mysqli_query($conn, $sql);  //kết nối đoạn code sửa sanpham với CSDL

      move_uploaded_file($image_tmp_name, 'C:/xampp2/htdocs/HOANG_THUONG_PHP/project-img/' . $image);  //upload 1 file lên thư mục(dùng để thay đổi bức ảnh)

      header('location: BAI95_PROJECT_4_HIENTHI_THONGTIN_SANPHAM_P1.PHP ');
}
?>
<h1>Sản phẩm: <?php echo $row['name'] ?> </h1>
<!-- hiển thị tên sản phẩm muốn sửa khi ta bấm vào sp đó 
-->

<form method="post" enctype="multipart/form-data">

      <p>id</p>
      <input type="text" name="id" value="<?php echo $row['id']; ?>">
      <p>name</p>
      <input type="text" name="name" value="<?php echo $row['name']; ?>">
      <!-- khi ta bấm sửa sp, nó sẽ in ra thông tin của các sp đó ở phần đầu vào của input ,
    (VD sản phẩm này tên ban đầu là gì, giá bao nhiêu ) 
    sau đó ta xóa thông tin này đi và thay mới => sau khi bấm gửi thì nó sẽ thay đổi trên csdl -->

      <p>image</p>
      <span>
            <img src="C:/xampp2/htdocs/HOANG_THUONG_PHP/project-img/<?php echo $row['image'] ?>" width="70px" height="70px">
      </span>
      <input type="file" name="hinhanh">
      <!--  ta dùng chế độ upload file lên thư mục để ta tải hình ảnh lên -->

      <p>price</p>
      <input type="text" name="price" value="<?php echo $row['price']; ?>">

      <p>guarantee</p>
      <input type="text" name="guarantee" value="<?php echo $row['guarantee']; ?>">
      <br>
      <button id="submit" name="btn">sửa</button>

</form>