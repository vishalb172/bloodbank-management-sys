<?php
//$servername = "localhost:3307";
//$username = "root";
//$password = "";
//$dbname = "bloodbank";
$servername = "sql6.freemysqlhosting.net";
$username = "sql6482352";
$password = "76lvl6gxdf";
$dbname = "sql6482352";

$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>