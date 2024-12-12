<?php
include 'db.php';

// Lấy thông tin hoa để chỉnh sửa
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM flowers WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $flower = $result->fetch_assoc();
    } else {
        echo "Hoa không tồn tại!";
        exit();
    }
}

// Cập nhật thông tin hoa sau khi chỉnh sửa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $flower['image'];

    // Kiểm tra nếu có tải ảnh mới
    if (!empty($_FILES['image']['name'])) {
        $image = 'images/' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    $sql = "UPDATE flowers SET name = '$name', description = '$description', image = '$image' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Lỗi khi cập nhật hoa: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa hoa</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Chỉnh sửa thông tin hoa</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="name">Tên hoa:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $flower['name']; ?>" required><br><br>

        <label for="description">Mô tả:</label><br>
        <textarea id="description" name="description" required><?php echo $flower['description']; ?></textarea><br><br>

        <label for="image">Ảnh hiện tại:</label><br>
        <img src="<?php echo $flower['image']; ?>" width="200"><br><br>

        <label for="image">Chọn ảnh mới (nếu muốn thay đổi):</label><br>
        <input type="file" id="image" name="image" accept="image/*"><br><br>

        <button type="submit" class="btn btn-success">Sửa hoa</button>
    </form>
</body>
</html>
