<?php

$length = $argv[1];
$break = $argv[2];
$input = $argv[3];

echo "Here is the original:\n\n" . $input . "\n";

$wrapped = '';
$whitespace = " ";
$punctuation = ".";

while (strlen($input) > $length) {
//    echo "input: " . $input . "\n";
    $segment = substr($input, 0, $length) . "\n";
//    echo "Segment: " . $segment . "\n";

    $lastBreakPosition = $length;

    if ((strpos($segment, $whitespace)) && $segment[$length] != $whitespace) {
        $lastBreakPosition = strrpos($segment, $whitespace);
//        echo "Last break position: " . $lastBreakPosition . "\n";
        $segment = substr($input, 0, $lastBreakPosition);
    }

    $wrapped .= trim($segment) . $break . "\n";
    $input = substr($input, $lastBreakPosition);
}

$wrapped .= trim($input);

echo "\n\nHere is the wrapped version:\n\n" . $wrapped . "\n";


?>