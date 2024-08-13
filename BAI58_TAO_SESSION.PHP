<!-- 
***Session là gì?
-Session (phiên làm việc) là khoảng thời gian mà một người dùng tương tác với một ứng dụng web.
-Khi một người dùng bắt đầu tương tác với ứng dụng web (ví dụ như đăng nhập), một session sẽ được khởi tạo và một ID session duy nhất sẽ được tạo ra.
-Thông tin về session này thường được lưu trữ trên máy chủ và ID session sẽ được lưu trong cookie hoặc truyền qua URL.
-Session thường có thời gian tồn tại ngắn, chỉ kéo dài trong thời gian người dùng tương tác với trang web. Khi người dùng thoát trình duyệt hoặc sau một khoảng thời gian không hoạt động, session có thể hết hạn.

***Sự khác biệt chính giữa Cookie và Session
-Vị trí lưu trữ: Cookie được lưu trên máy tính của người dùng, trong khi session được lưu trên máy chủ.
-Thời gian tồn tại: Cookie có thể có thời gian tồn tại dài (thậm chí nhiều năm), còn session thường tồn tại ngắn và hết hạn sau một khoảng thời gian không hoạt động.

-->
<?php
//session: khi ta đăng nhập tài khoản youtube chẳng hạn. khi ta thoát ra và vào lại trang đó => tài khoản mặc định đã đc lưu
//session sẽ lưu lại các thông tin đăng nhập của ng dùng để ta truy cập vào trang web nhanh hơn 

//khởi tạo session:
session_start();
//bắt đầu tạo session: ta dùng hàm $SESSION['tenSession'] = "gtri"
$_SESSION['name'] = "đăng";  //ta tạo 1 session "name" có gtri "đăng"

//Cách xem session:
//f12 -> application -> cookie  : ta sẽ xem đc các session trên trang web(NẾU LÀ session ở mục "expires" sẽ hiện là "session")

?>