<?php

$lijst1 = [1,2,3,4,5,6,7,8,9,10];
$lijst2 = [1,2,3,4,5,6,7,8,9,10];

foreach ($lijst1 as $nummers1) {
    foreach ($lijst2 as $nummers2) {
        echo "$nummers1 x $nummers2 = " . $nummers1 * $nummers2 . PHP_EOL;
    }
}