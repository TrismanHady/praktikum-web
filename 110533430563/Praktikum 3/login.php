<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Form Administrator</title>

</head>

<body>

<?php

if(($_POST['user']=='hady') AND ($_POST['pass']=='hady')) {

echo '<br><br><center>Selamat Datang di Halaman ini USER ' . $_POST['user'];

}

else {

echo "<br><br><br><body text='red'><strong><center>INVALID LOGIN<br><br><a href='login.html'><h4>Kembali ke Login</h4></a></center></strong></body>";

}

?>

</body>

</html> 