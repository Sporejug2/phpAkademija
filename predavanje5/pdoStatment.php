<?php

header('Content-Type: text/plain');

$dsn = 'mysql:host=localhost;dbname=studentc;charset=utf8';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}

$id = 1; // user input - laze
//$sql = 'Select * FROM `attendee` WHERE id = ?'; // pdo dajemo da netko ne radi gluposti , neka vrijednost na mjesto ? 
$sql = 'Select * FROM `attendee` WHERE id = :id';


/*$stmt = $conn->prepare($sql);
$stmt->execute([$id]); // koji parametri mijenjaju ? id id dodje na mjesto ?
*/

$stmt = $conn->prepare($sql);
$stmt->execute([
    
    'id' => $id,
        ]); 

foreach ($stmt as $row) { // nacin koji nije baš zabavan
    print $row['id'] . "\t";
    print $row['name'] . "\t";
    print $row['email'] . "\n";
}
// u php ?id=1