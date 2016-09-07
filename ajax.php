<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'test');
$sql = 'SELECT `title` FROM `class` WHERE 1';
$r = $mysqli->query($sql);
$arr = $r->fetch_all(MYSQLI_ASSOC);
echo json_encode($arr);
?>