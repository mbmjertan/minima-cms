<?php
$obj = new modernCMS();

// Postavlja vezu s databazom - varijable veze
$obj->host = 'localhost';
$obj->username = 'root';
$obj->password = '';
$obj->db = 'minima-dev';

// Spajanje na databazu
$obj->connect();
?>
