<?php
$obj = new modernCMS();

// Postavlja vezu s databazom - varijable veze
$obj->host = 'localhost';
$obj->username = 'root';
$obj->password = '';
$obj->db = 'cms';

// Spajanje na databazu
$obj->connect();
?>
