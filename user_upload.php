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
else
{
     echo "Table created successfully\n";
}

if (($handle = fopen("users.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $d1=ucfirst(strtolower($data[0]));
                $d2=ucfirst(strtolower($data[1]));
                $d3=strtolower($data[2]);

                if (!filter_var($d3, FILTER_VALIDATE_EMAIL))
                {
                        echo "Invalid email address\n";
                }
                else
                {
                    $import="INSERT into users(name,surname,email)values('$d1','$d1','$d3')";
                    mysql_query($import) or die(mysql_error());
                        //echo $d1."  ".$d2."  ".$d3."\n";
                }
        }
fclose($handle);
}

echo "Data Imported";
mysql_close($con);
?>
