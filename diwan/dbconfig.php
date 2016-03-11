<?php

$DB_host = "103.9.100.31:2083";
$DB_user = "maziero6_eewinkk";
$DB_pass = "wntwNI_HM4Dy";
$DB_name = "maziero6_ahmardb";


try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

include_once 'class.crud.php';

$crud = new crud($DB_con);

?>
