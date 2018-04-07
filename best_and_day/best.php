<?php

$str = 'PHP IS THE BEST PROGRAMMING LANGUAGE';
$index = 0;

while ($index < strlen($str)) {
    if ($str[$index] === ' ') {
        echo 'THIS IS A SPACE CHARACTER<br>';
    } else {
        echo $str[$index] . '<br>';
    }
    $index++;
}