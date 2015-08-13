<?php
    class NumberToWords
    {
        function numberTransformer($input){

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

            $digit_twenties = array(
                2 => "twenty",
                3 => "thirty",
                4 => "forty",
                5 => "fifty",
                6 => "sixty",
                7 => "seventy",
                8 => "eighty",
                9 => "ninety"
            );

            if($input < 10) {
                return $digit_ones[$input];
            } elseif((10 <= $input) && ($input <= 19)) {
                return $digit_tens[$input];
            } else {
                //reverses user-entered number then splits it into an array of its digits
                $digit_array = array_map('intval', str_split(strrev($input)));
                $result = "";
                foreach($digit_array as $digit){
                    //flawed approach would need total revamp
                    switch($digit){
                    //    if(count($digit_array) >= 3){
                            case $digit_array[2]:
                                $result = $digit_ones[$digit] . " hundred " . $result;
                                break;
                //        }
                        case $digit_array[1]:
                            $result = $digit_twenties[$digit] . " " . $result;
                            break;
                        case $digit_array[0]:
                            $result = $digit_ones[$digit] . $result;
                            break;

                    }
                }
                return $result;
            }
        }
    }
 ?>
