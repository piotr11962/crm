<?php


require 'clients.php';
$pdo = new PDO('mysql:host=192.168.1.100;dbname=crm', 'user', 'qwerty');
$manager = new clients($pdo);

$manager->addClient('Jan', 'Kowalski', 'jan@firma.pl', '123456789', 'Firma XYZ');
