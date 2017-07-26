<?php
	session_start();
	$member = [
		'id'       => 1,
		'email'    => "mo-watanabe@dip-net.co.jp",
		'password' => '1234',
	];

	if (isset($_POST['submit'])) {
		if ($_POST["email"] == $member['email'] && $_POST["password"] == $member['password']) {
			// セッション変数に値を代入する
			$_SESSION["login"] = $member;
			echo "ログインしました。<br><a href='mypage.php'>マイページ</a>に進んでください。";
			exit;
		}
	}
	?>

	<p>ログインしてください</p>
	<form action="index.php" method="post">
		<table>
			<tr>mail<input type="text" name="email" value=""></tr><br>
			<td>pass<input type="password" name="password" value=""></td><br>
		</table>
		<input type="submit" name="submit" value="ログイン">
	</form>
