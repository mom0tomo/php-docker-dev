<?php
	if(isset($_COOKIE["username"])) {
		print $_COOKIE["username"] . "さん、ようこそ！";
	}
	else {
		?>
		<form action="save_cookie.php" method="post">
			名前を入力してください
			<input type="text" name="username" value="">
			<input type="submit" name="name_submit" value="送信">
		</form>
	<?php
	}