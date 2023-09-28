<?php

$phoneKeyPad = readline(strtolower("Enter a word: "));

$result = "";
$length = strlen($phoneKeyPad);
$i = 0;

while ($i < $length) {
    $char = $phoneKeyPad[$i];

    if ($char >= 'a' && $char <= 'c') {
        $result .= "2";
        }
        if ($char >= 'd' && $char <= 'f') {
         $result .= "3";
        }
            if ($char >= 'g' && $char <= 'i') {
                $result .= "4";
                }
                if ($char >= 'j' && $char <= 'l') {
                    $result .= "5";
                }
                    if ($char >= 'm' && $char <= 'o') {
                        $result .= "6";
                    }
                        if ($char >= 'p' && $char <= 's') {
                            $result .= "7";
                        }
                            if ($char >= 't' && $char <= 'v') {
                                $result .= "8";
                            }
                                if ($char >= 'w' && $char <= 'z') {
                                    $result .= "9";
                                }
                                    $i++;
}
echo "The letters of the word you entered in phone keypad digits would be as following: $result";

/*$phoneKeyPad = readline(strtolower("Enter a word: "));


$result = "";

for ($i = 0; $i < strlen($phoneKeyPad); $i++) {
    $char = $phoneKeyPad[$i];

    switch ($char) {
        case 'a':
        case 'b':
        case 'c':
            $result .= "2";
            break;
        case 'd':
        case 'e':
        case 'f':
            $result .= "3";
            break;
        case 'g':
        case 'h':
        case 'i':
            $result .= "4";
            break;
        case 'j':
        case 'k':
        case 'l':
            $result .= "5";
            break;
        case 'm':
        case 'n':
        case 'o':
            $result .= "6";
            break;
        case 'p':
        case 'q':
        case 'r':
        case 's':
            $result .= "7";
            break;
        case 't':
        case 'u':
        case 'v':
            $result .= "8";
            break;
        case 'w':
        case 'x':
        case 'y':
        case 'z':
            $result .= "9";
            break;
        default:
            $result .= $char;
    }
}

echo "The letters of the word you entered in phone keypad digits would be: $result";*/