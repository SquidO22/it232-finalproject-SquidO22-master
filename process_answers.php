<?php
declare(strict_types=1);

require_once 'quiz.inc';

$submittedAnswers = filter_input(INPUT_POST, 'answers', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
//$_POST['answers'] ?? [];

$score = 0;

foreach ($submittedAnswers as $index => $submittedAnswer) {
    $correctAnswer = $questions[$index]->getCorrectAnswer();


    if ($submittedAnswer === $correctAnswer) {
        $score++;
     }
}

$totalQuestions = count($questions);


$percentageScore = ($score / $totalQuestions) * 100;

header("Location: results.php?score=$percentageScore");
exit();
?>