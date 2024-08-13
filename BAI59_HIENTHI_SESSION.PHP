<?php
//session: khi ta đăng nhập tài khoản youtube chẳng hạn. khi ta thoát ra và vào lại trang đó => tài khoản mặc định đã đc lưu
//session sẽ lưu lại các thông tin đăng nhập của ng dùng để ta truy cập vào trang web nhanh hơn 

//khởi tạo session:
session_start();
//bắt đầu tạo session: ta dùng hàm $SESSION['tenSession'] = "gtri"
$_SESSION['name'] = "đăng";  //ta tạo 1 session "name" có gtri "đăng"

//Cách xem session:
//f12 -> application -> cookie  : ta sẽ xem đc các session trên trang web(NẾU LÀ session ở mục "expires" sẽ hiện là "session")

//2. HIỂN THỊ SESSION: echo $_SESSION['tenSession'];
echo $_SESSION['name'];  //ta dùng echo, sau đó gọi đến tên session => nó sẽ hiển thị gtri của name =" đăng" ra trang web