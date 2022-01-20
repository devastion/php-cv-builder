<?php
$db_host = 'localhost';
$db_user = 'devastion';
$db_pass = '123456';
$db_name = 'phpcvbuilder';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysqli->set_charset("utf8");