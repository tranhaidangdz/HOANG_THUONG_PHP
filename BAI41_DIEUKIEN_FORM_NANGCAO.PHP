<!-- bài trc ta đã đặt đk form là "ko đc bỏ trống"
-hôm nay ta sẽ đặt đk nâng cao hơn là "ko dc nhập ký tự đặc biệt" (tức là input chỉ đc nhận vào số và chữ thôi) 
-->
<!-- ta sẽ code lại thẻ form và php của bài trc: -->
<?php
$nameError = "";  //ta có 1 biến thông báo ở đây, ban đầu chưa có gtri gì
$name = ""; //biến này để lưu gtri đã đc nhập
//bắt sự kiện
if ($_SERVER["REQUEST_METHOD"] == "post") //nó ktra phương thức yêu cầu từ phía server có phải phương thức post ko 
//  (tức là ktra ng dùng đã ấn nút submit chưa, tại vì khi nhấn thì phương thức post trong thẻ form đc hiểu là đã gửi )
{
    if (empty($_POST['name']))  //ktra nếu ng dùng chưa nhập gì(chưa có gì trong biến name)
    {
        $nameError = "Không dc bỏ trống";  //thay đổi gtri nameError
    } else {
        $name = $_POST['name'];  //nếu ng dùng có nhập thì ta lưu gtri vừa nhập đó
        if (!preg_match("/^[a-zA-Z]*$/", $name)) { //ktra nếu tên nhập vào chứa các ký tự ngoài các ký tự chữ ra(lưu ý,nếu chữ có dấu nó vẫn tính là ký tự đặc biệt )
            $nameError = "không đc nhập ký tự đặc biệt";
        } else  //nếu TM tất cả các đk trên thì in ra tên biến vừa nhập
        {
            echo $name;
        }
    }
}
?>
<!-- ta có 1 form HTML: -->
<form action="BAI41_DIEUKIEN_FORM_NANGCAO.HTML" method="post">
    name: <input type="text" name="name">
    <!-- thay vì dùng <label>Name</label> thì ta viết luôn label trc thẻ input ntn -->
    <span class="error">
        <?php
        echo $nameError;  //nếu ng dùng ko nhập gì ta sẽ hiển thị nó ra để thông báo "ko dc bỏ trống"
        ?>
    </span>
    <br>
    <input type="submit" name="submit" value="Gửi">
</form>
<!-- 
- Hàm preg_match() trong PHP được sử dụng để thực hiện kiểm tra một chuỗi có khớp với mẫu biểu thức chính quy (regular expression) hay không. 
Hàm này rất hữu ích trong việc kiểm tra tính hợp lệ của dữ liệu, tìm kiếm các mẫu trong chuỗi
Cú pháp :
int preg_match ( string $pattern , string $subject [, array &$matches [, int $flags = 0 [, int $offset = 0 ]]] )

Trong đó:

$pattern: Biểu thức chính quy.
$subject: Chuỗi cần kiểm tra.
$matches (tùy chọn): Nếu được cung cấp, nó sẽ chứa các kết quả khớp.
$flags (tùy chọn): Các cờ có thể được sử dụng để điều chỉnh hành vi của hàm.
$offset (tùy chọn): Vị trí bắt đầu kiểm tra trong chuỗi $subject.

//VD:
$pattern = "/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})$/";
$email = "example@example.com";

if (preg_match($pattern, $email)) {
    echo "Địa chỉ email hợp lệ.";
} else {
    echo "Địa chỉ email không hợp lệ.";
}

Trong ví dụ trên, biểu thức chính quy $pattern được sử dụng để kiểm tra xem chuỗi $email có phải là một địa chỉ email hợp lệ hay không. 
Nếu khớp, hàm preg_match sẽ trả về 1 và hiển thị thông báo "Địa chỉ email hợp lệ.". Nếu không khớp, hàm sẽ trả về 0 và hiển thị thông báo "Địa chỉ email không hợp lệ.".
=> hàm này ta sẽ truyền vào biểu thức chính quy và biến cần ktra xem có TM biểu thức chính quy đó ko 
-->