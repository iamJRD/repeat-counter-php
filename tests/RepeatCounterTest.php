<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_no_repeat()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_string = "a";
            $input_check_repeat = "b";

            $result = $test_RepeatCounter->countRepeats($input_string, $input_check_repeat);

            $this->assertEquals("0", $result);
        }
    }
?>
