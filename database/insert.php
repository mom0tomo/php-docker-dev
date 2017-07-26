<?php
	$pdo = new PDO('mysql:dbname=app;host=localhost;charset=utf-8', 'user', 'password');
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	$sql = "INSERT INTO users (username, email, password) values ('test', 'mo-watanabe@dip-net.co.jp', '1234')";
	$rows = $pdo->exec($sql);

	var_dump($rows);
