<?
$server="localhost";
$username="root";
$password="";
$database="test";

$conn=mysql_connect($server,$username,$password);
mysql_select_db($database,$conn);
?>