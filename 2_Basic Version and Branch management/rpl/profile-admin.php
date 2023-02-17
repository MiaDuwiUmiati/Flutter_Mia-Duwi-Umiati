<?php

	include_once("config.php");
	session_start();
	if(!isset($_SESSION['id'])){
		header("Location: admin-login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title>Profil - Bus Mojokerto</title>
</head>
<body style="background-color:#191A19;">
  	<!--mobile-->
  	<ul class="sidenav" id="mobile-demo">
    	<li><a href="sass.html">Sass</a></li>
    	<li><a href="badges.html">Components</a></li>
    	<li><a href="collapsible.html">Javascript</a></li>
    	<li><a href="mobile.html">Mobile</a></li>
  	</ul>
  	<!--end-->

  	<div class="row">
  		<div class="col s3 sidebar-admin">
  			<center>
  				<a href="dashboard-admin.php" class="brand-logo">
     				<img src="img/logo.png">
     			</a>
     			<div class="menu-sidebar">
     				<ul>
     					<li>
     						<a href="dashboard-admin.php" style="color:#fff !important;">Dashboard</a>
     					</li>
     					<li>
     						<a href="coupon-admin.php" style="color:#fff !important;">Kupon</a>
     					</li>
     					<li>
     						<a href="user-data.php" style="color:#fff !important;">User</a>
     					</li>
     					<li>
     						<a href="information.php" style="color:#fff !important;">Informasi</a>
     					</li>
     					<li>
     						<a href="message.php" style="color:#fff !important;">Pesan</a>
     					</li>
     				</ul>
     			</div>
     			<div class="logout-admin">
     				<a href="logout-admin.php" class="btn-logout-admin">Keluar</a>
     			</div>
     		</center>
  		</div>
  		<div class="col s9 navbar" style="padding:0px !important;">
  			<nav class="nav-admin">
    			<div class="nav-wrapper">
    				<span class="align-left time-admin">
    					<?php
    						date_default_timezone_set("Asia/Jakarta");
    						echo date('<b>' . "l</b>, M Y");
    					?>
    				</span>
      				<a href="#" data-target="mobile-demo" class="sidenav-trigger">
      					<i class="material-icons">menu</i>
      				</a>
      				<ul class="right hide-on-med-and-down" style="margin-right:17px;">
        				<li>
        					<a href="profile-admin.php" style="margin-top:2px;">
        						<i class="material-icons" style="font-size:36px;">person</i>
        					</a>
        				</li>
      				</ul>
    			</div>
  			</nav>
  			<div class="row dashboard">
  				<div class="col s8 dashboard-content">
  					<h4 style="color:#fff">Profil</h4>
  					<h6 style="color:#999;">Atur preferensi informasi akun</h6>
  					<?php

  						$user = mysqli_query($connect, "SELECT * FROM admin WHERE id = '$_SESSION[id]'");
						$run = mysqli_fetch_array($user);

  					?>
  					<div class="row">
        				<div class="input-field col s2" style="margin:30px 0px 0px 0px !important;">
  							<input type="text" id="judul_informasi" style="color:#fff;font-weight:bold;border-bottom:1px solid #9CD08F;" value="<?php echo $run['id']; ?>" disabled>
          					<label for="judul_informasi" style="color:#fff;"><b>ID</b></label>
        				</div>
        				<div class="input-field col s10" style="margin:30px 0px 0px 0px !important;">
  							<input type="text" id="judul_informasi" style="color:#fff;border-bottom:1px solid #999;" value="<?php echo $run['nama']; ?>" disabled>
          					<label for="judul_informasi" style="color:#fff;">Nama</label>
        				</div>
        				<div class="input-field col s6" style="margin:30px 0px 0px 0px !important;">
  							<input type="text" id="username" style="color:#fff;border-bottom:1px solid #999;" value="<?php echo $run['username']; ?>" disabled>
          					<label for="username" style="color:#fff;">Username</label>
        				</div>
        				<div class="input-field col s6" style="margin:30px 0px 20px 0px !important;">
  							<input type="text" id="judul_informasi" style="color:#fff;border-bottom:1px solid #999;" value="Disembunyikan" disabled>
          					<label for="judul_informasi" style="color:#fff;">Kata sandi</label>
        				</div>
        				<a href="edit-profile-admin.php?id=<?php echo $run['id']; ?>" class="btn edit-data-admin">Edit data</a>
        			</div>
  				</div>
  			</div>
  		</div>
  	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    	$('.sidenav').sidenav();
  	});
</script>
</body>
</html>