<?php
session_start();
include('./connect.php');
// $user=[];
//giải thích nếu có $_SESSION['user'] thì sẽ gán $user = $_SESSION['user'] còn không có thì bằng rỗng
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
// $user = $_SESSION['user'];


if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (!$username || !$password || !$email )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $pass = password_hash($password, PASSWORD_DEFAULT);

    //Check username đã có người dùng hay chưa
    $queryUsername = ("SELECT username FROM users WHERE username='$username'");
    $query1 = mysqli_query($mysqli, $queryUsername); //ham nay chua 2 bien 1 bien ket noi va 1 bien chua cau truy van

    if (mysqli_num_rows($query1) > 0) {
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra email đã có người dùng chưa
    $queryEmail = ("SELECT gmail FROM users WHERE gmail='$email'");
    $query2 = mysqli_query($mysqli, $queryEmail);
    if (mysqli_num_rows($query2) > 0) {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Lưu thông tin thành viên vào bảng
    $queryThongTin = ("
            INSERT INTO users (
                username,
                password,
                gmail
            )
            VALUE (
                '{$username}',
                '{$pass}',
                '{$email}'
            )
        ");
    $addUser = mysqli_query($mysqli, $queryThongTin);

    //Thông báo quá trình lưu
    if ($addUser) {
        echo"Them thanh cong !";
    } else {
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
    }
}

$sql1 = "SELECT * FROM users";
$data = mysqli_query($mysqli, $sql1);



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


<div class="container">
    <div class="row">
        <?php
        include('./layout/nav-dash.php');
        ?>
        <div class="col col-lg-3">
            <h3>Add Account</h3>
            <form class="category form-inline" action=" ./account.php" method="POST">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="username" placeholder="Enter your username"><br>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password"><br>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email"><br>
                    <button type="submit" class="btn btn-success form-group mb-2">Create</button>
                </div>

            </form>
        </div>
        <div class="col col-lg-9">
            <table class="table">
                <thead>
                    <h3>List Account</h3>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">username</th>
                        <!-- <th scope="col">password</th> -->
                        <th scope="col">email</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $key => $value) :
                    ?>
                        <tr>
                            <td scope="row"><?php echo $value['user_id'] ?></td>
                            <td><?php echo $value['username'] ?></td>
                            <!-- <td><?php echo $value['password'] ?></td> -->
                            <td><?php echo $value['gmail'] ?></td>
                            <td>
                                <a class="btn btn-danger" href="D_acc.php?id=<?php echo $value['user_id'] ?>">Delete</a>
                                <a class="btn btn-primary" href="E_acc.php?id=<?php echo $value['user_id'] ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>


        </div>
    </div>
</div>