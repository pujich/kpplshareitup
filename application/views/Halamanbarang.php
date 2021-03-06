<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Share-it-up! : Barang</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
				<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"?> rel="stylesheet">      
		<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap-responsive.min.css"?> rel="stylesheet">		
		<link href=<?php echo base_url()."assets/themes/css/bootstrappage.css"?> rel="stylesheet"/>
		
		
		<!-- global styles -->
		<link href=<?php echo base_url()."assets/themes/css/flexslider.css"?> rel="stylesheet">
		<link href=<?php echo base_url()."assets/themes/css/main.css" ?> rel="stylesheet">

		<!-- scripts -->
		<script src=<?php echo base_url()."assets/themes/js/jquery-1.7.2.min.js"?>></script>
		<script src=<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js"?>></script>				
		<script src=<?php echo base_url()."assets/themes/js/superfish.js"?>></script>	
		<script src=<?php echo base_url()."assets/themes/js/jquery.scrolltotop.js"?>></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><b>Hi, <?php echo $this->session->userdata('nama_user'); ?></b></li>
							<li><a style="padding: 3px 5px;" class="btn btn-inverse large" href="<?php echo site_url('Logout'); ?>">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href=<?php echo base_url().""?> class="logo pull-left"><img src="assets/img/logo.png" class="site_logo" alt="" style="margin-left:-10px; width:11%;height:11%;"></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="<?php echo base_url("home")?>">Home</a>					
								<!-- <ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul> -->
							</li>															
							<li><a href="<?php echo base_url("profile")?>">Profil</a>
								<!-- <ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul> -->	
								</li>							
							<li><a href="<?php echo base_url("post/user")?>">Barang</a>
								<!-- <ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul> -->
								</li>
						</ul>
					</nav>
				</div>
			</section>							
			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="" >
				<h4><span>KELOLA BARANG</span></h4>
			</section>

			<section class="main-content">				
				<div class="row">				
					<div class="span5">
				    	<div class="card" style="width: 20rem;">
						  	<div class="card-body">
							    <h4 class="card-title">Lihat Barang</h4>
							    <p class="card-text">Lihat barang-barang milik saya</p>
							    <a href="<?php echo base_url("post/user")?>" class="btn btn-primary">Lihat</a>
						  	</div>
				    	</div>
    					<br>
						<div class="card" style="width: 20rem;">
					  		<div class="card-body">
							    <h4 class="card-title">Post Barang</h4>
							    <p class="card-text">Post barang untuk dipinjamkan</p>
							    <a href="<?php echo base_url("post/useradd")?>" class="btn btn-primary">Post</a>
					  		</div>
						</div>
				  	</div>
				  	<div class="span7">
						<div class="card" style="width: 20rem;">
						  	<div class="card-body">
						    	<h4 class="card-title">Edit Barang</h4>
						    	<p class="card-text">Ubah informasi barang milik saya</p>
						    	<a href="<?php echo base_url("post/user")?>" class="btn btn-primary">Edit</a>
						  	</div>
						</div>
				      	<br>
				      	<div class="card" style="width: 20rem;">
				  			<div class="card-body">
				    			<h4 class="card-title">Hapus Barang</h4>
				    			<p class="card-text">Hapus barang milik saya</p>
				    			<a href="<?php echo base_url("post/user")?>" class="btn btn-danger">Delete</a>
				  			</div>
						</div>
				    </div>
				  </div>
			</section>

			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>		
    </body>
</html>
