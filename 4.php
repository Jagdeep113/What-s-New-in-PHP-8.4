<?php

$haystick="Hello, World";
$needle =["PHP","Javascript"];

$contain =str_contains_any($haystick,$needle);
echo $contain? "Yes" : "No";


//2..

$list=[1,2,3];
$isList = array_is_list($list);
echo $isList? "Yes" : "No";
array_key_first($arry);


?>