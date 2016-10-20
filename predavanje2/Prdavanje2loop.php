<?php
header('Content-Type: text/plain'); // seta heder responsa browser ono sto ces dobiti je text file
/*
$a = [1, 'two', 'three', 4];

foreach ($a as $value){
    
}

$a2 = [
    'key_1' => 1,
    'key_2' => 'two'
]
        
        for($i = 0; $i < 10; $i++){
            
        }
        
        //break; break 2; continue; - preskacete trenutno skacete
        //while, do-while
        
       while($a=3){
           
       }
       */
        
       $list = [
           '<a> - anchor',
           '<p> - paragraph',
           '<ul> - unordered list',
           '<table> - table'
       ];
       
       foreach($list as $value){
           $explodedValues = explode (' - ', value);
           echo $explodedValues[0];
       }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

