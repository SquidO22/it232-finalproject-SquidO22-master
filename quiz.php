<?php
require_once 'quiz.inc';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php'; ?>
<form action='process_answers.php' method='POST'>
<?php 
foreach ($questions as $questionIndex => $question) {
    echo "<h3>" . $question->getQuestionText() . "</h3>";
    $answerChoices = $question->getAnswerChoices();
    foreach ($answerChoices as $choiceIndex => $choice) {
        echo "<input type='radio' id='question{$questionIndex}Choice{$choiceIndex}' name='answers[$questionIndex]' value='" . htmlspecialchars($choice, ENT_QUOTES) . "'>";
        echo "<label for='question{$questionIndex}Choice{$choiceIndex}'>" . htmlspecialchars($choice, ENT_QUOTES) . "</label><br>";
    }
    echo "<br>";
}
?>
<input type='submit' value='Submit'>
</form>
<?php include 'footer.php'; ?>
    </body>
</html>
