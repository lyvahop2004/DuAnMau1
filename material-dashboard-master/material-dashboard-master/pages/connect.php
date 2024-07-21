<?php
$mysqli = new mysqli("localhost","root","donghai26012004","duanmau");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


// Hien thi ten cua database dang ket noi
// if ($result = $mysqli -> query("SELECT DATABASE()")) {
//   $row = $result -> fetch_row();
//   echo "Default database is " . $row[0];
//   $result -> close();
// }

?>