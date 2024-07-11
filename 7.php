<?php

$funct= create_function('$a,$b','return $a+$b');
echo $funct(1,2); // depreciated

$func= function($a,$b){
    return $a+$b;
};

echo $func(1,2); // new way of creating function in php 5.3

