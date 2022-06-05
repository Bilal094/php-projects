<?php

$marks = readline('Marks of student (in numbers): ');

if ($marks >= 60) {
    echo 'This student has a grade in the First Division';
} elseif ($marks >= 45 and $marks <= 59) {
    echo 'This student has a grade in the Second Division';
} elseif ($marks >= 33 and $marks <= 44) {
    echo 'This student has a grade in the Third Division';
} elseif ($marks < 33) {
    echo 'This student has failed';
}