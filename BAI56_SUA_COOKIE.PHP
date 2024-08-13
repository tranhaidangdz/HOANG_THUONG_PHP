<?php
//cách xem cookie trên máy:
//CTRL+SHIFT+I -> mở trang web dưới dạng nền (hoặc ấn F12)
//chọn application -> cookie ->ta sẽ xem đc các cookie của trang web

//1.CÁCH TẠO 1 COOKIE:
$cookieName = "user";  //biên lưu tên cookie
$cookieValue = "hương";  //biến lưu gtri cookie 
//để sửa gtri cookie ta sẽ sửa trực tiếp gtri trong code php: sửa "đăng" thành "hương"

//dùng hàm setcookie(ten, gtri, thời gian );
setcookie($cookieName, $cookieValue, time() + 86400);

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