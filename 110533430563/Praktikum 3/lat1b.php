<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Metode POST</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Nama
<input type="text" name="nama" /> <br />
<input type="submit" value="OK" />
</form>
<?php
if (isset($_POST['nama'])) {
echo 'Hallo, ' . $_POST['nama'];
}
?>
<!--NOVI TRISMAN HADI | 110533430563-->
</body>
</html>