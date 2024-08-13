<!-- CÂU LỆNH SWITCH-CASE:
 -khác với if-else , khi ktra 1 đk nào đó trong if mà đúng, nó sẽ thực hiện câu lệnh trong if và dừng kiểm tra
 -còn switch case nó sẽ ktra đk của tất cả các case , nếu case nào đúng thì nó thực hiện case đó
 -cú pháp:
 switch (biến)
 {
 case gtri1:
    //lệnh thực hiện nếu biến nhận gtri1 
    break;  //lệnh break để dừng đk để nếu case 1 đã đúng nó sẽ ko nhảy xuống case 2 nữa
case gtri2:
    //lệnh thực hiện nếu case1 sai, case2 đúng
    break;
case gtri3:
    //lệnh thực hiện nếu case1,2 sai ; case3 đúng
    break;
.....
default:
 //lệnh thực hiện nếu tất cả các case trên đều sai
 break;
 
 }
  -->
<?php
$color = "đỏ";  //ta có 1 biến
//nếu ta dùng if-else if kiểm tra thì nó sẽ tốn tgian:
if ($color == "trắng")
    echo "trắng";
else if ($color == "đỏ")
    echo "đỏ";
else if ($color == "vàng")
    echo "vàng";

//NẾU TH 1 BIẾN NÀO CẦN KTRA NHIỀU GTRI => SWITCH - CASE
switch ($color) {
    case "trắng":  //xem biến đó có nhận gtri = "trắng" ko?
        echo "màu trắng";
        break;
    case "đỏ":  //xem biến đó có nhận gtri = "đỏ" ko?
        echo "màu đỏ";  //=> nó sẽ in ra là màu đỏ 
        break;
    case "vàng":  //xem biến đó có nhận gtri = "vàng" ko?
        echo "màu vàng";
        break;
}
?>