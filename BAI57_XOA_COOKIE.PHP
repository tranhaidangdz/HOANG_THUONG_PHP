<!-- có 2 cách để xóa cookie:
c1:xóa thủ công 
F12 -> application -> cookie để ta xem các cookie có trên trang web
chuột phải vào cookie + clear để xóa đi cookie đó

c2: xóa bằng code php: ta sẽ trừ đi thơi gian cookie tồn tại
  -->

<?php

//1.CÁCH TẠO 1 COOKIE:
$cookieName = "user";  //biên lưu tên cookie
$cookieValue = "đăng";  //biến lưu gtri cookie 

//dùng hàm setcookie(ten, gtri, thời gian );
setcookie($cookieName, $cookieValue, time() - 86400, "/");

//thời hạn để sd cookie(tưc là sau bao lâu nó sẽ chết): 86400 là 86400 giây = 1 ngày
//nếu ta muốn tăng lên ta lấy (86400 * số ngày)
//time()+(86400*30) : cookie có hạn 30 ngày

//BAI 57:XÓA COOKIE: ta đổi "time()+86400" thành "time()-86400" : tưc là ta trừ luôn khoảng thời gian cookie tồn tại => nó sẽ chết ngay lập tức

if (isset($_COOKIE[$cookieName])) //ktra tên cookie đã tồn tại chưa
{
    echo "cookie " . $cookieName . " đã tồn tại";
} else {
    echo "cookie " . $cookieName . " đã chết";  //lúc này chưa có or cookie đã hết hạn
}

?>