<?php

    class RepeatCounter
    {
        function countRepeats($input_string, $input_check_repeat)
        {
            $count = 0;

            $onlyAlphaInputString = preg_replace("/[^A-Za-z ]/", "", $input_string);
            $onlyAlphaInputCheckRepeat = preg_replace("/[^A-Za-z ]/", "", $input_check_repeat);

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
