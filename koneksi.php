<?php 

$server ="localhost";
$user = "root";
$password = "";
$dbname = "web_articles";
$db=mysqli_connect($server, $user, $password, $dbname);

if(!$db){
	die("Gagal Terhubung ke database:".mysqli_connect_error());
}
?>