<?php

    class RepeatCounter
    {
        function countRepeats($input_string, $input_check_repeat)
        {
            $count = 0;

            $wordsArray = explode(" ", $input_string);

            foreach ($wordsArray as $word) {
                if ($input_check_repeat == $word) {
                    $count = $count + 1;
                }
            }
            return $count;
        }
    }
?>
