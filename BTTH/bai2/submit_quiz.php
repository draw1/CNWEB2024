<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quizz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$score = 0;
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $question_id = $row["id"];
    $correct_answers = explode(",", $row["correct_option"]);

    if (isset($_POST["q" . $question_id])) {
        $selected_answers = $_POST["q" . $question_id];

        if (empty(array_diff($selected_answers, $correct_answers)) && empty(array_diff($correct_answers, $selected_answers))) {
            $score++;
        }
    }
}

echo '<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Bài Thi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Kết Quả Bài Thi Trắc Nghiệm</h2>
        <div class="alert alert-info">
            <strong>Điểm của bạn là: </strong>' . $score . '/' . $result->num_rows . '
        </div>
        <a href="index.php" class="btn btn-primary btn-block">Quay lại</a>
    </div>
</body>
</html>';


$conn->close();
