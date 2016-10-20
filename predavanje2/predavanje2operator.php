<?php
header('Content-Type: text/plain');

$n=1;
$f = 2.55;

var_dump($n + $f);

$b = true;

var_dump($n + $f + $b);

exit;

$n += 10;
$n *= 10; // isto kao i c

var_dump($n);


$n++;
$n--;

$s = 'PHP akademija'; 
$s = $s . ' u Osijeku'; // stringove zbrajate s . on predpostavlja da je string.
$s  .= 'u Osijeku'; // iste linije

var_dump($s);
exit;

$a = [
  0 => 1, // key 0
    1=>2, // key 1
    'one' => 'a1',
    'two' => 'a2'
    
];

$b = [
    0=>2, // 0=> 2
    1=>3, // 1 => 3;
    'two' => 'b2',
    'three' => 'b3'
    ];

var_dump($a + $b);
var_dump(array_merge($a,$b));
var_dump(array_replace($a, $b));

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

