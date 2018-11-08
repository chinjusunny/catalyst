<?php
$h="localhost"; // Host name
$u=""; // Mysql username
$p=""; // Mysql password
$db_name="Users"; // Database name
$con=mysql_connect($h, $u, $p);
mysql_select_db($db_name, $con);

?>
