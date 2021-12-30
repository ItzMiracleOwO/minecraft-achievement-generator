<?php
	error_reporting(0);

	// build result-page
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$i = urlencode($_POST['i']);
		$h = urlencode($_POST['h']);
		$t = urlencode($_POST['t']);

		$url = "a.php?i=$i&h=$h&t=$t";
		$urlD = "a.php?i=$i&h=$h&t=$t&d=1";
		$extraTitle = "Your Achievement";
	}
?>
<!DOCTYPE html>
<head>
	<p> THIS IS A API! PLEASE USE WITH ENDPOINT:<p>
	<p>https://mca-kcat-api.herokuapp.com/a.php?i=34&h=測試&t=你好</p>
</head>
</html>
