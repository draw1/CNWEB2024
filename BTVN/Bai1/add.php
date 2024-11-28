<?php
//nhận dữ liệu
$sp = $_POST['sp'];
$gt = $_POST['price'];
//kết nối csdl
require_once 'connect.php';

$addsql = "INSERT INTO btvn1
(sp, price) VALUES ('$sp','$gt')";

//thực thi câu lệnh thêm
if (mysqli_query($conn, $addsql)) {
    header("location: index.php");
    exit();
};
