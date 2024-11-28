<?php
include 'db.php';

$sql = "SELECT * FROM flowers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách hoa</title>
    <style>
        .flower-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px;
            padding: 15px;
            width: 300px;
            text-align: center;
            display: inline-block;
        }
        img {
            width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1>Danh sách các loài hoa</h1>
    <div id="flower-list">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="flower-card">
                <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                <h2><?php echo $row['name']; ?></h2>
                <p><?php echo $row['description']; ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
