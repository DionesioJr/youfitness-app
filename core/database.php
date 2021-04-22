<?php
global $DB;

$HOST = 'localhost';
$DBNAME = 'youfitness';
$USER = 'youfitness';
$PASS = '$enha1@yfit';

try {
    $DB = new PDO("mysql:host={$HOST};dbname={$DBNAME}", $USER, $PASS);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
