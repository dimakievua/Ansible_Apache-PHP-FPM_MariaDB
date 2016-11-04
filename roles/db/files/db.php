<?php

$connection = new PDO('mysql:host=localhost;dbname=example', 'test', 'testpw');
$statement  = $connection->query('SELECT message FROM demo');

echo $statement->fetchColumn();
?>
