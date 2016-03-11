<?php session_start(); ?>
<?php
if(!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Mazieromap</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
</head>
<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand" href="http://akdo.maziero681.com" title='Web maziero'>Mazieromap</a>
            <a class="navbar-brand" href="http://maziero681.com">Maziero 681</a>
        </div>
 
    </div>
</div>