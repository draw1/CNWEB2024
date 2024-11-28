<?php

$id = $_GET['sid'];

require_once 'connect.php';

$edit_sql = "SELECT * FROM btvn1 WHERE id=$id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Sửa sản phẩm</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $id; ?>">
            <div class="mb-3 mt-3">
                <label for="sp" class="form-label">Sản phẩm</label>
                <input type="text" class="form-control" id="sp" value="<?php echo $row['sp'] ?>" name="sp" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá thành</label>
                <input type="text" class="form-control" id="price" value="<?php echo $row['price'] ?>" name="price" required>
            </div>
            <button type="submit" class="btn btn-success">Sửa</button>
        </form>
    </div>
</body>

</html>