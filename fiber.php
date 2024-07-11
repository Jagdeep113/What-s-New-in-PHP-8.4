<?php 

$fiber = new Fiber(function(): void){
    echo "Fiber started\n";
    Fiber::suspend();
    echo "Fiber resumed\n";
};

$fiber->start();
$fiber->resume();