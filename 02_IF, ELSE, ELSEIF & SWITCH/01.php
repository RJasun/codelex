<?php

//Exercise 1
//Given variables (int) 10, string "10" determine if they both are the same.

$integerValue = 10;
$stringValue = "10";

if ($integerValue == $stringValue) {
    echo "If looking only at the value, integer and string are the same" . PHP_EOL;
} else {
   echo "If looking only at the value, integer and string are not the same" . PHP_EOL;
}
if ($integerValue === $stringValue) {
    echo "If looking at both, data type and value, integer and string are the same" . PHP_EOL;
} else {
  echo  "If looking at both, data type and value, then Integer and string are not the same" . PHP_EOL;
}