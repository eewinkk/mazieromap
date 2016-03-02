<?php
$email = $_REQUEST['email'];
$nim = $_REQUEST['nim'];

$db = new PDO('sqlite:leaflet.sqlite');
$sql = "DELETE FROM users WHERE email = '$email' AND nim = '$nim';";

$rs = $db->query($sql);
$count = $rs->rowCount();
echo $count;
$db = NULL;
?>