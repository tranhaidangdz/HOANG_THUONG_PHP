<!-- ta sẽ code 1 form HTML chuyện dùng để nhận dữ liệu từ ng dùng rồi gửi nó đến file php để xử lý -->
<form action="BAI37_CODE_FORM_HTML.PHP" method="post" name="form">
    <!-- action="tên file php mà ta muốn gửi dữ liệu đến"
         method="post": phương thức sẽ dùng để lấy dữ liệu từ thẻ form html 
    -->
    <label>Username:</label>
    <input type="text" name="username">
    <br>

    <label>Password:</label>
    <input type="password" name="password">
    <!-- khi ta để type="password" thì khi ng dùng nhập gì vào input nó sẽ hiện chấm tròn để che đi mật khẩu -->
    <br>

    <label>Năm Sinh:</label>
    <input type="date">
    <!-- khi type="date" nó sẽ cho ta chọn ngày,tháng,năm -->
    <br>

    <label>Giới tính:</label>
    <!-- khi để type="radio" , ta lại có 2 thẻ cùng name => radio sẽ chỉ cho phép ta chọn 1 trong 2 thẻ này -->
    <input type="radio" value="nam" name="gioitinh">
    <input type="radio" value="nu" name="gioitinh">
    <!-- value chính là tên ta muốn đặt cho thẻ input đó,VD nút type=submit nếu ta muốn đặt tên khác ta sẽ để value="gửi" -->
    <br>

    <label>Bạn có đòng ý không?</label>
    <input type="checkbox" name="check" value="yes">
    <!-- check box thì cho phép ta có thể chọn nhiều lựa chọn, tương tự tên của nút checkbox ta dùng "value" để đặt -->
    <br>

    <label>quốc tịch</label>
    <select name="quoctich">
        <!-- nếu ta muốn có nhiều gtri để lựa chọn, ta dùng thẻ select để bọc các thẻ "option", "option" này
        chính là các gtri cho ta lựa chọn 
        -->
        <option value="vietnam">Việt Nam</option>
        <option value="trungquoc">Trung quốc</option>
        <option value="my">Mỹ</option>
    </select>
    <br>

    <label>Bình luận</label>
    <textarea name="binhluan">
       Nội dung bình luận 
       <!-- thẻ textarea khác với input là cho phép ta nhập nhiều dòng dữ liệu, còn thẻ input chỉ nhận vào dữ liệu ngắn thôi -->
    </textarea>
    <br>

    <input type="submit" value="gửi">
    <!-- nếu ta để type="submit" thì mặc định nút này tên submit, ta sẽ dùng value "gửi" để đổi tên nút -->

</form>