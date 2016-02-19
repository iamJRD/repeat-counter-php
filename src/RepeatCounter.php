<?php

    class RepeatCounter
    {
        function countRepeats($input_string, $input_check_repeat)
        {
            $count = 0;

            if ($input_string == $input_check_repeat) {
                $count = $count + 1;
            }
            return $count;
        }
    }
?>
