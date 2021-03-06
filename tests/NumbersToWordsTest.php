<?php
    require_once "src/NumbersToWords.php";

    class NumbersToWordsTest extends PHPUnit_Framework_TestCase
    {
        function test_singleDigitTest()
        {
            $test_NumberToWords = new NumberToWords;
            $input = 7;

            $result = $test_NumberToWords->numberTransformer($input);

            $this->assertEquals("seven", $result);
        }

        function test_tensTest()
        {
            $test_NumberToWords = new NumberToWords;
            $input = 13;

            $result = $test_NumberToWords->numberTransformer($input);

            $this->assertEquals("thirteen", $result);
        }

        function test_twentiesTest()
        {
            $test_NumberToWords = new NumberToWords;
            $input = 34;

            $result = $test_NumberToWords->numberTransformer($input);

            $this->assertEquals("thirty four", $result);
        }

        function test_hundredsTest()
        {
            $test_NumberToWords = new NumberToWords;
            $input = 132;

            $result = $test_NumberToWords->numberTransformer($input);

            $this->assertEquals("one hundred thirty two", $result);
        }
    }

 ?>
