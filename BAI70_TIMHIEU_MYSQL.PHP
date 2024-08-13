<!-- TA DÙNG MYSQL ĐỂ LƯU DŨ LIỆU NHẬN TỪ FORM ĐĂNG NHẬP ĐĂNG KÍ DƯỚI DẠNG BẢNG
-trong máy chủ xampp khi gặp lỗi 
22:16:34  [mysql] 	Problem detected!
22:16:34  [mysql] 	Port 3306 in use by "Unable to open process"!
22:16:34  [mysql] 	MySQL WILL NOT start without the configured ports free!
22:16:34  [mysql] 	You need to uninstall/disable/reconfigure the blocking application
22:16:34  [mysql] 	or reconfigure MySQL and the Control Panel to listen on a different port

- ta fix như sau mà ko cần xóa xampp cài lại như mình (mất tgian mà ko fix đc lỗi huhu)
b1: bấm vào biểu tượng xampp trên màn hình laptop
b2: chuột phải -> run as administrator
b3: nó sẽ mở xampp, ô mysql có dấu tich, ta bấm vào dấu tích đấy chọn uninstall là đc :((
(khi nào dấu tích v -> dấu x tức là ko có cái nào chiếm dụng nữa)
***LƯU Ý: ĐỂ TRÁNH BỊ LỖI ỨNG DỤNG CHIẾM MẤT CỔNG 3306 OR 3307, SAU KHI SD XAMPP TA SẼ BẤM STOP CẢ APACHE VÀ MYSQL ĐI
- apache có thể tự tắt khi ta tắt máy nhưng mysql nó vẫn chạy ngầm   

-fix lỗi apache : ta đổi cổng từ 80 thành 8080, vào app xampp , config-> chọn apache(httpd.conf)
-> sau đó CTRL+F để tìm "80" đây là cổng cũ của apache, sau đó ta đổi cổng thành "8080"
-->

<!-- 1. TÌM HIểu MYSQL:
-mysql là ứng dụng để ta lưu trữ dữ liệu của các đối tượng dưới dạng bảng:
 -VD ta bấm  đăng ký thì toàn bộ thông tin sẽ đc php lấy, và lưu vào mysql
 => ta sẽ học kết nối php với mysql
 -khi ta đăng nhập, nó sẽ ktra thông tin có giống vs thông tin đc lưu trong mysql ko?
-->