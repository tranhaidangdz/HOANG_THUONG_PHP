<!-- ta đã học 3 dạng array, tuy nhiên trong quá trình làm việc với mảng, ta chủ yếu làm vc với array chứa chỉ số:
-hiển thị array
-độ dài array
-thêm ptu
-sửa ptu 
-xóa ptu
-->
<?php
//ta có 1 mảng:
$name = array("đăng", "nhung", "hương");
//1. ta muốn hiển thị ptu nào thì truyền vào gtri của nó:
echo $name[0];  //đây là hiển thị từng ptu trong mảng
echo $name[1];
echo $name[2];
//còn muốn hiển thị tất cả  ptu trong mảng :
//c1: dùng vòng for:
for ($i = 0; $i <= count($name); $i++) {
    echo $name[$i] . "<br>";
}
//c2: dùng hàm print_r($tenMang);
print_r($name); //"đăng", "nhung", "hương"

//2.ĐỘ DÀI ARRAY: dùng hàm count($tenMang);
echo count($name);  //trả về số ptu có trong array

//3. THÊM PTU VÀO ARRAY:
$name[] = "1234";  //nếu ta ko truyền vị trí mặc định nó thêm ptu này vào cuối mảng
$name[] = "phương anh";

//4. sửa ptu:
//nếu ta truyền vào vị trí: nó sẽ thay thế ptu ở vị trí này = ptu mới:
$name[1] = "111";  //sửa ptu "đăng" thành "111"
$name[2] = "đăng yêu nhung";  //sửa ptu "nhung" thành "đăng yêu nhung"

//5. XÓA PTU: DÙNG hàm unset($tenMang[vị trí ptu muốn xóa]);
unset($name[0]);  //xóa ptu đầu tiên trong mảng
unset($name[1]);  //xóa ptu thứ 2 trong mảng
unset($name[2]);  //xóa ptu thứ 3 trong mảng

?>