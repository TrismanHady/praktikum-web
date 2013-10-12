<!doctype html>
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="assets/css/css-inti.css" />
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

	
<script type="text/javascript" src="assets/js/js-inti.js"></script>

<title>Kalkulator Sederhana</title>

	<!--Icon-->
	<link rel="shortcut icon" href="/en/assets/1ba6f91a37d8183f2ad8d0821c875792/img/favicon.ico" type="image/ico">
</head>
<body class="welcome">

<!--Header-->
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">
		  	<img src="assets/img/logo.png">
		</a>
        </div>
      </div>
    </div>

<!--Isi-->
<div class="hero-row hero-row-welcome">
	<div class="container">
			<div class="row-fluid">
	<div class="span12 welcome-image">
		<div id="myVideo"
	class="carousel slide">
	<div>
	<div class="carousel-inner">
	<!-- Carousel items -->
		<div class="active item">
		<div class="span6">
			<h1>Kalkulatorku</h1>
			<br>
			<p>Sebuah aplikasi sederhana untuk operator aritmatika untuk memenuhi tugas kuliah Praktikum Pemrograman Web.</p>
		</div>	
		
		<div class="span6 carousel-image">
			<div class="row-fluid hero-video teaser-video">
				<img src="assets/img/kalkulator.png">	
					
			</div>	
		</div>
	</div>
		</div>
	</div>
</div>

	</div>
</div>
	
  </div>
</div>
<div class="hero-row-sub spacing">
	<div class="container">
		<div class="row-fluid">
		<div class="span12 hook">
			<div id="textDestination">
			</div>
			
<script language="javaScript">
	javascript:startTyping(text, 50, "textDestination");
</script>
				
		</div>
	</div>
	</div>
</div>

		
<div class="container container-main">
	<form method="post">
		<table>
			<tr>
				<td align="center"><b>Angka 1<b></td>
				<td><b>Operator</b></td>
				<td align="center"><b>Angka 2<b></td>
			</tr>
			<tr>
				<td><input type="number" name="angka1" value="<?=$angka1;?>" autocomplete="off" required placeholder= "Masukkan Angka"/></td>
				<td align="center"><select name="operator" class="input-small">
				<option></option>
				<option value ="+">+</option>
				<option value ="-">-</option>
				<option value ="*">*</option>
				<option value ="/">/</option>
				</select></td>
				<td><input type="number" name="angka2" value="<?=$angka2;?>" autocomplete="off" required placeholder= "Masukkan Angka"/></td>
				<td><input type="submit" name="Aritmatika" value="="></td>
		
				<?php
					if(isset($_POST['angka1']) or isset($_POST['angka2']) ){
					$angka1 = $_POST['angka1'];
					$angka2 = $_POST['angka2'];
					}else{
					$angka1 = "0";
					$angka2 = "0";
					}
					if(isset($_POST['operator'])){
					$operator =$_POST['operator'];
					}else{
					$operator ="";
					}
					switch($operator){
						case "+":
							$hasil = $_POST["angka1"] + $_POST["angka2"];
						break;
						case "-":
							$hasil = $_POST["angka1"] - $_POST["angka2"];
						break;
						case "*":
							$hasil = $_POST["angka1"] * $_POST["angka2"];
						break;
						case "/":
							$hasil = $_POST["angka1"] / $_POST["angka2"];
						break;
					}
				?>
				<td><input type="text" name="hasil"  value="<?=$hasil;?>"></td>
				
			</tr>
		</table>
	</form>
</div>
</body>
</html>
