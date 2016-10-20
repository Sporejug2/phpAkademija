<?php
header('Content-Type: text/plain');

$isTrue = true;
//$isTrue = ':]'

if($isTrue){
    echo "its s true\n";
}

$isFalse =false; // 0 , prazan arrow, null false

if(isFalse){
    echo 'Its true';
}
die();

if($isTrue || $isFalse){
    echo "its true or false\n";
}

var_dump(123 == "123abc"); // za ovo sto bi se napisalo 
var_dump((1 == 1.0) == (true == 'false')); // false string to je true , die();

var_dump ( 1== '1'); // ako nije jednako === tip podataka i vrijednost

/////////////

$a = 5;
$b = 6;

if($a > $b){
    echo 'bigger than b \n';
    
}else if($a == $b){
    echo "a is equal to b\n";
}else {
    echo " a is smaller than b\n";
}

$result = $isTrue ? 'one' : 'two'; // uvjet upitnik ? skraceni if else
if($isTrue){
    $result = 'one';
} else {
        $result = 'two';
    }
    
    $resukt = $isTrue ?:
var_dump($result);

// isPriceCorect = true ; camel case prvo malo slove pa iduce veliko
// word press $is_price_correct

// php 7.0 $action = $ POST['action'] ?? 'default';

    $day = 2;
    
    switch ($day){
        case 1;
            echo 'ponedjeljak';
            break;
        case 2; 'utorak';
        break;
        case 3;
        case 4;
        default :
            echo 'nije ponedjeljak ni utorak';
        
    }

    // is_array(), is_number, is_null, $is_int bool vraca true ili false
    /*
    var_dump(isset($lol));
    if($lol = 3){ // undefine varijablu
        
    }
    
   */   
   // var_dump(isset($lol));
    //if(isset($lol) && lol = 3){
        // undefine varijablu
        
    //}
    
     var_dump(isset($lol));
      if($lol == 3 && isset = 3){
        // undefine varijablu
        
    }
    
    var_dump(isset($lol));
    if(isset($lol) && $lol = 3){
        // undefine varijablu
        
    }
    
    // iset(), emty(),iset() je li varijabla definirana
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

