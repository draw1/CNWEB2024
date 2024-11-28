<?php
$sid = $_GET['sid'];

require_once 'connect.php';
$delete_sql = "DELETE FROM btvn1 WHERE id=$sid";

mysqli_query($conn, $delete_sql);

header("location: index.php");
exit();
