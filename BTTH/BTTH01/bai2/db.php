<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quizz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$file = fopen("Quiz.txt", "r");

$question = "";
$options = [];
$correct_answers = [];

while ($line = fgets($file)) {
    if (strpos($line, "ANSWER:") !== false) {

        $answers = trim(substr($line, 8));
        $correct_answers = explode(",", $answers);

        $stmt = $conn->prepare("INSERT INTO questions (question, option_A, option_B, option_C, option_D, correct_option) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $question, $options[0], $options[1], $options[2], $options[3], implode(",", $correct_answers));
        $stmt->execute();

        $question = "";
        $options = [];
        $correct_answers = [];
    } elseif (strpos($line, "ANSWER:") === false) {
        if (empty($question)) {
            $question = trim($line);
        } else {
            $options[] = trim($line);
        }
    }
}


fclose($file);

echo "Dữ liệu đã được nhập thành công.";

$conn->close();
