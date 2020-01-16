<?php
require "Medoo.php";

// Using Medoo namespace
use Medoo\Medoo;

// Initialize
$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'db_pdam',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'mysql'
]);
?>
