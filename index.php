<?php
	$str = 'apple banana orange apple apple apple orange kiwi kiwi tomato';
	$strSplit = str_split($str);
    $array = [];
    $word = null;

    foreach ($strSplit as $symbol) {
        if ($symbol != ' ') {
            $word .= $symbol;
        } else {
            $array[] = $word;
            $word = null;
        }
    }

    $array[] .= $word;
    $newArray = [];

    foreach ($array as $value) {
        if (isset($newArray[$value])) {
            $newArray[$value] += 1;
        } else {
            $newArray[$value] = 1;
        }
    }

    foreach ($newArray as $item => $n) {
        echo "$item => $n" . PHP_EOL;

    }