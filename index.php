<?php
require_once 'lib/Question.php';

if (session_status() != PHP_SESSION_ACTIVE)
{
    session_start();
}


if(isset($_SESSION['answers']) === false)
{
    $_SESSION['answers'] = [];
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = 0;

    $submitted = ['submit-btn'];

    /// Retrieve user's answers
    $q1_answers = ["A hole", "a hole", "Hole", "hole"];
    $answer1 = htmlentities($_POST['q1']);
    $question1 = new Question($answer1, $q1_answers);

    $q2_answers = ["The dictionary", "the dictionary", "A dictionary", "a dictionary", "Dictionary", "dictionary"];
    $answer2 = htmlentities($_POST['q2']);
    $question2 = new Question($answer2, $q2_answers);

    $q3_answers = ["A yardstick", "a yardstick", "Yardstick", "yardstick", "A yard stick", "a yard stick", "Yard stick", "yard stick"];
    $answer3 = htmlentities($_POST['q3']);
    $question3 = new Question($answer3, $q3_answers);

    $q4_answers = ["Short", "short"];
    $answer4 = htmlentities($_POST['q4']);
    $question4 = new Question($answer4, $q4_answers);

    $q5_answer = "time";
    $answer5 = htmlentities($_POST['q5']);
    $question5 = new Question($answer5, $q5_answer);

    $questions = [$question1, $question2, $q3_answers, $question4, $question5];


    /*foreach ($questions as $question)
    {
        $question->checkAnswer();
    }*/

    header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form method="post">
        <div id="q1-div">
            <label for="question-1">What gets bigger the more you take away?</label>
            <input class="input-group" id="question-1" name="q1">
            <?php if($question1->correct && isset($_SESSION['submit-btn'])):?>
            <p>Correct!</p>
            <?php elseif($question1->correct == false && isset($_SESSION['submit-btn'])):?>
            <p>Incorrect :( The answer was <?=$question1->correct_answers[0]?></p>
            <?php else:?>
            <?php endif;?>
        </div>

        <div id="q2-div">
            <label for=question-2>Where does today come before yesterday?</label>
            <input class="input-group" id="question-2" name="q2">
            <?php if($question2->correct && isset($_POST['submit-btn'])):?>
                <p>Correct!</p>
            <?php elseif($question2->correct == false && isset($_POST['submit-btn'])):?>
                <p>Incorrect :( The answer was <?=$question2->correct_answers[0]?></p>
            <?php else:?>
            <?php endif;?>
        </div>

        <div id="q3-div">
            <label for="question-3">What has three feet but cannot walk?</label>
            <input class="input-group" id="question-3" name="q3">
            <?php if($question3->correct && isset($_POST['submit-btn'])):?>
                <p>Correct!</p>
            <?php elseif($question3->correct == false && isset($_POST['submit-btn'])):?>
                <p>Incorrect :( The answer was <?=$question3->correct_answers[0]?></p>
            <?php else:?>
            <?php endif;?>
        </div>

        <div id="q4-div">
            <label for="question-4">What's a word that becomes shorter when you add letters to it?</label>
            <input class="input-group" id="question-4" name="q4">
            <?php if($question4->correct && isset($_POST['submit-btn'])):?>
                <p>Correct!</p>
            <?php elseif($question4->correct == false && isset($_POST['submit-btn'])):?>
                <p>Incorrect :( The answer was <?=$question4->correct_answers[0]?></p>
            <?php else:?>
            <?php endif;?>
        </div>

        <p>Until I am measured, I am not known. Yet how you miss me when I have flown. What am I?</p>
        <div id="q5-div">
            <div class="form-check">
                <input type="radio" class="form-check-input"
                       name="q5" id="time" value=""/>
                <label class="form-check-label" for="time">--m-
                </label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input"
                       name="q5" id="glubly" value=""/>
                <label class="form-check-label" for="glubly">g--b--
                </label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input"
                       name="q5" id="nonce" value=""/>
                <label class="form-check-label" for="nonce">-o---
                </label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input"
                       name="q5" id="jukebox" value=""/>
                <label class="form-check-label" for="jukebox">--k--o-
                </label>
            </div>
            <?php if($question5->correct && isset($_POST['submit-btn'])):?>
                <p>Correct!</p>
            <?php elseif($question5->correct == false && isset($_POST['submit-btn'])):?>
                <p>Incorrect :( The answer was <?=$question5->correct_answers?></p>
            <?php else:?>
            <?php endif;?>
        </div>
        
        <button class="btn btn-primary" id="submit-btn" name="submit-btn" type="submit">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>