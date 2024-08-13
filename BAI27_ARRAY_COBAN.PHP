<!-- array(mảng):có 3 loại array
-ARRAY CHỨA CHỈ SỐ
-ARRAY DẠNG JSON
-ARRAY DẠNG ĐA CHIỀU 
-->
<?php
//VD ta có 1 biến:
$a = "đăng";  //mỗi biến trong php chỉ chứa đc 1 gtri

//nếu ta muốn 1 biến này chứa dc nhiều gtri => nó chính là array
$name = array("đăng", "nhung", "hương");

//1.ARRAY CHỨA CHỈ SỐ: ta truy cập các ptu trong array bằng chỉ số (luôn bắt đầu từ 0)
echo $name[0]; //đăng
echo $name[1]; //nhung
echo $name[2]; //hương
//hoặc ta in các ptu array trên 1 dòng, cách nhau bằng dấu phẩy:
echo $name[0] . "," . $name[1] . "," . $name[2];

//2.ARRAY dạng json:ta gán thêm các gtri cho các gtri trong array:
$thongTin = array("thương" => 2003, "đăng" => 2004, "nhung" => 2001);  //với mỗi gtri "thuong","đăng","nhung" ta lại gán thêm các gtri cho nó
//truy cập các gtri trong array dạng Json:
echo $thongTin["thương"];  //2003  //LÚC NÀY truy cập các gtri 2003,2004,2001 ta ko truyền chỉ số nữa mà truyền các gtri "thương","đăng","nhung" để truy cập
echo $thongTin["đăng"];  //2004  //truyền gtri này để truy cập dc gtri tương ứng với nó
echo $thongTin["nhung"]; //2001

//3. ARRAY DẠNG ĐA CHIỀU: trong array có thể chứa các array khác:
$myArray = array(
    array("đăng", "2004", "VN"),  //ta khai báo các array con trong array to này, mỗi ptu array vẫn cách nhau = dấu phẩy
    array("nhung", "2003", "TQ"),
    array("hương", "2004", "Thanh hóa"),
);
//truy cập vào từng ptu trong array:
echo $myArray[0];  //truy cập ptu đầu tiên:  "đăng", "2004", "VN"
echo $myArray[1];  //truy cập ptu thứ 2:  "nhung", "2003", "TQ"
echo $myArray[2];  //truy cập ptu thứ 3:  "hương", "2004", "Thanh hóa"

//tuy nhiên trong ptu này lại có 3 gtri, ta có thể truyền tiếp chỉ số để truy cập sâu hơn:
echo $myArray[0][0];  //"đăng" (truy cập ptu con đầu tiên trong mảng $myArray, trong ptu con này ta lại truy cập vào ptu con đầu tiên)
echo $myArray[0][1];  //"2004"
echo $myArray[0][2];  //"vn"
?>