<?php session_start(); ?>
<?php
if(!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<html>
<head>
	<title>Register</title>
</head>

<body>
<a href="index.php">Home</a> <br />
<?php
include("dbconfig.php");

if(isset($_POST['submit'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "" || $pass == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='security.php'>Go back</a>";
	} else {
		$DB_con->exec("INSERT INTO lajnah (username, password) VALUES ('$user', md5('$pass'));");
		$DB_con = NULL;
			
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='index.php'>Login</a>";
	}
} else {
?>
	<p><font size="+2">Register</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">			
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
<?php
}
?>
</body>
</html>
