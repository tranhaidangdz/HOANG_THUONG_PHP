<!-- khi ta vào 1 trang web, ta bấm vào trag chủ, thư viên, danh sách phát...
=> nó sẽ chuyển sang 1 trang con khác (mặc dù ta vấn đang ở youtube) 
-->

<ul>
    <li><a href="BAI69_CHUCNANG_PAGE_LAYOUT.PHP?page_layout=trangchu">Trang chủ</a></li>
    <li><a href="BAI69_CHUCNANG_PAGE_LAYOUT.PHP?page_layout=sanpham">Sản phẩm</a></li>
    <li><a href="BAI69_CHUCNANG_PAGE_LAYOUT.PHP?page_layout=giohang">Giỏ hàng</a></li>
    <!-- bth trong html khi bấm vào các đg link này nó sẽ nhảy trang sang trang tương ứng
    -tuy nhiên ta muốn khi bấm vào nó vẫn ở trang admin này, nhưng vẫn hiển thị đc ND của các trang con (giống VD về youtube ở trên) 
    -TA sẽ cho đg dẫn trỏ đến chính trang "BAI69_CHUCNANG_PAGE_LAYOUT.PHP" tuy nhiên có 1 biến để giúp gộp trang con vào trang to
    -ta sẽ tạo ra 1 biến page_layout và gtri các biến của nó =trangchu,giohang,sanpham... ,VD:  ?page_layout=trangchu
    -->
</ul>

<?php
//đầu tiên ta ktra xem biến page_layout có tồn tại ko
if (isset($_GET['page_layout']))  //ta phải dùng $_GET để lấy gtri biến page_layout (do hàm get dùng để lấy gtri hiển thị trên đg dẫn url, còn dùng $_POST ko lấy đc)
{
    //ta ktra gtri page_layout rơi vào TH nào, nếu là trang chủ thì ta sẽ gộp file con trangchu.php vào file này
    switch ($_GET['page_layout']) {
        case 'trangchu':
            include "bai69_trangchu.php";  //ktra nếu ta nhấn vào biến page_layout=trangchu => nó sẽ gộp file php đó vào file "BAI69_CHUCNANG_PAGE_LAYOUT.PHP"
            break;
        case 'sanpham':
            include "bai69_sanpham.php";
            break;
        case 'giohang':
            include "bai69_giohang.php";
            break;
    }
}
?>