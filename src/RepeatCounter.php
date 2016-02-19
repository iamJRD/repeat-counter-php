<?php

    class RepeatCounter
    {
        private $string_input;
        private $word_input;

        function __construct($inputted_string, $inputted_check_word)
        {
            $this->string = $inputted_string;
            $this->check_word = $inputted_check_word;
        }

        function setString($new_string_input)
        {
            $this->string = $new_string_input;
        }

        function getString()
        {
            $this->string;
        }

        function setCheckWord($new_word_input)
        {
            $this->word_input = $new_word_input;
        }

        function getCheckWord()
        {
            $this->word_input;
        }

        function countRepeats($string_input, $word_input)
        {
            $count = 0;

            $onlyAlphaInputString = preg_replace("/[^A-Za-z ]/", "", $string_input);
            $onlyAlphaInputCheckRepeat = preg_replace("/[^A-Za-z ]/", "", $word_input);

            $lowerInputString = strtolower($onlyAlphaInputString);
            $lowerInputCheckRepeat = strtolower($onlyAlphaInputCheckRepeat);

            $wordsArray = explode(" ", $lowerInputString);

            foreach ($wordsArray as $word) {
                if ($lowerInputCheckRepeat == $word) {
                    $count = $count + 1;
                }
            }
            return $count;
        }
    }
?>
