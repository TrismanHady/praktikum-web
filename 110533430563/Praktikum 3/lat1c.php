<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Identifikasi Metode</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<input type="text" name="nama" /> <br />
<input type="submit" value="OK" />
</form>
<?php
if (isset($_REQUEST['nama'])) {
echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
}
?>
<!--NOVI TRISMAN HADI | 110533430563-->
</body>
</html>