<?php
	$pdo = new PDO('mysql:dbname=app;host=localhost;charset=utf-8', 'user', 'password');
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	$sql = 'SELECT * FROM users';
	$statement = $pdo->query($sql);
	$record = $statement->fetchAll();

	var_dump($record);