<?php
	session_start();
	$_SESSION = array();
?>
<p>
	ログアウト(セッション変数を消去)しました。<br>
	現在未ログイン状態です。<br>
	ログインしていないまま、<a href="mypage.php">マイページ</a>へ遷移してみましょう。
</p>