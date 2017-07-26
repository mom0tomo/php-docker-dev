<?php
	if(isset($_POST["username"])) {
		setcookie("username", $_POST["username"], time() + 20);
	}
	else {
		print "ユーザー名が渡されていないためcookieをセットできません";
		exit;
	}
?>
お名前をCookieに保存しました。<br>2分以内に再度<a href="index.php">index.php</a>にアクセスしてください。
