<?php
$nim = htmlspecialchars(trim($_POST['nim']));
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$website = htmlspecialchars(trim($_POST['website']));
$city = htmlspecialchars(trim($_POST['city']));
$lat = htmlspecialchars(trim($_POST['lat']));
$lng = htmlspecialchars(trim($_POST['lng']));
$token = mt_rand(100000, 999999);
$tlp = htmlspecialchars(trim($_POST['tlp']));
$foto = htmlspecialchars(trim($_POST['foto']));

// buat koneksi dengan database
include_once 'diwan/dbconfig.php';
$DB_con->exec("INSERT INTO users (nim, name, email, website, city, lat, lng, token, tlp, foto) VALUES ('$nim', '$name', '$email', '$website', '$city', '$lat', '$lng', '$token', '$tlp', '$foto');");
$DB_con = NULL;

$subject = "Ahlan wa sahlan";
$body = '
<html>
<head>
</head>
<body>
	<p>Syukron alakh '.$name.' sudah bergabung dengan Mazieromap!</p>
	Informasi:<br>
	-------------------------<br>
	Email: '.$email.'<br>
	Token: '.$token.'<br>
	Latitude: '.$lat.'<br>
	Longitude: '.$lng.'<br>
	-------------------------<br><br>
	Token bersifat rahasia. Berguna untuk mengganti lokasi antum.<br/>
	<stong>Untuk mengganti foto silahkan kontak admain</strong>
</body>
</html>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Mazieromap Team <no-reply@maziero681.com>' . "\r\n";
mail($email, $subject, $body, $headers, "no-reply@maziero681.com");
?>

