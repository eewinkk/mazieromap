<?php
$email = $_REQUEST['email'];
$token = $_REQUEST['token'];

// buat koneksi dengan database
include_once 'diwan/dbconfig.php';

$sql = "DELETE FROM users WHERE email = '$email' AND token = '$token';";

$rs = $DB_con->query($sql);
$count = $rs->rowCount();
echo $count;
$DB_con = NULL;
?>
