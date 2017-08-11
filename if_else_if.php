<?php

echo "How old are you?";
$handle = fopen ("php://stdin","r");
$age = fgets($handle);

if ($age >= 18) {
    echo "Please come in!";
} elseif (($age < 18) && ($age >= 16)) {
    echo "I'll think about it";
} else echo "GO AWAY!!!!!";
//comment
?>

