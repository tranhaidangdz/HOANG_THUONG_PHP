<!-- hôm nay ta sẽ đặt đk cho form, VD ng dùng ko nhập gì vào form đăng nhập đăng kí mà đã ấn Gửi
=> nó sẽ thông báo bắt ng dùng nhập dữ liệu 
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error {
        color: red;
    }
</style>

<body>
    <?php
    $nameError = "";  //ta có 1 biến thông báo ở đây, ban đầu chưa có gtri gì
    //bắt sự kiện
    if ($_SERVER["REQUEST_METHOD"] == "post") //nó ktra phương thức yêu cầu từ phía server có phải phương thức post ko 
    //  (tức là ktra ng dùng đã ấn nút submit chưa, tại vì khi nhấn thì phương thức post trong thẻ form đc hiểu là đã gửi )
    {
        if (empty($_POST['name']))  //ktra nếu ng dùng chưa nhập gì(chưa có gì trong biến name)
        {
            $nameError = "Không dc bỏ trống";  //thay đổi gtri nameError
        } else {
            echo $_POST['name'];  //nếu ng dùng có nhập thì ta in ra gtri vừa nhập đó
        }
    }
    ?>
    <!-- ta có 1 form HTML: -->
    <form action="BAI40_DIEUKIEN_FORM.HTML" method="post">
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

</body>

</html>