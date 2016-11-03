<?php

hedare('Content-Type: text/plain');

$dsn = 'mysql:host=localhost;dbname=p5;charset=utf8';
$username = 'root';
$password = '';

try {
   $conn = new PDO($dan, $username, $password);
   
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
    
}

$sql = 'Select * FROM `attendee`';
        
        $stmt = $conn->query($sql); // pinter na resurs u mysql
        // query vraca pdm statment
        
      /*  while ($row = $stmt -> fetch()){
            
            print $row['id'] . "\t";
            print $row['name'] . "\t";
            print $row['email'] . "\n";
           
        }   */
        
       /*   foreach($stmt = $fetchAll() as $row {
            
            print $row['id'] . "\t";
            print $row['name'] . "\t";
            print $row['email'] . "\n";
           
        } */  
        
      foreach ($stmt as $row){ // nacin koji nije baš zabavan
         print $row['id'] . "\t";
            print $row['name'] . "\t";
            print $row['email'] . "\n";
      }
        
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

