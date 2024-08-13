<!-- hôm nay ta sẽ chuyển đổi array sang string:
-cú pháp: implode("ký tự ngăn cách", $tenMang);
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
//ta có 1 mảng:
$array = array("xin", "chào");
$string = implode(" ", $array); //NGĂN cách chuỗi này bởi dấu cách " "
echo $string;  //"xin chào"

$string = implode("=========", $array); //NGĂN cách chuỗi này bởi dấu cách "========"
echo $string;  //"xin=======Chào"
//** NẾU TA MUỐN nối các ptu mảng thành 1 chuỗi và ngăn cách bởi 1 ký tự nào đó => sd hàm implode

//** NẾU TA MUỐN tách các ptu mảng thành 1 chuỗi bởi dấu ngăn cách bởi 1 ký tự nào đó => sd hàm explode
?>