<!-- ta sẽ học sd for để duyệt mảng (array):
    1. CÁCH KHAI BÁO MẢNG:
    $tenMang = array("chuỗi",số,$tenBien...);
=> ta có thể truyền gtri chuỗi, số or 1 biến nào đó vào mảng trong php
    -->

<?php
//ta có 1 mảng :
$a = 1234;
$value = array("đăng", "nhung", 123, $a);
//2. dùng for để duyệt qua số ptu muốn duyệt trong mảng:
for ($i = 0; $i <= 2; $i++)  //ta chỉ muốn in ra 3 ptu trong mảng (in các ptu 0,1,2 thôi)
{
    echo $ten[$i] . "<br>";
}

//3. dùng for để duyệt qua tất cả các ptu trong mảng:
for ($i = 0; $i <= count($value); $i++)  //count($value) =  số ptu trong mảng value =  chỉ số ptu cuối cùng trong mảng
{                                     //tức là ta duyệt từ ptu 0-> ptu cuỗi cùng trong mảng sau đó in ra hết tát cả các ptu
    echo "$i<br>";
}
//4. ta có thể in ra 1 vài ptu trong mảng:
echo $ten[1];  //in ra ptu ở vị trí thứ 2 trong mảng
echo $ten[0];  //in ra ptu ở vị trí thứ 1 trong mảng
echo $ten[4];  //in ra ptu ở vị trí thứ 5 trong mảng

?>