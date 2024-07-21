
<?php
include('./connect.php');
if (isset($_GET['id']) ) {
    $id = $_GET['id'];

    $sql = "DELETE FROM categories WHERE category_id = $id";

    $query = mysqli_query($mysqli,$sql);

    header('Location:categories.php');
}


?>
