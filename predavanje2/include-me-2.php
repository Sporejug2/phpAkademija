<?php
header('Content-Type: text/plain');

require 'i-dont-exist.php';
include 'i-dont-exist';
echo 'pozdrav';

include _DIR_ . 'i-dont-exist'; //include_path
var_dump(_DIR_);
var_dunp(_FILE_);

github.com/inchoo/php-academy
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

