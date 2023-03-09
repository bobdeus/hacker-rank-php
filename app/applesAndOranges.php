<?php


function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $countOfApples = 0;
    $countOfOranges = 0;
    foreach ($apples as $apple){
        $appleLocation = $a + $apple;
        if($appleLocation >= $s && $appleLocation <= $t){
            ++$countOfApples;
        }
    }

    foreach ($oranges as $orange){
        $orangeLocation = $b + $orange;
        if($orangeLocation <= $t && $orangeLocation >= $s){
            ++$countOfOranges;
        }
    }

    echo $countOfApples;
    echo "\n";
    echo $countOfOranges;
    echo "\n";

}

countApplesAndOranges(7, 11, 5, 15, [-2,2,1], [5,-6]);