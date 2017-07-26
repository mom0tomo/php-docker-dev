<?php
	session_start();
	if(!isset($_SESSION["login"]['id'])) {
		header("Location: index.php");
		exit;
	}
?>
<p>
	マイページです。<br>
	<a href="logout.php">ここ</a>をクリックするとログアウトします。
</p>