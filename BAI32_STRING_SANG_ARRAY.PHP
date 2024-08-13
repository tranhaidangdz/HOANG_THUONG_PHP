<!-- hôm nay ta sẽ học cách chuyển KDL string sang array: 
dùng hàm explode("ký tự phân cách", $tenChuoi); 

-Hàm explode được sử dụng để tách một chuỗi thành một mảng dựa trên một ký tự phân tách.
-cú pháp:  array explode(string $delimiter, string $string, int $limit = PHP_INT_MAX)
$delimiter: Ký tự phân tách (ví dụ: dấu phẩy, dấu cách).
$string: Chuỗi cần tách.
$limit: Số lượng phần tử tối đa của mảng trả về. (tùy chọn)


-Hàm implode được sử dụng để nối các phần tử của một mảng thành một chuỗi với một ký tự phân tách.
Cú pháp: string implode(string $glue, array $pieces)
$glue: Ký tự nối các phần tử (ví dụ: dấu phẩy, dấu cách).
$pieces: Mảng các phần tử cần nối.

explode:
- Tách một chuỗi thành một mảng dựa trên ký tự phân tách.
Ví dụ: "one,two,three" thành ["one", "two", "three"].

implode:
- Nối các phần tử của một mảng thành một chuỗi với ký tự phân tách.
Ví dụ: ["one", "two", "three"] thành "one,two,three".

*** NGOÀI RA ĐIỂM KHÁC NHAU GIỮA EXPLODE VÀ IMPLODE TRONG TIẾNG ANH:
-Explode:
Nghĩa: Nổ, bùng nổ.
Mô tả: Khi một vật hoặc một chất nổ tạo ra một vụ nổ, phát ra một lực rất lớn và thường phát tán các mảnh vỡ ra xung quanh.
Ví dụ: A bomb can explode and cause significant damage. (Một quả bom có thể nổ và gây ra thiệt hại nghiêm trọng.)

-Implode:
Nghĩa: Nổ từ bên trong, tự sụp đổ vào trong.
Mô tả: Khi một vật thể sụp đổ vào bên trong do áp lực bên ngoài mạnh hơn áp lực bên trong, thường xảy ra trong không gian chân không hoặc khi có sự chênh lệch áp lực lớn.
Ví dụ: A submarine can implode if it descends too deep into the ocean. (Một chiếc tàu ngầm có thể tự sụp đổ nếu nó lặn quá sâu vào đại dương.)
-->
<?php
//VD ta có 1 chuỗi:
$a = "10/04/2004";
$array = explode("/", $a);  //nó sẽ phân tách chuỗi theo dấu sược "/" và tách thành mảng 
var_dump($array);  //KDL array
print_r($array);   //in ra mảng: Array ( [0] => 10 [1] => 04 [2] => 2004 ) 
echo "<br>";

// VD2:
$b = "10.04.2004";
$array2 = explode(".", $b);  //nó sẽ phân tách chuỗi theo dấu chấm "." và tách thành mảng 
var_dump($array2);  //KDL array
print_r($array2);   //in ra mảng:Array ( [0] => 10 [1] => 04 [2] => 2004 )
?>