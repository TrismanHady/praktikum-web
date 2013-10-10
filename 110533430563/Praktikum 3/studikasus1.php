<DOCTYPE HTML>
<html>
<head>
 <title>Studi Kasus 1</title>
</head>
<body>

 <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Pekerjaan
<select name="job">
 <option value="Mahasiswa" selected
 <?php
 if ($_POST['job']=="Mahasiswa"){
 	echo 'selected="selected"';
 }
 ?>
 >Mahasiswa
 <option value="Pengacara">Pengacara
 <option value="Pengacara" selected
 <?php
 if ($_POST['job']=="Pengacara"){
 	echo 'selected="selected"';
 }
 ?>
 >Pengacara
  <option value="Wiraswasta">Wiraswasta
</select> <br />
<input type="submit" value="OK" /> 
</form>

<?php
if (isset($_POST['job'])){
echo $_POST['job'];
}
?>
<!--NOVI TRISMAN HADI | 110533430563-->
</body>
</html>