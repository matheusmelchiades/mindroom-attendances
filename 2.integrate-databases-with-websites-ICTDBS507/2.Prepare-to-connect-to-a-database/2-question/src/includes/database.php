<?php
function createDatabaseConnection()
{
    $mysqli = new mysqli('db', 'root', 'password', 'revolutionaryarmy');
    if ($mysqli->connect_errno) {
        die('Failed to connect to MySQL: ' . $mysqli->connect_error);
    }
    return $mysqli;
}
?>