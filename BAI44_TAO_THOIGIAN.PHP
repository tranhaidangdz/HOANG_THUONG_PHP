<!-- hôm nay ta học cách lấy ra ngày tháng năm hiện tại trong máy tính -->
<?php
//1.ta dùng hàm date("d/m/Y") để lấy ra ngày, tháng, năm
echo date("d/m/Y");  // =>ngày 26/07/2024
//ta có thể đảo vị trí "d","m","Y" để đảo vị trí ngày,tháng,năm, tuy nhiên chữ Y(year) buộc phải viết hoa
echo date("m/d/Y");  // =>ngày 07/26/2024

//2. CÁCH LẤY GIỜ PHÚT GIÂY :  hàm date("h:i:sa");
//2.1 định dạng 1 ngày có 24h
echo date("H:i:sa");  //chữ "H" viết hoa đại diện 1 ngày có 24h: từ 0h->24h
//H: giờ
//i:phút
//s: giây,sa:đại diện cho buổi sáng or chiều

//2.2 định dạng 1 ngày có 12h
echo date("h:i:sa");   //chữ "h" nhỏ viết thường đại diện 1 ngày 12h: từ 0h->12h

?>