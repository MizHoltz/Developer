<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Catholic Family Feud</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Catholic Family Feud</h1>
    <h2>Name one of the Seven Sacrements</h2>
    <p>Score: <span id="score"><?php echo $_SESSION['score']; ?></span></p>
    <input type="text" id="answerInput" placeholder="Type your answer">
    <button onclick="submitAnswer()">Submit</button>
    <p id="result"></p>
    <script src="script.js"></script>
</body>

</html>