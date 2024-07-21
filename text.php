<?php
session_start();
include('./connect.php');
$sql = "SELECT * FROM cart";
$query = mysqli_query($mysqli,$sql);
$last_id = mysqli_insert_id($mysqli);
echo $last_id;
mysqli_fetch_array($query);

     foreach($query as $key => $value){
        echo $value['cart_id'] ."<br>";
     }


?>