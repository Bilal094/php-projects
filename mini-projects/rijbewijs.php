<?php

echo 'Hoe oud ben je?' . PHP_EOL;
$age = readline();

if ($age >= 16.5){
    echo 'Je mag beginnen met rijlessen!';
}
else{
    echo 'Helaas, je mag nog niet beginnen met rijlessen';
}