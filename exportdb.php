<?php
include_once 'diwan/dbconfig.php';
$sql = "SELECT id, nim, name, website, city, lat, lng, tlp, foto, timestamp FROM users;";

$rs = $DB_con->query($sql);
if (!$rs) {
    echo "An SQL error occured.\n";
    exit;
}

$rows = array();
while($r = $rs->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $r;
}
$fp = fopen('data_bondet.csv', 'w');

foreach ($rows as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
header('location:data_bondet.csv');
?>