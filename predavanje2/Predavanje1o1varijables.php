<?php
header('Content-Type: text/plain');

// comentar
# comentar
/* comentar */

/**
 * ide
 * pise *
 * 
 */

$v = 42; // varijable , dolar sign php varijabla , php sam prepozna

//echo $v; // output //var_dump($v); // pokazi mi

//var_dump($v); // pokazi

//die(); // izadji iz skripte
/*
$n = 1; // ne moramo proglasavati tip varijable u php

var_dump($n); // ispisi varijablu

$n = 2.55; // prebacio u float
var_dump($n);

$b = false;

$s = 'PHP \n\t\t Akademija $n'; // \n novi red ali mora biti u dvostrukom navodniku
echo $s;   // dvostruki navodnici primaju kontrolne narodbe
die();
$s = 'PHP Akademija $n'; // dvostruki narodnici citaju varijable

$s = "PHP Akademija {$n}"; // za arrow zagrada

var_dump($s); // backslah n 
$s = "PHP Akademija {$n}";
 * var_dump($s);
*/

//array
/*$a1 = [1, 2, 3];
//$al = array(1, 2, 3);
var_dump($a1);
//die();

echo $a1[2];

*/

//$a1[3] = 4;
//$al[] = 5;
$a1[] = 6;

$a2 = [1, 'two', false];
var_dump($a2);
die();

$a3 = [
    'key_1' => 1,
    'key_2' => 'two'
    'key_3' => [1,2,"tri"];
];

$a3[] = 'lol';
$a4['trt'] = 42;
var_dump($a3['key_2']); // ili key zamijenimo 0

die();
 

osnovni objekt

$o = new StdClass(); // S clas veliko STD ne razlikuje tiskano
$o->x = 'just a property'; // x moze bilo sto
$wo = new stdClass();
$wo->asdasfasdas;
var_dump($o);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

