<?php
session_start();
include('./connect.php');
// $user=[];
//giải thích nếu có $_SESSION['user'] thì sẽ gán $user = $_SESSION['user'] còn không có thì bằng rỗng
$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
// $user = $_SESSION['user'];


if(isset($_POST['name'])){
    $name = $_POST['name'];
    if($name == ""){
        echo"Vui lòng nhập đầy đủ thông tin <a href='javascript: history.go(-1)'>Trở lại</a>";
        return;
    }
    //Thêm danh mục vào db
    $sql = "INSERT INTO categories(category_name) VALUES('$name')";
    $addCate = mysqli_query($mysqli,$sql);
}

$sql1 = "SELECT * FROM categories";
$category = mysqli_query($mysqli,$sql1);


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
<style>
    .category {
        display: flex;
        justify-content: start;
    }

    .category button {
        margin-left: 30px;
    }
</style>


<div class="container">
    <div class="row">
        <?php
        include('./layout/nav-dash.php');
        ?>
        <div class="col col-lg-4">
            <h3>Add Category</h3>
            <form class="category form-inline" action=" ./categories.php" method="POST">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="name" placeholder="Enter your name categories">
                </div>
                <button type="submit" class="btn btn-success form-group mb-2">create</button>
            </form>
        </div>
        <div class="col col-lg-8">
        <table class="table">
                <thead>
                <h3>List Categories</h3>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($category as $key => $value) :
                    ?>
                    <tr>
                        <td scope="row"><?php echo $value['category_id']?></td>
                        <td><?php echo $value['category_name']?></td>
                        <td>
                        <a class="btn btn-danger"href="D_categories.php?id=<?php echo $value['category_id']?>">Delete</a>
                        <a class="btn btn-primary" href="E_categories.php?id=<?php echo $value['category_id']?>">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    
                </tbody>
            </table>

            
        </div>
    </div>
</div>




