<?php

$server="localhost";
$user="root";
$password="";
$dbname="project";
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
echo"database is not connected";
}


?>
