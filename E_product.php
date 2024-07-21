<?php
session_start();
include('./connect.php');
// $user=[];
//giải thích nếu có $_SESSION['user'] thì sẽ gán $user = $_SESSION['user'] còn không có thì bằng rỗng
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
// $user = $_SESSION['user'];
?>
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
</style>

<?php
include('./connect.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE product_id = $id";

    $query = mysqli_query($mysqli, $sql);

    $data = mysqli_fetch_array($query);
}

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $quantity = $_POST['quantity'];
    $image1 = basename($_FILES['image1']['name']);
    $image2 = basename($_FILES['image2']['name']);
    $image3 = basename($_FILES['image3']['name']);
    $image4 = basename($_FILES['image4']['name']);
    $categoryID = $_POST['categoryID'];


//upload file

    $target_dir = "uploads/";
    $target_file = $target_dir . ($image1);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Kiểm tra file có phải là hình ảnh không hay là file khác
    // $check = getimagesize($_FILES["image1"]["tmp_name"]);
    // if ($check !== false) {
    //     $uploadOk = 1;
    // } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    // }

    // Kiểm tra file đã tồn tại hay chưa
    // if (file_exists($target_file)) {
    //     echo "File đã tồn tại ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // // Kiểm tra khối lượng của file
    // if ($_FILES["image1"]["size"] > 500000) {
    //     echo "File quá lớn ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // kiểm tra đuôi file
    // if (
    //     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //     && $imageFileType != "gif"
    // ) {
    //     echo "file không đúng định dạng sau JPG, JPEG, PNG & GIF <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // //upload file
    // if ($uploadOk == 0) {
    //     echo "file của bạn không được upload ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     // nếu mọi thứ vẫn ổn, bắt đầu tạo file
    // } else {
    //     if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
    //     } else {
    //         echo "Đã xảy ra lỗi khi tải ảnh của bạn <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     }
    // }

    //ảnh 2
    //upload file

    $target_dir = "uploads/";
    $target_file = $target_dir . ($image2);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Kiểm tra file có phải là hình ảnh không hay là file khác
    // $check = getimagesize($_FILES["image2"]["tmp_name"]);
    // if ($check !== false) {
    //     $uploadOk = 1;
    // } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    // }

    // // Kiểm tra file đã tồn tại hay chưa
    // if (file_exists($target_file)) {
    //     echo "File đã tồn tại ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // // Kiểm tra khối lượng của file
    // if ($_FILES["image2"]["size"] > 500000) {
    //     echo "File quá lớn ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // kiểm tra đuôi file
    // if (
    //     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //     && $imageFileType != "gif"
    // ) {
    //     echo "file không đúng định dạng sau JPG, JPEG, PNG & GIF <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // //upload file
    // if ($uploadOk == 0) {
    //     echo "file của bạn không được upload ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     // nếu mọi thứ vẫn ổn, bắt đầu tạo file
    // } else {
    //     if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file)) {
    //     } else {
    //         echo "Đã xảy ra lỗi khi tải ảnh của bạn <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     }
    // }

    //ảnh3
    //upload file

    $target_dir = "uploads/";
    $target_file = $target_dir . ($image3);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Kiểm tra file có phải là hình ảnh không hay là file khác
    // $check = getimagesize($_FILES["image3"]["tmp_name"]);
    // if ($check !== false) {
    //     $uploadOk = 1;
    // } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    // }

    // Kiểm tra file đã tồn tại hay chưa
    // if (file_exists($target_file)) {
    //     echo "File đã tồn tại ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // // Kiểm tra khối lượng của file
    // if ($_FILES["image3"]["size"] > 500000) {
    //     echo "File quá lớn ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // kiểm tra đuôi file
    // if (
    //     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //     && $imageFileType != "gif"
    // ) {
    //     echo "file không đúng định dạng sau JPG, JPEG, PNG & GIF <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // //upload file
    // if ($uploadOk == 0) {
    //     echo "file của bạn không được upload ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     // nếu mọi thứ vẫn ổn, bắt đầu tạo file
    // } else {
    //     if (move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file)) {
    //     } else {
    //         echo "Đã xảy ra lỗi khi tải ảnh của bạn <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     }
    // }
    //ảnh4
    //upload file

    $target_dir = "uploads/";
    $target_file = $target_dir . ($image4);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Kiểm tra file có phải là hình ảnh không hay là file khác
    // $check = getimagesize($_FILES["image4"]["tmp_name"]);
    // if ($check !== false) {
    //     $uploadOk = 1;
    // } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    // }

    // Kiểm tra file đã tồn tại hay chưa
    // if (file_exists($target_file)) {
    //     echo "File đã tồn tại ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // // Kiểm tra khối lượng của file
    // if ($_FILES["image4"]["size"] > 500000) {
    //     echo "File quá lớn ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // kiểm tra đuôi file
    // if (
    //     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //     && $imageFileType != "gif"
    // ) {
    //     echo "file không đúng định dạng sau JPG, JPEG, PNG & GIF <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     $uploadOk = 0;
    //     return;
    // }

    // //upload file
    // if ($uploadOk == 0) {
    //     echo "file của bạn không được upload ! <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     // nếu mọi thứ vẫn ổn, bắt đầu tạo file
    // } else {
    //     if (move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file)) {
    //     } else {
    //         echo "Đã xảy ra lỗi khi tải ảnh của bạn <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     }
    // }


    if (trim($name) == "" || trim($description) == "" ||  trim($price) == "" || trim($status) == "" || trim($quantity) == "" || trim($description) == ""){
        echo "Vui lòng nhập đầy đủ thông tin cần sửa";
    } else {
        $sql1 = "UPDATE products SET product_name = '$name', product_description = '$description', product_price = '$price', product_image_main = '$image1', product_image_first = '$image2',product_image_second = '$image3',product_image_third = '$image4',product_quantity = '$quantity', product_status = '$status', category_id ='$categoryID'  WHERE product_id = $id";
        $query1 = mysqli_query($mysqli, $sql1);
        if ($query1) {
            echo "Cập nhập thành công !";
            header('Location:product.php');
        } else {
            echo "Cập nhập thất bại!";
        }
    }
}

?>

<div class="container">
    <div class="row">
        <?php
        include('./layout/nav-cate.php');

        $sqlCate = "SELECT * FROM categories";
        $queryCate = mysqli_query($mysqli, $sqlCate);

 
        ?>
        <div class="col col-lg-4">
            <h3>Edit Product</h3>
            <form class="category form-inline" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="name" value="<?php echo $data['product_name']; ?>">
                    <input type="file" class="form-control" name="image1" value="<?php echo $data['product_image_main']; ?>">
                    <input type="file" class="form-control" name="image2" value="<?php echo $data['product_image_first']; ?>">
                    <input type="file" class="form-control" name="image3" value="<?php echo $data['product_image_second']; ?>">
                    <input type="file" class="form-control" name="image4" value="<?php echo $data['product_image_third']; ?>">
                    <input type="text" class="form-control" name="status" value="<?php echo $data['product_status']; ?>">
                    <input type="text" class="form-control" name="quantity" value="<?php echo $data['product_quantity']; ?>">
                    <input type="text" class="form-control" name="price" value="<?php echo $data['product_price']; ?>"><br>
                    <textarea type="text" class="form-control" rows="10" cols="50" name="description"><?php echo $data['product_description']; ?></textarea>
                    <label class="khoangCach" for="category">Category:</label>
                    <select name="categoryID" id="categoryID">
                        <? foreach ($queryCate as $key => $value) { ?>
                            <option value="<?php echo$value['category_id']; ?>"><? echo $value['category_name']; ?></option>
                            <!-- Thêm các tùy chọn category khác nếu cần -->
                        <? } ?>
                    </select><br><br>
                    <button type="submit" class="btn btn-success form-group mb-2" name="edit">Edit</button>
                </div>

            </form>
        </div>
    </div>