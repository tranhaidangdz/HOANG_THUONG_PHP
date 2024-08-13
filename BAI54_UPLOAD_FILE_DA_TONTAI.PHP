<!-- nếu ta upload 1 file đã tồn tại rồi, ta sẽ đặt đk mỗi file ko đc giống nhau -->


<form action="BAI52_UPLOAD_FILE_LEN_THUMUC.PHP" method="post" enctype="multipart/form-data">
    <input type="file" name="hinhanh" value="chọn tệp">
    <!-- ta để kiểu type="file" để có thể tải ảnh từ input
        name="hinhanh": ta sẽ lấy bức ảnh này qua tên của thẻ input này ="name"
        value="chọn tệp": tên ta đăt cho thẻ input này 
        ***LƯU Ý: ĐỂ có thể gửi ảnh đến file bai52.php ta phải thêm: enctype="multipart/form-data" vào thẻ form
        -->
    <input type="submit" name="btn" value="gửi">
</form>

<?php
//BÀI 54:
//ta tạo 1 biến lưu đg dẫn đến thư mục img mà ta sẽ chứa ảnh vào
$thuMuc = "C:/xampp2/htdocs/HOANG_THUONG_PHP/bai52.img/";

$bien = $thuMuc . basename($_FILES['hinhanh']['name']);  //biến này ktra tên hình ảnh đó đã tồn tại trong thư mục chưa?

if (isset($_POST['btn']))  //ktra nút btn có tồn tại ko(tức là ngta có nhấn nút gửi ko)
{
    if (isset($_FILES['hinhanh'])) //ktra nút chọn tệp có đc nhấn ko(ktra ngta có nhấn nút để upload ko, nếu có thì tiếp tục xử lý)
    // DO nút "hinhanh" có type="file" nên để lấy dữ liệu từ input này ta phải dùng $_FILES để ktra 
    // còn nút "btn" ta dùng $_POST để lấy dữ liệu bth
    {
        if ($_FILES['hinhanh']['size'] == 0) { //ta ktra kích cỡ bức ảnh, nếu ==0 tức là chưa chọn bức ảnh nào để nhập vào input nên nó chưa có thông số bức ảnh
            echo "bạn chưa chọn file";
        } //ta sẽ thêm 1 đk bắt lỗi kích thước file
        else if ($_FILES['hinhanh']['size'] > 20000) {
            echo "file quá dung lượng ";
        }
        //BÀI 54: TA BẮT ĐK ẢNH ĐÃ TỒN TẠI:
        else if (file_exists($bien)) {
            echo "file đã tồn tại";
        } else //nếu ngta đã chọn ảnh, khi gửi sang trang .php, ta sẽ chạy đoạn code này và đưa ảnh vào thư mục chỉ định
        {
            move_uploaded_file($_FILES['hinhanh']['tmp_name'], 'C:/xampp2/htdocs/HOANG_THUONG_PHP/bai52.img/' . $_FILES['hinhanh']['name']);

            /*
            -cú pháp: ta dùng hàm move_uploaded_file để đưa 1 bức ảnh vào thư mục ta chỉ định: 
            move_uploaded_file('đg dẫn hình ảnh trong máy tính' , 'đg dẫn đến thư mục muốn cho ảnh vào'.tenBuc_ảnh];
           
            //VD:
            move_uploaded_file($_FILES['hinhanh']['tmp_name'], 'C:/xampp2/htdocs/HOANG_THUONG_PHP/bai52.img/' . $_FILES['hinhanh']['name']);
            
            $_FILES['hinhanh']['tmp_name'] : lấy ra đg dẫn đến hình ảnh muốn upload (chính là lấy ra tmp_name của ảnh)

            'C:/xampp2/htdocs/HOANG_THUONG_PHP/bai52.img/' . $_FILES['hinhanh']['name'] :cả cụm này là phép nối chuỗi, ta sẽ nối 2 chuỗi lại với nhau
            tạo thành đg dẫn đến thư mục muốn cho bức ảnh vào và tên bức ảnh : C:/xampp2/htdocs/HOANG_THUONG_PHP/bai52.img/anhquan2.jpg
            
            */
            echo "upload thành công";
        }
    } else {
        echo "lỗi upload";
    }
}
?>