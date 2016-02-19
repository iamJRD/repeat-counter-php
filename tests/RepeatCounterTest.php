<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_no_repeat()
        {
            $string_input = "a";
            $word_input = "b";
            $test_RepeatCounter = new RepeatCounter("a", "b");

            $result = $test_RepeatCounter->countRepeats($string_input, $word_input);

            $this->assertEquals("0", $result);
        }

        function test_one_repeat_one_word_string()
        {
            $string_input = "a";
            $word_input = "a";
            $test_RepeatCounter = new RepeatCounter("a", "a");

            $result = $test_RepeatCounter->countRepeats($string_input, $word_input);

            $this->assertEquals("1", $result);
        }

        function test_one_repeat_multi_word_string()
        {
            $string_input = "the cat in the hat";
            $word_input = "cat";
            $test_RepeatCounter = new RepeatCounter("the cat in the hat", "cat");

            $result = $test_RepeatCounter->countRepeats($string_input, $word_input);

            $this->assertEquals("1", $result);
        }

        function test_multi_repeat_multi_word_string()
        {
            $string_input = "the cat jumped over the cat onto a cat";
            $word_input = "cat";
            $test_RepeatCounter = new RepeatCounter("the cat jumped over the cat onto a cat", "cat");

            $result = $test_RepeatCounter->countRepeats($string_input, $word_input);

            $this->assertEquals("3", $result);
        }

        function test_only_repeat_word_in_string()
        {
            $string_input = "a a a a a a a a a a";
            $word_input = "a";
            $test_RepeatCounter = new RepeatCounter("a a a a a a a a a a", "a");

            $result = $test_RepeatCounter->countRepeats($string_input, $word_input);

            $this->assertEquals("10", $result);
        }

        function test_remove_case_sensitivity_and_characters()
        {
            $string_input = "C!aT CAT ca1T cAt c-AT";
            $word_input = "cat";
            $test_RepeatCounter = new RepeatCounter("C!aT CAT ca1T cAt c-AT", "cat");

            $result = $test_RepeatCounter->countRepeats($string_input, $word_input);

            $this->assertEquals("5", $result);
        }
    }
?>
