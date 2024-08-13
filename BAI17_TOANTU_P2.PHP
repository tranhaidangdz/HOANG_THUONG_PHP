<?php
//5. TOÁN TỬ LOGIC : and, or, xor 
//TOÁN TỬ and (&&): cả 2 biểu thức phải cùng đúng thì trả về kq đúng
$a = 10;
$b = 1;
if ($a > 5 && $b < 5) {
    echo "đúng";
}
if ($a > 5 and $b < 5) {   //ta có thể dùng toán tử 2 dấu và "&&" hoặc ta dùng chữ "and"
    echo "đúng";
}

//TOÁN TỬ or(||) : 1 trong 2 biểu thức đúng thì trả về kq đúng:
if ($a > 20 || $b < 5) {   //biểu thức (a>20) sai nhưng biểu thức (b<5) đúng nên kq=ĐúNG 
    echo "đúng";
}
if ($a > 20 or $b < 5) {   //ta có thể dùng toán tử 2 dấu sược đứng "||" hoặc ta dùng chữ "or"
    echo "đúng";
}
//TOÁN TỬ xor : CHỈ 1 TRONG 2 CÁI ĐÚNG(tức là 1 đúng 1 sai)
//nếu cả 2 cùng đúng thì cũng ko tính
if ($a > 20 xor $b < 5) {   //biểu thức (a>20) sai nhưng biểu thức (b<5) đúng nên kq=ĐúNG 
    echo "đúng";
}
if ($a > 5 xor $b < 5) {   //do cả 2 vế đều đúng nến kq=SAI (chỉ đc phép 1 cái đúng thôi)
    echo "đúng";
}

//6. TOÁN TỬ CHUỖI : DÙNG ĐỂ NỐI 2 CHUỖI
$A = "XIN CHÀO";
$B = " ĐĂNG";
$D = 10;
$C = $A . $B; //ta dùng dấu chấm "." để nối 2 chuỗi, ngoài ra có thể dùng "." để nối chuỗi và gtri biến để in ra
echo $C;  //"xin chào đăng"
echo "gtri biến D là :" . $D; //dùng . để nối giữa thông báo và gtri biến

//***HAY: ta dùng .= để ghép 2 chuỗi
$A .= $B;  //$A=$A.$B;  (tức là ghép chuỗi B thêm vào chuỗi A,kết quả chuỗi A sẽ thay đổi)
echo $A;  //KQ: A=  "xin chào đăng"
