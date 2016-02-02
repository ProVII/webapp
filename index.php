<?php

$host = $_SERVER['HTTP_HOST'];
$main_page = 'http://' . $host . '/main.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = htmlentities($_POST['username']);
	$password = htmlentities($_POST['password']);
	if ($username == 'user') {
		if ($password == 'password') {
			session_start();
			$_SESSION['username'] = $username;
			header('Location: ' . $main_page);
		} else {
			echo "no such password found";
		}
	} else {
		echo "no such username found";
	}
}
?>

<center>
	<br>
	Acces to the features provided by this site is limited to only those with valid credentials.
	<br>
	<br>
	<br>
	<form action="index.php" method="POST">
		<DIV TITLE="username is 'user'">
		Username:</DIV>
		<input type="text" name="username" required />
		<br>
		<br>
		<DIV TITLE="password is 'password'">
		Password:</DIV>
		<input type="password" name="password" required />
		<br>
		<br>
		<input type="submit" value="Login" required />
	</form>
</center>