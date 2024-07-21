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
if (isset($_GET['id']) ) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE user_id = $id";

    $query = mysqli_query($mysqli,$sql);

    $data = mysqli_fetch_array($query);
}

if(isset($_POST['username']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    if($username == "" && $email == ""){
        echo"Vui lòng nhập tên or email cần sửa";
    }
    else{
        $sql1 = "UPDATE users SET username = '$username',gmail = '$email' WHERE user_id = $id";
        $query1 = mysqli_query($mysqli,$sql1);
        header('Location:account.php');
    }
}

?>

<div class="container">
    <div class="row">
        <?php
        include('./layout/nav-acc.php');
        ?>
        <div class="col col-lg-4">
            <h3>Edit Acc</h3>
            <form class="category form-inline" action="" method="POST">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="username" value="<?php echo$data['username'];?>"><br>
                    <input type="email" class="form-control" name="email" value="<?php echo$data['gmail'];?>"><br>
                    <button type="submit" class="btn btn-success form-group mb-2" name="edit">Edit</button>
                </div>
                
            </form>
        </div>
</div>