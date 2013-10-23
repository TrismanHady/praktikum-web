<!DOCTYPE HTML>
<html>
	<head>
		<title> Halaman Administrator</title>
		<style type="text/css">
			.inner {
				margin: 200px auto;
				padding: 20px;
				width: 24px;
				border: 1px solid #333;
			}
		</style>
	</head>

	<body>
		<?php
		//error_reporting(0);
			ini_set('display_errors',1);
			define('_VALID', 1);

			// include file eksternal
			require_once('./auth.php');
			init_login();
			validate();
		?>
		<h3> Simulasi Halaman Admin </h3>
		<p>
			<a href="?m=logout">Logout</a>
		</p>	
		<p>
			Menu - menu admin ada disini
		</p>	
		

	</body>


</html>