<?php

$A = 10;
$B = 12;
$C = 13;
$D = 10;
var_dump((($A > $B) || ($A < $C)) || (($A = $C) || ($A >= $B)));
var_dump(($A >= $B) || ($A < $D)) && (($A >= $D) || ($C > $D));
var_dump (!($A = $C) && ($C > $B));