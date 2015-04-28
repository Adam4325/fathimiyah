<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN UTAMA</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
<style type="text/css">
	body{
		background: url('<?php echo base_url("public/images/bg.png"); ?>');
		background-repeat: repeat;
	}
</style>
<body>
<div class="container" style="background-color:#FFF;padding-top:75px;">
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	     
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-pills">
	        <li class="active"><a href="#">Biografi <span class="sr-only">(current)</span></a></li>
	        <li><a href="http://live.majelisfathimiyah.org" class="menu-top-fixed">Live Streaming</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle menu-top-fixed" data-toggle="dropdown" role="button" aria-expanded="false">Tausiah <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#" class="menu-top-fixed-child">Majelis Rosulullah</a></li>
	            <li><a href="#" class="menu-top-fixed">Fathimiyah</a></li>
	            <li><a href="#" class="menu-top-fixed">Umum</a></li>
	          </ul>
	        </li>
	        
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle menu-top-fixed" data-toggle="dropdown" role="button" aria-expanded="false">Aplikasi <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#" class="menu-top-fixed-child">Toko Online</a></li>
	            <li><a href="#" class="menu-top-fixed-child">Travel Umroh</a></li>
	            <li><a href="#" class="menu-top-fixed-child">Donasi Kurban</a></li>
	          </ul>
	        </li>

	        <li><a href="#" class="menu-top-fixed">Contact</a></li>

	      </ul>
	      <form class="navbar-form navbar-right" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-primary">Search</button>
	      </form>
	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="row">
		<div class="col-md-9">
		    <div class="grid-fluid">
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="thumbnail">
					      <img src="<?php echo base_url('public/images/img_001.jpg'); ?>" alt="...">
					      <div class="caption">
					        <h3>Sifat Kedermawanan Rasul SAW, Senin 30 Juli 2012</h3>
					        <p>Bahwa Rasulullah SAW adalah manusia yang paling dermawan, dan beliau sangat lebih dermawan di bulan Ramadhan, di bulan itu beliau SAW selalu dikunjungi Jibril AS dan menemui beliau SAW setiap malamnya, dan memperdalam Alqur’an, dan sungguh Rasulullah SAW lebih dermawan terhadap berbuat baik melebihi semilir angin yang berhembus menyejukkan” (Shahih Bukhari)</p>
					        <p><a href="#" class="btn btn-primary" role="button">Selengkapnya</a> </p>
					      </div>
					    </div>
		    		</div>
		    	</div>
				<div class="row">
					<div class="col-md-12">
						<fieldset>
							<legend>Tausiah</legend>
								<div class="grid-fluid">
									<div class="row">

										<div class="col-md-6">
											<div class="thumbnail">
										      <img src="<?php echo base_url('public/images/img_001.jpg'); ?>" alt="..." width="auto" height="150">
										      <div class="caption">
										        <h3>Hadits ke 22 – Kitab Nurul Iman – Pahala Sholat Jum’at</h3> <!-- Panjang huruf 60 -->
										        <p>"Dari abu hurairah RA dari Rasulullah Saw bersabda: Apabila datang Hari Jum’at maka berdirilah Malaikat- Malaikat di pintu masjid, mareka menulis yang datang  ...</p> <!-- Panjang huruf 150 -->
										        <p><a href="#" class="btn btn-primary" role="button">Selengkapnya</a></p>
										      </div>
										    </div>
										</div>

										<div class="col-md-6">
											<div class="media">
											    <div class="media-left">
											      <a href="#">
											        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_001.jpg'); ?>" data-holder-rendered="true">
											      </a>
											    </div>
											    <div class="media-body">
											      <h4 class="media-heading" id="media-heading"><a href="#" class="menu-tausiah">Hadits ke 22 – Kitab Nurul Iman – Pahala Sholat Jum’at ...</a></h4>
											      <p class="text-muted text-sm"><?php echo date('D, m-Y'); ?></p>
											    </div>
											 </div>
											 <hr class="batas-menu-tausiah">

											 <div class="media">
											    <div class="media-left">
											      <a href="#">
											        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_002.jpg'); ?>" data-holder-rendered="true">
											      </a>
											    </div>
											    <div class="media-body">
											      <h4 class="media-heading" id="media-heading"><a href="#" class="menu-tausiah">Diharamkan Ria (Pamer) dalam Beribadah...</a></h4>
											      <p class="text-muted text-sm"><?php echo date('D, m-Y'); ?></p>
											    </div>
											 </div>
											 <hr class="batas-menu-tausiah">

											 <div class="media">
											    <div class="media-left">
											      <a href="#">
											        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_003.jpg'); ?>" data-holder-rendered="true">
											      </a>
											    </div>
											    <div class="media-body">
											      <h4 class="media-heading" id="media-heading"><a href="#" class="menu-tausiah">Pemimpin atau Raja yang Dhalim Masih Lebih Baik Dari Fitnah Yang Kekal Berjalan...</a></h4>
											      <p class="text-muted text-sm"><?php echo date('D, m-Y'); ?></p>
											    </div>
											 </div>
											 <hr class="batas-menu-tausiah">

											 <div class="media">
											    <div class="media-left">
											      <a href="#">
											        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_003.jpg'); ?>" data-holder-rendered="true">
											      </a>
											    </div>
											    <div class="media-body">
											      <h4 class="media-heading" id="media-heading"><a href="#" class="menu-tausiah">Hadits ke 20 – Kitab Nurul Iman – Diamlah Ketika Mendengarkan Khotbah Jum’at...</a></h4>
											      <p class="text-muted text-sm"><?php echo date('D, m-Y'); ?></p>
											    </div>
											 </div>
											 <hr class="batas-menu-tausiah">

											 <div class="media">
											    <div class="media-left">
											      <a href="#">
											        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_003.jpg'); ?>" data-holder-rendered="true">
											      </a>
											    </div>
											    <div class="media-body">
											      <h4 class="media-heading" id="media-heading"><a href="#" class="menu-tausiah">Hadits ke 13 – Kitab Nurul Iman – Adab Seorang Istri Kepada Suami...</a></h4>
											      <p class="text-muted text-sm"><?php echo date('D, m-Y'); ?></p>
											    </div>
											 </div>
											 <hr class="batas-menu-tausiah">

										</div>

									</div>
								</div>
						</fieldset>
					</div>
				</div>
			</div>

			<div class="grid-fluid">
				<div class="row">
					<div class="col-md-12">
						<fieldset class="fieldset-video">
							<legend>Gallery Video</legend>
								<div class="grid-fluid">
									<div class="row">
										<div class="col-md-4">
											<div class="embed-responsive embed-responsive-4by3">
											  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/U2OoSlONBPM"></iframe>
											</div>
										</div>
									
										<div class="col-md-4">
											<div class="embed-responsive embed-responsive-4by3">
											  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/m9zsnX7zQcQ"></iframe>
											</div>
										</div>
									
										<div class="col-md-4">
											<div class="embed-responsive embed-responsive-4by3">
											  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/EqTSBoUZC-o"></iframe>
											</div>
										</div>
									</div>

								</div>
						</fieldset>
					</div>
				</div>
			</div>

			<div class="grid-fluid">
				<div class="row">
					<div class="col-md-12">
						<fieldset>
							<legend>Jadwal</legend>
								<div class="grid-fluid">
									<div class="row">
										<div class="col-md-12">
											<div class="media">
											    <div class="media-left">
											      <a href="#">
											        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_003.jpg'); ?>" data-holder-rendered="true">
											      </a>
											    </div>
											    <div class="media-body">
											      <h4 class="media-heading" id="media-heading"><a href="#" class="menu-tausiah">Sifat Kedermawanan Rasul SAW, Senin 30 Juli 2012</a></h4>
											      <p>Content Jadwal Event</p>
											      <p class="text-muted text-sm"><?php echo date('D, m-Y'); ?></p>
											    </div>
											 </div>
											 <hr>

											 <div class="media">
											    <div class="media-left">
											      <a href="#">
											        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_003.jpg'); ?>" data-holder-rendered="true">
											      </a>
											    </div>
											    <div class="media-body">
											      <h4 class="media-heading" id="media-heading"><a href="#" class="menu-tausiah">Sifat Kedermawanan Rasul SAW, Senin 30 Juli 2014</a></h4>
											      <p>Content Jadwal Event</p>
											      <p class="text-muted text-sm"><?php echo date('D, m-Y'); ?></p>
											    </div>
											 </div>
											 <hr>

											 <div class="media">
											    <div class="media-left">
											      <a href="#">
											        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_003.jpg'); ?>" data-holder-rendered="true">
											      </a>
											    </div>
											    <div class="media-body">
											      <h4 class="media-heading" id="media-heading"><a href="#" class="menu-tausiah">Sifat Kedermawanan Rasul SAW, Senin 30 Juli 2015</a></h4>
											      <p>Content Jadwal Event</p>
											      <p class="text-muted text-sm"><?php echo date('D, m-Y'); ?></p>
											    </div>
											 </div>
											 <hr>

										</div>
									</div>
						</fieldset>
					</div>
				</div>
			</div>

		</div>
		
		<div class="col-md-3">
			<div class="grid-fluid">
				<div class="row">
					<div class="col-md-12">
						<fieldset>
							<legend>Top Rated</legend>
							<ul class="list-group" style="border:none">
							  <li class="list-group-item menu-top-rated"><a href="#">Jasaltu Itsnain Majelis Rasulullah</a></li>
							  <li class="list-group-item menu-top-rated"><a href="#">Event Akbar Majelis Rasulullah</a></li>
							  <li class="list-group-item menu-top-rated"><a href="#">Mukjizat Rasulullah SAW, Senin 06 Februari 2012</a></li>
							  <li class="list-group-item menu-top-rated"><a href="#">Sifat Kedermawanan Rasul SAW, Senin 30 Juli 2012</a></li>
							  <li class="list-group-item menu-top-rated"><a href="#">Malam Lailatul Qadr, Senin 13 Agustus 2012</a></li>
							</ul>
						</fieldset>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h3 style="margin:5px">Top News</h3>
						<hr style="margin:5px">
						<ul class="list-group">
						  <li class="list-group-item">
						  	
						  	<div class="media">
							    <div class="media-left">
							      <a href="#">
							        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_002.jpg'); ?>" data-holder-rendered="true">
							      </a>
							    </div>
							    <div class="media-body">
							      <h4 class="media-heading" id="media-heading">Sholawat<a class="anchorjs-link" href="#media-heading"><span class="anchorjs-icon"></span></a></h4>
							      <a href="#">Majelis rosululloh sdfsdfsd sdfsdfdsf ...</a> <!-- 40 huruf -->
							    </div>
							 </div>
						  	
						  </li>
						  <li class="list-group-item">
						  	<div class="media">
						      <div class="media-left">
						        <a href="#">
						          <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_002.jpg'); ?>" data-holder-rendered="true">
						        </a>
						      </div>
						      <div class="media-body">
						        <h4 class="media-heading" id="media-heading">Sholawat<a class="anchorjs-link" href="#media-heading"><span class="anchorjs-icon"></span></a></h4>
						        <a href="#">Majelis rosululloh sdfsdfsd sdfsdfdsf ...</a> <!-- 40 huruf -->
						      </div>
						    </div>
						  </li>
						  <li class="list-group-item">
						  	<div class="media">
						      <div class="media-left">
						        <a href="#">
						          <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_002.jpg'); ?>" data-holder-rendered="true">
						        </a>
						      </div>
						      <div class="media-body">
						        <h4 class="media-heading" id="media-heading">Sholawat<a class="anchorjs-link" href="#media-heading"><span class="anchorjs-icon"></span></a></h4>
						        <a href="#">Majelis rosululloh sdfsdfsd sdfsdfdsf ...</a> <!-- 40 huruf -->
						      </div>
						    </div>
						  </li>
						  <li class="list-group-item">
						  	<div class="media">
						      <div class="media-left">
						        <a href="#">
						          <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_002.jpg'); ?>" data-holder-rendered="true">
						        </a>
						      </div>
						      <div class="media-body">
						        <h4 class="media-heading" id="media-heading">Sholawat<a class="anchorjs-link" href="#media-heading"><span class="anchorjs-icon"></span></a></h4>
						        <a href="#">Majelis rosululloh sdfsdfsd sdfsdfdsf ...</a> <!-- 40 huruf -->
						      </div>
						    </div>
						  </li>
						</ul>
					</div>
				</div>

				<div class="row">
					<h3 style="margin:5px">Banner</h3>
					<hr style="margin:5px">
					<div class="col-md-6">
						<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: auto; height: 120px;" src="<?php echo base_url('public/images/iklan.png'); ?>" data-holder-rendered="true">
					</div>
					<div class="col-md-6">
						<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: auto; height: 120px;" src="<?php echo base_url('public/images/iklan.png'); ?>" data-holder-rendered="true">
					</div>
					<div class="clearfix"></div><br>
					<div class="col-md-6">
						<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: auto; height: 120px;" src="<?php echo base_url('public/images/iklan.png'); ?>" data-holder-rendered="true">
					</div>
					<div class="col-md-6">
						<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: auto; height: 120px;" src="<?php echo base_url('public/images/iklan.png'); ?>" data-holder-rendered="true">
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h3 style="margin:5px">Recent Post</h3>
						<hr style="margin:5px">
						<ul class="list-group">
						  <li class="list-group-item">
						  	<div class="media">
							    <div class="media-left">
							      <a href="#">
							        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_002.jpg'); ?>" data-holder-rendered="true">
							      </a>
							    </div>
							    <div class="media-body">
							      <h4 class="media-heading" id="media-heading">Sholawat<a class="anchorjs-link" href="#media-heading"><span class="anchorjs-icon"></span></a></h4>
							      <a href="#">Majelis rosululloh sdfsdfsd sdfsdfdsf ...</a> <!-- 40 huruf -->
							    </div>
							 </div>
						  </li>
						  <li class="list-group-item">
						  	<div class="media">
							    <div class="media-left">
							      <a href="#">
							        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_002.jpg'); ?>" data-holder-rendered="true">
							      </a>
							    </div>
							    <div class="media-body">
							      <h4 class="media-heading" id="media-heading">Sholawat<a class="anchorjs-link" href="#media-heading"><span class="anchorjs-icon"></span></a></h4>
							      <a href="#">Majelis rosululloh sdfsdfsd sdfsdfdsf ...</a> <!-- 40 huruf -->
							    </div>
							 </div>
						  </li>
						  <li class="list-group-item">
						  	<div class="media">
							    <div class="media-left">
							      <a href="#">
							        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_002.jpg'); ?>" data-holder-rendered="true">
							      </a>
							    </div>
							    <div class="media-body">
							      <h4 class="media-heading" id="media-heading">Sholawat<a class="anchorjs-link" href="#media-heading"><span class="anchorjs-icon"></span></a></h4>
							      <a href="#">Majelis rosululloh sdfsdfsd sdfsdfdsf ...</a> <!-- 40 huruf -->
							    </div>
							 </div>
						  </li>
						  <li class="list-group-item">
						  	<div class="media">
							    <div class="media-left">
							      <a href="#">
							        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('public/images/img_002.jpg'); ?>" data-holder-rendered="true">
							      </a>
							    </div>
							    <div class="media-body">
							      <h4 class="media-heading" id="media-heading">Sholawat<a class="anchorjs-link" href="#media-heading"><span class="anchorjs-icon"></span></a></h4>
							      <a href="#">Majelis rosululloh sdfsdfsd sdfsdfdsf ...</a> <!-- 40 huruf -->
							    </div>
							 </div>
						  </li>
						</ul>
					</div>
				</div>
				

			</div>
		</div>
	</div>
</div>

<footer class="bs-docs-footer" role="contentinfo">
  <div class="container">
    <div class="row">

    	<div class="col-md-4">
    	<fieldset class="footer-fieldset">
    		<legend>Alamat</legend>
    		<ul>
    			<li><a href="" class="menu-footer">APA?</a></li>
    			<li><a href="" class="menu-footer">APA?</a></li>
    			<li><a href="" class="menu-footer">APA?</a></li>
    		</ul>
    	</fieldset>
    	</div>

    	<div class="col-md-4">
    	<fieldset class="footer-fieldset">
    		<legend>Donasi</legend>
    		<ul>
    			<li><a href="" class="menu-footer">APA?</a></li>
    			<li><a href="" class="menu-footer">APA?</a></li>
    			<li><a href="" class="menu-footer">APA?</a></li>
    		</ul>
    	</fieldset>
    	</div>

    	<div class="col-md-4">
    	<fieldset class="footer-fieldset">
    		<legend>Sosial Media</legend>
    		<ul>
    			<li><a href="" class="menu-footer">APA?</a></li>
    			<li><a href="" class="menu-footer">APA?</a></li>
    			<li><a href="" class="menu-footer">APA?</a></li>
    		</ul>
    	</fieldset>
    	</div>

    </div>
  </div>
</footer> 
</body>
</html>