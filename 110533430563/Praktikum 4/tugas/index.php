<!-- 
Nama : Novi Trisman Hadi
NIM	: 110533430563
Prodi: S1 PTI 2011
Tugas Praktikum
Penjelasan:
- Tugas ini membuat form login dengan autentifikasi dan session.
- Tampilan form ini saya berikan fasilitas Bootstrap, tetapi dalam pembuatan field nya masih belum sempurna.
- File indek dengan php saya jadikan di dalam file ini, sehingga lebih efisien.

-->

<!DOCTYPE HTML>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Sign in · Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Style CSS untuk memperindah tampilan-->
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  </head>

<body>
	<?php
	// inisialisai session
	session_start();
	ini_set('display_errors',1);
			define('_VALID', 1);
			init_login();
			validate();
	?>

	<!-- File PHP untuk memproses file -->
	<?php
	defined('_VALID') or die('not allowed');
	function init_login() {
	// Simulasi data account nama dan password
	$nama = 'admin';
	$pass = 'admin';
	if (isset($_POST['nama']) && isset($_POST['pass'])) {
		$n = trim($_POST['nama']);
		$p = trim($_POST['pass']);
		if ( ($n === $nama) && ($p === $pass) ) {
			// Jika sama, set cookie
			setcookie('nlogin', $n);
			setcookie('time', time());
			// redireksi
	?>

  <script type="text/javascript">
  document.location.href="./";
  </script>

  <?php
  } else {
		echo 'Nama/Password Tidak Sesuai';
    return false;
		}
}
}

function validate() {
	if (!isset($_COOKIE['nlogin']) || !isset($_COOKIE['time']) ) { 
		?>
		
    <div class="container" method="post">
      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
	        <input type="text" class="input-block-level" placeholder="Email address" required="required">
    	    <input type="password" class="input-block-level" placeholder="Password" required="required">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
		
<?php
exit;
}
if (isset($_GET['m']) && $_GET['m'] == 'logout') {
// Hapus cookie
if (isset($_COOKIE['nlogin'])) {
setcookie('nlogin', '', time() - 3 * 3600);
}
if (isset($_COOKIE['time'])) {
setcookie('time', '', time() - 3 * 3600);
}
// redireksi halaman
?>
<script type="text/javascript">
document.location.href="./";
</script>
<?php
}
}
?>


	<h3> Simulasi Halaman Admin </h3>
		<p>
			<a href="?m=logout">Logout</a>
		</p>	
		<p>
			Menu - menu admin ada disini
		</p>

		    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
</body>
</html>