<?php
//nhận dữ liệu
$sp = $_POST['sp'];
$gt = $_POST['price'];
$id = $_POST['sid'];
//kết nối csdl
require_once 'connect.php';

$updatesql = "UPDATE btvn1 SET sp='$sp', price= '$gt' WHERE id=$id";

//echo $themsql; exit;

//thực thi câu lệnh thêm
if (mysqli_query($conn, $updatesql)) {
    header("location: index.php");
    exit();
};
