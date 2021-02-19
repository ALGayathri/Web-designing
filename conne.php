<?php

$servername='localhost';
$username='root';
$password='';
$dbname="empdb";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die('could not Connect My sql:' .mysql_error());
}
else
{
  echo"Database connected";
}
?>