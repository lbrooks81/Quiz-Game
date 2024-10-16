<?php

if (session_status() != PHP_SESSION_ACTIVE)
{
    session_start();
}


if(isset($_SESSION['answers']) === false)
{
    $_SESSION['answers'] = [];
}

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    /// Retrieve user's answers
    $answer1 = htmlentities($_POST['q1']);
    $answer2 = htmlentities($_POST['q2']);
    $answer3 = htmlentities($_POST['q3']);
    $answer4 = htmlentities($_POST['q4']);
    $answer5 = htmlentities($_POST['q5']);

    /* TODO
        Create variables with correct answers
        Calculate & display user score
     */

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
        <label for="question-1">What gets bigger the more you take away?</label>
        <input class="input-group" id="question-1" name="q1">

        <label></label>
        <input class="input-group" id="question-2" name="q2">

        <label></label>
        <input class="input-group" id="question-3" name="q3">

        <label></label>
        <input class="input-group" id="question-4" name="q4">

        <div class="form-check">
            <input type="radio" class="form-check-input"
                   name="q5" id="" value=""/>
            <label class="form-check-label" for="">
            </label>
        </div>

        <div class="form-check">
            <input type="radio" class="form-check-input"
                   name="q5" id="" value=""/>
            <label class="form-check-label" for="">
            </label>
        </div>

        <div class="form-check">
            <input type="radio" class="form-check-input"
                   name="q5" id="" value=""/>
            <label class="form-check-label" for="">
            </label>
        </div>

        <div class="form-check">
            <input type="radio" class="form-check-input"
                   name="q5" id="" value=""/>
            <label class="form-check-label" for="">
            </label>
        </div>

        
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>