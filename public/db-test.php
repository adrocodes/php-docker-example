<?php
$pdo = new PDO('mysql:dbname=php-docker-example;host=mysql', 'user', 'password', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$result = $query->fetch();

echo "Database version: " . $result['Value'];
