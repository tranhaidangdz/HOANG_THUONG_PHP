<!-- giống như mysql đã học, inner join dùng để kết nối 2 bảng có chung 1 cột dữ liệu 
-ta sẽ kết nối 2 bảng thành 1 bảng để tạo thành 1 bảng chung 
VD: ta có bảng thanhvien:
id    taikhoan    matkhau   level
1       đăng        123       1
2       nhung       1234       1
3       hương       1111       2
4       trang       1212       1
5       phương anh  1222       2

-và ta có bảng chi tiết thành viên:
id   gioitinh       namsinh
1       nam             2004
2       nữ              2005
3       nữ              2002
-khi ta kết hợp 2 bảng, ta sẽ có 1 bảng gồm 5 cột và 3 dòng (do nó chỉ lấy những dòng mà có gtri cột id chung giữa 2 bảng)
id    taikhoan    matkhau   level  gioitinh     namsinh
1       đăng        123        1     nam             2004
2       nhung       1234       1     nữ              2005
3       hương       1111       2     nữ              2002
=> nhờ ghép bảng chitietthanhvien mà ta bổ sung đc giới tính và năm sinh cho bảng thanhvien, thông qua id chung
=> bảng chitietthanhvien chỉ có 3 dòng id=1,2,3 nên ta cũng chỉ lấy 3 dòng của bảng thanhvien để ghép lại thôi

-->

<?php
include "BAI74_KETNOI_DATABASE.PHP";
/*
-cú pháp:
$tenBien = "SELECT cot1,cot2... FROM tenBang1
            INNER JOIN tenBang2
            on bang1.cotCHUNG= bang2.cotCHUNG";
*/
$ketNoiDuLieu = "SELECT taikhoan,matkhau,level,gioitinh,namsinh FROM thanhvien   
              INNER JOIN chitietthanhvien 
              ON thanhvien.id=chitietthanhvien.id
             ";
//ta sẽ copy đoạn code sql này dán vào sql trong mysql máy chủ để xem thử code chạy đúng chưa
$result = mysqli_query($conn, $ketNoiDuLieu);  //trả về true và 1 bảng $result nếu lấy dữ liệu thành công

if (mysqli_num_rows($result) > 0) {  //đếm số dòng có trong bảng đó xem có >0(tức là bảng có dữ liệu) ko?
    while ($row = mysqli_fetch_array($result)) {  //dùng while lặp qua từng dòng của kết quả truy vấn;hàm mysqli_fetch_array biến toàn bộ dữ liệu lấy dc từ biến $result và  trả về dưới dạng mảng $row
        echo $row['id'] . "|" . $row['taikhoan'] . "|" . $row['matkhau'] . "|" . $row['level'];
        echo '<br>';
    }
}