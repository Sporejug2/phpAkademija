<?php
header('Content-Type: text/plain');
/*
function test(){
    echo 'Test is executed\n!';
}
test();
*/
function test2($a, $b = 2){
    return ($a**$b *$c); // ** potenciranje
}

$c = test2(5); // test2(5,2)
var_dump($c);

// function test3(array $a, int $b): int{ // tipove koji moraju uci i izaci
    
//}

$test = function() {
    echo 'Test is executer\n';  
};

$test(); // anaonymous funkcije
var_dump($test); // clouser php vidi kao objekat

$a = [1, 2, 3];

$b = array_map(function($valve){
return value * 2;
}, $a);

//$b = array_map('pomnizisaDva'(value))

var_dump($b);

function pomnoziSaDva($value)
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

