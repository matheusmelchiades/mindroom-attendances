<?php
session_start();
$_SESSION['MindRoom'] = 'This is my assignment';

echo "<h1>Matheus Maciel</h1>";
echo "" . session_id();
echo "<br>" . $_SESSION['MindRoom'];
?>