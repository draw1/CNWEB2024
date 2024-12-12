<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quizz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trắc Nghiệm</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-4">
            <h2 class="text-center">Bài Thi Trắc Nghiệm</h2>
            <form action="submit_quiz.php" method="post">';

    while ($row = $result->fetch_assoc()) {
        echo "<div class='form-group'>";
        echo "<p><strong>" . $row["question"] . "</strong></p>";

        echo "<div class='form-check'>
                <input class='form-check-input' type='checkbox' name='q" . $row["id"] . "[]' value='A'>
                <label class='form-check-label'>" . $row["option_a"] . "</label>
              </div>";

        echo "<div class='form-check'>
                <input class='form-check-input' type='checkbox' name='q" . $row["id"] . "[]' value='B'>
                <label class='form-check-label'>" . $row["option_b"] . "</label>
              </div>";

        echo "<div class='form-check'>
                <input class='form-check-input' type='checkbox' name='q" . $row["id"] . "[]' value='C'>
                <label class='form-check-label'>" . $row["option_c"] . "</label>
              </div>";

        echo "<div class='form-check'>
                <input class='form-check-input' type='checkbox' name='q" . $row["id"] . "[]' value='D'>
                <label class='form-check-label'>" . $row["option_d"] . "</label>
              </div>";
        echo "</div><br>";
    }

    echo "<button type='submit' class='btn btn-primary btn-block'>Nộp Bài</button>";
    echo "</form>
        </div>
    </body>
    </html>";
} else {
    echo "Không có câu hỏi!";
}

$conn->close();
