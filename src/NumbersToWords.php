<?php
    class NumberToWords
    {
        function numberTransformer($input){
            if ($input < 10) {
                $digit_ones = array(
                    0 => "zero",
                    1 => "one",
                    2 => "two",
                    3 => "three",
                    4 => "four",
                    5 => "five",
                    6 => "six",
                    7 => "seven",
                    8 => "eight",
                    9 => "nine",
                );
                return $digit_ones[$input];
            } else {

                $digit_tens = array(
                    10 => "ten",
                    11 => "eleven",
                    12 => "twelve",
                    13 => "thirteen",
                    14 => "fourteen",
                    15 => "fifteen",
                    16 => "sixteen",
                    17 => "seventeen",
                    18 => "eighteen",
                    19 => "ninteen",
                );
                return $digit_tens[$input];
            }
        }
    }
 ?>
