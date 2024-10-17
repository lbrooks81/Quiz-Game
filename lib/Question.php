<?php

class Question
{
    public $answer;
    public $correct_answers;
    public $correct;
    function __construct($answer, $correct_answers)
    {
        $this->answer = $answer;
        $this->correct_answers = $correct_answers;
    }

    function checkAnswer()
    {
        if(in_array($this->answer, $this->correct_answers))
        {
            $this->correct = true;
            return;
        }
        $this->correct = false;
    }
}


