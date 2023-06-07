<?php
declare(strict_types=1);

class Question {
    private string $questionText;
    private array $answerChoices;
    private string $correctAnswer;

    public function __construct(string $questionText, array $answerChoices, string $correctAnswer) {
        $this->questionText = $questionText;
        $this->answerChoices = $answerChoices;
        $this->correctAnswer = $correctAnswer;
    }

    public function getQuestionText(): string {
        return $this->questionText;
    }

    public function getAnswerChoices(): array {
        return $this->answerChoices;
    }

    public function getCorrectAnswer(): string {
        return $this->correctAnswer;
    }

    public function randomizeAnswerChoices(): void {
        shuffle($this->answerChoices);
    }
}

$questions = [];

$questions[0] = new Question(
    "What is the capital of Australia?",
    ["Canberra", 
    "Sydney", 
    "Melbourne"],
    "Canberra"
);

$questions[0]->randomizeAnswerChoices();

$questions[1] = new Question(
    "Which country is known as 'The land of Volcanoes'?",
    ["El Salvador", 
    "Peru", 
    "Chile"],
    "El Salvador"
);

$questions[1]->randomizeAnswerChoices();

$questions[2] = new Question(
    "What is the longest river in the world?",
    ["Nile", 
    "Amazon",
     "Mississippi"],
    "Nile"
);

$questions[2]->randomizeAnswerChoices();

$questions[3] = new Question(
    "Which mountain is the tallest in the world?",
    ["Mount Everest", 
    "K2", 
    "Kangchenjunga"],
    "Mount Everest"
);

$questions[3]->randomizeAnswerChoices();

$questions[4] = new Question(
    "Which ocean is the largest?",
    ["Pacific Ocean", 
    "Atlantic Ocean", 
    "Indian Ocean"],
    "Pacific Ocean"
);

$questions[4]->randomizeAnswerChoices();

?>