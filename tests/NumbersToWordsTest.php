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
    }

 ?>
