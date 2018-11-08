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

$sql=" CREATE TABLE IF NOT EXISTS users(".
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

$row = 1;
if (($handle = fopen("users.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    $row++;
    for ($c=0; $c < $num; $c++)
    {
        echo $data[$c]."  ";
    }
echo "\n";
  }
  fclose($handle);
}



 mysql_close($con);



?>
