<?php
session_start();
if (isset($_SESSION['username'])) {
	echo 'Welcome, ' . $_SESSION['username'];
} else {
	echo 'Please log in to view this page.';
}
?>