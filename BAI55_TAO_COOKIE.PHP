<!-- cookie(bánh quy): mỗi trang web đều có 1 or nhiều cookie 
***Cookie là gì?
-Cookie là các tệp nhỏ được lưu trữ trên máy tính của người dùng bởi các trang web mà họ truy cập.
-Chúng được sử dụng để lưu trữ thông tin về người dùng và các thiết lập của họ, chẳng hạn như ngôn ngữ, giỏ hàng mua sắm, hoặc thông tin đăng nhập.
-Cookies giúp trang web nhớ bạn là ai mỗi khi bạn quay lại, cải thiện trải nghiệm người dùng(tức là nó đã biết tài khoản đăng nhập,thói quen, sở thích bạn hay làm để đề xuất đúng trọng tâm)

***Session là gì?
-Session (phiên làm việc) là khoảng thời gian mà một người dùng tương tác với một ứng dụng web.
-Khi một người dùng bắt đầu tương tác với ứng dụng web (ví dụ như đăng nhập), một session sẽ được khởi tạo và một ID session duy nhất sẽ được tạo ra.
-Thông tin về session này thường được lưu trữ trên máy chủ và ID session sẽ được lưu trong cookie hoặc truyền qua URL.
-Session thường có thời gian tồn tại ngắn, chỉ kéo dài trong thời gian người dùng tương tác với trang web. Khi người dùng thoát trình duyệt hoặc sau một khoảng thời gian không hoạt động, session có thể hết hạn.

***Sự khác biệt chính giữa Cookie và Session
-Vị trí lưu trữ: Cookie được lưu trên máy tính của người dùng, trong khi session được lưu trên máy chủ.
-Thời gian tồn tại: Cookie có thể có thời gian tồn tại dài (thậm chí nhiều năm), còn session thường tồn tại ngắn và hết hạn sau một khoảng thời gian không hoạt động.
Mục đích sử dụng: Cookie thường được sử dụng để lưu trữ các thiết lập cá nhân và thông tin đăng nhập, trong khi session được sử dụng để quản lý trạng thái người dùng trong suốt thời gian tương tác với ứng dụng web. 
-->
<?php
//cách xem cookie trên máy:
//CTRL+SHIFT+I -> mở trang web dưới dạng nền (hoặc ấn F12)
//chọn application -> cookie ->ta sẽ xem đc các cookie của trang web

//1.CÁCH TẠO 1 COOKIE:
$cookieName = "user";  //biên lưu tên cookie
$cookieValue = "đăng";  //biến lưu gtri cookie 

//dùng hàm setcookie(ten, gtri, thời gian,"/" );
setcookie($cookieName, $cookieValue, time() + 86400, "/");

//thời hạn để sd cookie(tưc là sau bao lâu nó sẽ chết): 86400 là 86400 giây = 1 ngày
//nếu ta muốn tăng lên ta lấy (86400 * số ngày)
//time()+(86400*30) : cookie có hạn 30 ngày

if (isset($_COOKIE[$cookieName])) //ktra tên cookie đã tồn tại chưa
{
    echo "cookie " . $cookieName . " đã tồn tại";
} else {
    echo "cookie " . $cookieName . " đã chết";  //lúc này chưa có or cookie đã hết hạn
}
//KHI ta mở trang web: http://localhost:8080/HOANG_THUONG_PHP/BAI55_TAO_COOKIE.PHP
//ban đầu chưa có cookie thì nó báo "cookie đã chết" , ta F5 chạy lại trang web. lúc này đoạn code php tạo cookie đc thực hiện
// => nó báo "cookie đã tồn tại";

//2. CÁCH XÓA 1 COOKIE:
//F12 -> application -> cookie để ta xem các cookie có trên trang web
//chuột phải vào cookie + clear để xóa đi cookie đó
?>