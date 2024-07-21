<?php
include('./connect.php');
if (isset($_GET['id']) ) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE user_id = $id";

    $query = mysqli_query($mysqli,$sql);

    header('Location:account.php');
}


?>