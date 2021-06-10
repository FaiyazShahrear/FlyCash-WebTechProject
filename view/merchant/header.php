<?php
	session_start();
	$name =$_SESSION['name'];
    $balance =$_SESSION['balance'];
	if(!isset($_COOKIE['flag']))
	{
		header('location: login.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>FlyCash - <?=$title?></title>
</head>
<body>
