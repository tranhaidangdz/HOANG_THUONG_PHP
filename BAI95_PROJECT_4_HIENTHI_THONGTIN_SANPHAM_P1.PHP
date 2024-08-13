<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <style>
        .img {
            width: 50px;
        }
    </style>
</head>

<body>
    <!-- ta sẽ tạo cấu trúc 1 bảng: thead là dòng đầu của bảng, chứa tên các cột(đặt trong thẻ th=table header) -->
    <thead>
        <th>ID---</th>
        <th>---tên---</th>
        <th>---hình ảnh---</th>
        <th>---giá---</th>
        <th>---bảo hành---</th>
    </thead>
    <!-- phần thân bảng: chứa dữ liệu các ô của bảng (đặt trong thẻ td=table data) -->
    <tbody>
        <?php
        include "BAI94_PROJECT_3_KETNOI_DATABASE.php";
        $sql = "SELECT * FROM sanpham";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
        ?>
            <br>
            <tr>
                <td>
                    <?php echo $row['id'] ?>
                </td>
                <td>
                    <?php echo $row['name'] ?>
                </td>
                <td>
                    <img width="30px" height="40px" src="./project-img/<?php echo $row['image'] ?>" alt="">
                </td>
                <td>
                    <?php echo $row['price'] ?>
                </td>
                <td>
                    <?php echo $row['guarantee'] ?>
                </td>
                <span><a href="BAI97_PROJECT_6_XOA_SANPHAM.PHP?this_id=<?php echo $row['id'] ?>">Xóa</a></span>
                <!-- khi ta ấn nút xóa, nó sẽ gửi đến bài 97 và tạo ra 1 biến id= gtri id của sản phẩm -->
                <span><a href="BAI98_PROJECT_7_SUA_SANPHAM_p1.PHP?this_id=<?php echo $row['id'] ?>">Sửa</a></span>
                <!-- khi ta ấn nút Sửa, nó sẽ gửi đến bài 97 và tạo ra 1 biến id= gtri id của sản phẩm -->
                <br>
            </tr>
        <?php } ?>

    </tbody>
    <div>
        <a href="BAI96_PROJECT_5_THEM_SANPHAM.PHP">
            <h3>Thêm sản phẩm</h3>
        </a>
    </div>
</body>

</html>