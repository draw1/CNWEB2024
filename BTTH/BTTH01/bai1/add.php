<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = 'image/' . $_FILES['image']['name'];

    // Upload file ảnh
    move_uploaded_file($_FILES['image']['tmp_name'], $image);

    $sql = "INSERT INTO flowers (name, description, image) VALUES ('$name', '$description', '$image')";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Lỗi khi thêm hoa: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm hoa mới</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Thêm hoa mới</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="name">Tên hoa:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Mô tả:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="image">Ảnh:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <button type="submit" class="btn btn-success">Thêm hoa</button>
    </form>
</body>
</html>
