<!-- 
-có 3 loại câu điều kiện:
if(điều kiện)
{
//câu lệnh thực hiện nếu đk đúng
} 
======================================
if(điều kiện)
    {
    //câu lệnh thực hiện nếu đk đúng
    } else{
    //lệnh thực hiện nếu đk sai 
    }
======================================
if(đk1)
    {
    //câu lệnh thực hiện nếu đk1 đúng
    } else if(đk2) {
    //lệnh thực hiện nếu đk1 sai, đk2 đúng 
    }
 else if(đk3) {
    //lệnh thực hiện nếu đk1 ,đk2 sai, đk3 đúng 
    }....
else{
    //lệnh thực hiện nếu tất cả đk trên đều sai
    }
-->

<?php
$a = 5;
$b = 2.5;
$c = 50;
//VD if
if ($a <= 10)
    echo "đúng";  //nếu lênh trong khối chỉ có 1 dòng thì ta ko cần mở ngoăc {}

//VD if-else
if ($b > 10) {
    echo "đúng";
} else
    echo "sai";
//VD if-else-if
if ($c < 10)
    echo "$c < 10";
else if ($c < 20)
    echo "$c < 20";
else if ($c < 60)
    echo "$c < 60";

//nếu nó ktra mà thấy có 1 đk đúng rồi=> nó thực hiện câu lệnh trong khối đó và dừng các câu lệnh dưới đó ko ktra nữa
//VD: nó đã ktra đk if đúng => dừng luôn ko ktra trong else if nữa
//nếu  đk if sai => kiếm tra tiếp đk trong else if
//nếu tất cả sai thì nó thực hiện câu lệnh trong else 
?>