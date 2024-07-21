

<?php
session_start();
include('./connect.php');
// $user=[];
//giải thích nếu có $_SESSION['user'] thì sẽ gán $user = $_SESSION['user'] còn không có thì bằng rỗng
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
// $user = $_SESSION['user'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $quantity = $_POST['quantity'];
    $categoryID = $_POST['categoryID'];
    $image1 = basename($_FILES['image1']['name']);
    $image2 = basename($_FILES['image2']['name']);
    $image3 = basename($_FILES['image3']['name']);
    $image4 = basename($_FILES['image4']['name']);

    if (trim($name) == "" || trim($description) == "" ||  trim($price) == "" || $image1 == "" || $image2 == "" || $image3 == "" || $image4 == "" || trim($status) == "" || trim($quantity) == "" || trim($description) == "") {
        echo "Vui lòng nhập đầy đủ thông tin <a href='javascript: history.go(-1)'>Trở lại</a>";
        return;
    }
    //upload file

    $target_dir = "uploads/";
    $target_file = $target_dir . ($image1);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Kiểm tra file có phải là hình ảnh không hay là file khác
    $check = getimagesize($_FILES["image1"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Kiểm tra file đã tồn tại hay chưa
    if (file_exists($target_file)) {
        echo "File đã tồn tại ! <a href='javascript: history.go(-1)'>Trở lại</a>";
        $uploadOk = 0;
        return;
    }

    // // Kiểm tra khối lượng của file
    // if ($_FILES["image1"]["size"] > 500000) {
    //     echo "File quá lớn ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // kiểm tra đuôi file
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "file không đúng định dạng sau JPG, JPEG, PNG & GIF <a href='javascript: history.go(-1)'>Trở lại</a>";
        $uploadOk = 0;
        return;
    }

    //upload file
    if ($uploadOk == 0) {
        echo "file của bạn không được upload ! <a href='javascript: history.go(-1)'>Trở lại</a>";
        // nếu mọi thứ vẫn ổn, bắt đầu tạo file
    } else {
        if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
        } else {
            echo "Đã xảy ra lỗi khi tải ảnh của bạn <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
    }

    //ảnh 2
    //upload file

    $target_dir = "uploads/";
    $target_file = $target_dir . ($image2);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Kiểm tra file có phải là hình ảnh không hay là file khác
    $check = getimagesize($_FILES["image2"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Kiểm tra file đã tồn tại hay chưa
    if (file_exists($target_file)) {
        echo "File đã tồn tại ! <a href='javascript: history.go(-1)'>Trở lại</a>";
        $uploadOk = 0;
        return;
    }

    // // Kiểm tra khối lượng của file
    // if ($_FILES["image2"]["size"] > 500000) {
    //     echo "File quá lớn ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // kiểm tra đuôi file
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "file không đúng định dạng sau JPG, JPEG, PNG & GIF <a href='javascript: history.go(-1)'>Trở lại</a>";
        $uploadOk = 0;
        return;
    }

    //upload file
    if ($uploadOk == 0) {
        echo "file của bạn không được upload ! <a href='javascript: history.go(-1)'>Trở lại</a>";
        // nếu mọi thứ vẫn ổn, bắt đầu tạo file
    } else {
        if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file)) {
        } else {
            echo "Đã xảy ra lỗi khi tải ảnh của bạn <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
    }

    //ảnh3
    //upload file

    $target_dir = "uploads/";
    $target_file = $target_dir . ($image3);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Kiểm tra file có phải là hình ảnh không hay là file khác
    $check = getimagesize($_FILES["image3"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Kiểm tra file đã tồn tại hay chưa
    if (file_exists($target_file)) {
        echo "File đã tồn tại ! <a href='javascript: history.go(-1)'>Trở lại</a>";
        $uploadOk = 0;
        return;
    }

    // // Kiểm tra khối lượng của file
    // if ($_FILES["image3"]["size"] > 500000) {
    //     echo "File quá lớn ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // kiểm tra đuôi file
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "file không đúng định dạng sau JPG, JPEG, PNG & GIF <a href='javascript: history.go(-1)'>Trở lại</a>";
        $uploadOk = 0;
        return;
    }

    //upload file
    if ($uploadOk == 0) {
        echo "file của bạn không được upload ! <a href='javascript: history.go(-1)'>Trở lại</a>";
        // nếu mọi thứ vẫn ổn, bắt đầu tạo file
    } else {
        if (move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file)) {
        } else {
            echo "Đã xảy ra lỗi khi tải ảnh của bạn <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
    }
    //ảnh4
    //upload file

    $target_dir = "uploads/";
    $target_file = $target_dir . ($image4);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Kiểm tra file có phải là hình ảnh không hay là file khác
    $check = getimagesize($_FILES["image4"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Kiểm tra file đã tồn tại hay chưa
    if (file_exists($target_file)) {
        echo "File đã tồn tại ! <a href='javascript: history.go(-1)'>Trở lại</a>";
        $uploadOk = 0;
        return;
    }

    // // Kiểm tra khối lượng của file
    // if ($_FILES["image4"]["size"] > 500000) {
    //     echo "File quá lớn ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // kiểm tra đuôi file
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "file không đúng định dạng sau JPG, JPEG, PNG & GIF <a href='javascript: history.go(-1)'>Trở lại</a>";
        $uploadOk = 0;
        return;
    }

    //upload file
    if ($uploadOk == 0) {
        echo "file của bạn không được upload ! <a href='javascript: history.go(-1)'>Trở lại</a>";
        // nếu mọi thứ vẫn ổn, bắt đầu tạo file
    } else {
        if (move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file)) {
        } else {
            echo "Đã xảy ra lỗi khi tải ảnh của bạn <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
    }


    $sql = "INSERT INTO products (product_name, product_image_main,product_image_first,product_image_second,product_image_third, product_quantity, product_status , product_description,product_price, category_id)
    VALUES ('{$name}', '{$image1}','{$image2}','{$image3}','{$image4}','{$quantity}', '{$status}', '{$description}', '{$price}','{$categoryID}')";
    $query = mysqli_query($mysqli, $sql);

    if ($query) {
        echo "Thêm thành công !";
    } else {
        echo "Thất bại !";
    }
}

$sql1 = "SELECT * FROM products";
$data = mysqli_query($mysqli, $sql1);
?>
<script
      src="https://kit.fontawesome.com/91ad5c6d6a.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">

<style>
    .category {
        display: flex;
        justify-content: start;
    }

    .category button {
        margin-left: 0px;
    }
    .btn-go {
  font-size: 18px;
  display: inline-block;
  outline: 0;
  border: 0;
  cursor: pointer;
  will-change: box-shadow, transform;
  background: aqua;
  padding: 0 2em;
  border-radius: 0.3em;
  color: #fff;
  height: 2.6em;
  transition: box-shadow 0.15s ease, transform 0.15s ease;
}

.btn-go {
  position: fixed;
  right: 0;
  top: 90%;
  transform: translate(-50%, -50%);
}
</style>


<div class="container">
    <div class="row">
        <?php
        include('./layout/nav-dash.php');
        $sqlCate = "SELECT * FROM categories";
        $queryCate = mysqli_query($mysqli, $sqlCate);
        ?>
        <?php

        ?>
        <div class="col col-lg-3">
            <h3 id="header">Add Product</h3>
            <form class="category form-inline" action=" ./product.php" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="name" placeholder="Enter your name product" ><br>
                    <input type="file" class="form-control" name="image1" placeholder="Choose your image"><br>
                    <input type="file" class="form-control" name="image2" placeholder="Choose your image"><br>
                    <input type="file" class="form-control" name="image3" placeholder="Choose your image"><br>
                    <input type="file" class="form-control" name="image4" placeholder="Choose your image"><br>
                    <input type="text" class="form-control" name="quantity" placeholder="Enter your quantity product"><br>
                    <input type="text" class="form-control" name="status" placeholder="Enter your status"><br>
                    <input type="text" class="form-control" name="price" placeholder="Enter your price product"><br>
                    <input type="text" class="form-control" name="description" placeholder="Enter your name description "><br>
                    <label class="khoangCach" for="category">Category:</label>
                    <select name="categoryID" id="categoryID">
                        <? foreach ($queryCate as $key => $value) { ?>
                            <option value="<?php echo$value['category_id']; ?>"><? echo $value['category_name']; ?></option>
                            <!-- Thêm các tùy chọn category khác nếu cần -->
                        <? } ?>
                    </select><br><br>
                    <button type="submit" class="btn btn-success form-group mb-2" name="submit">Create</button>
                </div>

            </form>
        </div>

        <div class="col col-lg-9">
            <table class="table">
                <thead>
                    <h3>List Account</h3>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image main</th>
                        <th scope="col">Image first</th>
                        <th scope="col">Image second</th>
                        <th scope="col">Image third</th>
                        <th scope="col">Quantiy</th>
                        <th scope="col">Status</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Truy vấn cơ sở dữ liệu để lấy danh sách sản phẩm trong category
                    $sql2 = "SELECT * FROM products INNER JOIN categories ON products.category_id = categories.category_id";
                    // Thực thi truy vấn
                    $data1 = mysqli_query($mysqli, $sql2);
                    foreach ($data1 as $key => $value) :
                    ?>
                        <tr class="justify-content-center">
                            <td><?php echo $value['product_id'] ?></td>
                            <td><?php echo $value['product_name'] ?></td>
                            <td><?php echo "<img src='./uploads/" . $value['product_image_main'] . "'width='100'>"; ?></td>
                            <td><?php echo "<img src='./uploads/" . $value['product_image_first'] . "'width='100'>"; ?></td>
                            <td><?php echo "<img src='./uploads/" . $value['product_image_second'] . "'width='100'>"; ?></td>
                            <td><?php echo "<img src='./uploads/" . $value['product_image_third'] . "'width='100'>"; ?></td>
                            <td><?php echo $value['product_quantity'] ?></td>
                            <td><?php echo $value['product_status'] ?></td>
                            <td><?php echo $value['product_price'] ?></td>
                            <td><?php echo $value['product_description'] ?></td>
                            <td><?php echo $value['category_name'] ?></td>
                            <td>
                                <a class="btn btn-danger" href="D_product.php?id=<?php echo $value['product_id'] ?>">Delete</a>
                                <a class="btn btn-primary" href="E_product.php?id=<?php echo $value['product_id'] ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="#header" class="btn-go"><i class="fa-solid fa-arrow-up" style="margin-top:15px"></i></a>

        </div>
        <script src="script.js"></script>