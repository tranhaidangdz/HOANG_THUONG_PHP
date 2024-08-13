<!-- bài trc ta dùng hàm readfile("tenFile") để dọc file
-nó sẽ in ra ND file và đếm số ký tự có trong đó 

-ta sẽ dùng hàm fopen("tenFIle","chế độ đọc"); để mở file

-Hàm fopen trong PHP được sử dụng để mở một tập tin hoặc một URL. Nó trả về một con trỏ đến tập tin đã mở hoặc FALSE nếu có lỗi xảy ra

- cú pháp đầy đủ : fopen(filename, mode, include_path, context)
. filename: Tên của tập tin hoặc URL cần mở.
. mode: Chế độ mở tập tin. Dưới đây là các chế độ thường dùng:
    'r': Chỉ đọc. Bắt đầu đọc từ đầu tập tin.
    'r+': Đọc/ghi. Bắt đầu từ đầu tập tin.
    'w': Chỉ ghi. Xóa nội dung tập tin nếu tồn tại hoặc tạo tập tin mới nếu không tồn tại.
    'w+': Đọc/ghi. Xóa nội dung tập tin nếu tồn tại hoặc tạo tập tin mới nếu không tồn tại.
    'a': Chỉ ghi. Ghi thêm vào cuối tập tin nếu tồn tại hoặc tạo tập tin mới nếu không tồn tại.
    'a+': Đọc/ghi. Ghi thêm vào cuối tập tin nếu tồn tại hoặc tạo tập tin mới nếu không tồn tại.
    'x': Chỉ ghi. Tạo tập tin mới. Trả về FALSE nếu tập tin đã tồn tại.
    'x+': Đọc/ghi. Tạo tập tin mới. Trả về FALSE nếu tập tin đã tồn tại.
. include_path (tùy chọn): Đặt thành true nếu muốn tìm kiếm tập tin trong include_path của PHP.
. context (tùy chọn): Một context resource hợp lệ được tạo bằng hàm stream_context_create().
-->
<?php
$myFile = fopen("BAI45.TXT", "r") or die("lỗi");  //đây chỉ là bước mở file,ta truyền tên file và chế độ đọc file. 
//or die("lỗi") báo lỗi nếu xảy ra gì đó

if ($myFile) {
    echo "Tập tin đã được mở thành công.";
} else {
    echo "Không thể mở tập tin.";
}
//1. đọc toàn bộ file = hàm fread(tenBien_mở_file, filesize("tenFile_muonDOc"));
echo fread($myFile, filesize("BAI45.TXT"));  //truyền vào tên biến mở file và kích thước file muốn đọc: filesize("BAI45.TXT")

//2. đọc dòng đầu tiên của file thôi: dùng hàm fgets(tenBien_mở_file);
echo fgets($myFile);   //chỉ đọc dòng đầu tiên(do ko truyền vào kích thước file nên nó ko xác định đc số dòng có trong file để đọc hết)

fclose($myFile); //đóng file sau khi đọc xong
?>