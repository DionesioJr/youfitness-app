<?php
global $DB;

$HOST = 'localhost';
$DBNAME = 'youfitness';
$USER = 'dionesio';
$PASS = 'dionesio';

try {
    $DB = new PDO("mysql:host={$HOST};dbname={$DBNAME}", $USER, $PASS);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
