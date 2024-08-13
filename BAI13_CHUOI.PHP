<!-- chuỗi : là tập hợp các ký tự, chữ cái, đoạn văn bản ... đc đặt trong dấu nháy kép "..." 
*** 1 SỐ HÀM THAO TÁC CHUỖI TRONG PHP:
strlen("chuoi");  //trả về độ dài chuỗi ta truyền vào 

str_word_count("chuoi");  //trả về số từ có trong 1 chuỗi (do các từ cách nhau bởi dấu cách nên nó sẽ đếm đc)

strrev("chuoi");  //đảo ngược tất cả các ký tự có trong chuỗi (strrev = reverse: đảo ngược)

strpos("chuoi","kyTu_muonTim");  //trả về vị trí đấu tiên tìm thấy ký tự đó trong chuỗi(strpos = position:vị trí)

str_replace("chuoi_muonThay","chuoiMoi_deThay","chuoi_banDau");  
//tham số đầu tiên là chuỗi con muốn bỏ đi
//tham số thứ 2 là chuỗi mới để thay vào
//tham số thứ 3 là chuỗi gốc bd

-->

<?php
//1. đếm độ dài chuỗi :
echo strlen("tran hai dang");  //độ dài chuỗi =13(ko dấu)
echo "<br>";
echo strlen("trần hải đăng");  //nếu chuỗi có dấu nó đếm thêm cả các chữ cái cấu tạo nên dấu đó (độ dài =19 )

//2. đếm số từ có trong chuỗi:
echo strlen("tran hai dang");  //số từ =3(ko dấu)
echo "<br>";
echo strlen("trần hải đăng");  //số từ =6 :nếu chuỗi có dấu nó đếm số từ sẽ bị sai(nên dùng chuỗi ko dấu)

//3. hàm đảo ngược chuỗi: strrev
echo strrev("tran hai dang");
echo "<br>";

//4. hàm tìm ký tự trong chuỗi: strpos
echo strpos("tran hai dang", "n");  //tìm kiếm vị trí chữ "n" đầu tiên => vị trí 3(do nó đếm từ trái sang và bắt đầu từ 0)
echo strpos("tran hai dang", "tran");  //tìm kiếm vị trí chữ  "tran" đầu tiên => vị trí 0(do nó đếm từ trái sang và bắt đầu từ 0)

//5. hàm thay thế chuỗi con trong chuỗi gốc: str_replace
echo str_replace("tran", "nguyen", "tran hai dang");  //nó thay chữ nguyễn vào chữ trần; chuỗi gốc là " tran hai dang"
//kq: nguyen hai dang

?>