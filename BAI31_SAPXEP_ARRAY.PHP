<!-- ta có 2 cách sắp xếp array:
sort($tenMang):  sắp xếp mảng tăng dần theo chữ cái a->b->c... hoặc tăng dần theo gtri số 0->1->2 
rsort($tenMang):  sắp xếp mảng giảm dần , ngược bảng chữ cái, hoặc giảm dần theo gtri số 2->1->0  (rsort= reverse sort: đảo ngược sắp xếp)
-->
<?php
$mang = array("A", "C", "B");
sort($mang);  //KQ: A,B,C
rsort($mang);  //KQ: C,B,A

$mang2 = array(1, 5, 7, 3, 6, 8, 2, 9, 3);
sort($mang2); //1,2,3,6,7,8,9
rsort($mang2); //9,8,7,6,5,3,2,1
print_r($mang2);
?>