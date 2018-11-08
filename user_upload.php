<?php
$h="localhost"; // Host name
$u=""; // Mysql username
$p=""; // Mysql password
$db_name="Users"; // Database name
$con=mysql_connect($h, $u, $p);
mysql_select_db($db_name, $con);
if(! $con) 
{
    die('Could not connect: ' . mysql_error());
}

$sql=" CREATE TABLE users(".
      "name VARCHAR(100) NOT NULL,".
       "surname VARCHAR(100) NOT NULL,".
       "email VARCHAR(255) NOT NULL,".
       "PRIMARY KEY (email));";
$result = mysql_query( $sql, $con);
if(! $result ) 
{
     die('Could not create table: ' . mysql_error());
}
 echo "Table created successfully\n";
 mysql_close($con);



?>
