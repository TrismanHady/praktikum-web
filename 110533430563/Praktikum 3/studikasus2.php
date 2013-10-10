<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Preselecting Data Checkbox Novi Trisman Hadi</title>
</head>

<body>
 <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Hobi
<input name="hoby[]" type = "checkbox" value="Sepakbola" checked="CHECKED"/>Sepakbola
<input type = "checkbox" name="hoby[]" value="Futsal"/> Futsal
<input name="hoby[]" type = "checkbox" value="Renang" checked="checked"/>Renang
<br>
<input type="submit" value="OK" /> 
</form>

<?php
//Ekstrasi Nilai
if (isset($_POST['hoby'])){
 foreach ($_POST['hoby'] as $key => $val ){
 echo $key . ' -> ' .$val . '<br />';
 }
}
?>
<!--NOVI TRISMAN HADI | 110533430563-->
</body>
</html>