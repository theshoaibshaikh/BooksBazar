<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BooksBazar buy/sell old books </title>
<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" href="css/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gptians Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<!-- language-select -->
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
		
<style>
.buttoni1 {
    background-color:none;
	border: none;
    color: black;
	top: -15px;
	left: 50px;	
    padding: 9px 25px;
    font-size: 18px;
}
.buttoni1:hover {
    background-color: #008CBA;
    color: white;
}
#container1 {
  text-align: justify;
  min-width: 950px;
   border: none !important;
}

#container1 div {
  width: 80px;
  display: inline-block;
 background-color:none;
}

#container1:after {
  width: 100%;
  display: inline-block;
}
</style>

<!-- //language-select -->
</head>
<body>
	<!-- Navigation -->
		<div class="agiletopbar">
			<div class="wthreenavigation">
				<div class="menu-wrap">
				<nav class="menu">
					<div class="icon-list">
						<a href="allfields.php"><i class="fa fa-fw fa-search-plus"></i><span>All Categories </span></a>
						<a href="School.php"><i class="fa fa-fw fa-edit"></i><span>School </span></a>
						<a href="Medical.php"><i class="fa fa-fw fa-plus-square"></i><span>Medical</span></a>
						<a href="Engineering.php"><i class="fa fa-fw fa-gears"></i><span>Engineering</span></a>
						<a href="History.php"><i class="fa fa-fw fa-h-square"></i><span>History</span></a>
						<a href="Geology.php"><i class="fa fa-fw fa-globe"></i><span>Geology</span></a>
						<a href="Zoology.php"><i class="fa fa-fw fa-paw"></i><span>Zoology</span></a>
						<a href="Sports.php"><i class="fa fa-fw fa-book"></i><span>Sports</span></a>
						<a href="Fashion.php"><i class="fa fa-fw fa-asterisk"></i><span>Fashion</span></a>
						<a href="Kids.php"><i class="fa fa-fw fa fa-gamepad"></i><span>Kids</span></a>
						<a href="Cookery.php"><i class="fa fa-fw fa fa-cutlery"></i><span>Cookery</span></a>
						<a href="Novels.php"><i class="fa fa-fw fa-envira"></i><span>Novels</span></a>
						<a href="Others.php"><i class="fa fa-fw fa-list-ul"></i><span>Others</span></a>
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
			</div>
			<button class="menu-button" id="open-button"> </button>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //Navigation -->
	<!-- header -->
	<header>
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
					<li class="dropdown head-dpdn">
						<div class="header-right">				
	<!-- Large modal -->
			<div class="selectregion">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				<i class="fa fa-globe" aria-hidden="true"></i>Select City</button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
								</div>
								<div class="modal-body">
									 <form class="form-horizontal" action="City.php" method="get">
									 
			 <!--********************************CITY SELECT CODE HERE ************************************************-->
										
										<div class="form-group">
										<h4 class="modal-title" id="myModalLabel">
										<button type="submit" class="buttoni1" name="submit" value="Get Selected Values" aria-label="Left Align">
										<i class="fa fa-mail-reply-all" aria-hidden="true"> </i>
									 </button>
									 &nbsp;&nbsp;&nbsp;&nbsp;
										Please Choose Your Location</h4>
										<hr>
											<select id="basic2" name="Color" class="show-tick form-control" multiple>
												<optgroup label="Popular Cities">
													<option selected style="display:none;color:#eee;">Select City</option>
													<option value="Mumbai">Mumbai</option>
													<option value="Byculla">Byculla</option>
													<option value="Dadar">Dadar</option>
													<option value="Kurla">Kurla</option>
													<option value="Ghatkopar">Ghatkopar</option>
													<option value="Thane">Thane</option>
													<option value="Dombivali">Dombivali</option>
													<option value="Kalyan">Kalyan</option>
													<option value="Vashi">Vashi</option>
													<option value="Nerul">Nerul</option>
													<option value="Bandra">Bandra</option>
													<option value="Mulund">Mulund</option>
													<option value="Andheri">Andheri</option>
													<option value="Panvel">Panvel</option>	
												</optgroup>
											</select>
										</div>
									  </form>    
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div> 
		</div>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="index.html"><span>Books</span>Bazar</a></h1>
				</div>
					<div>
					&nbsp;&nbsp;&nbsp;
					<img class="imgpos" src="images/booksdes3.png" width="50" height="50" align="middle">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img class="imgpos" src="images/booksdes9.png" width="60" height="60" align="middle">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img class="imgpos" src="images/booksdes2.png" width="50" height="50" align="middle">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img class="imgpos" src="images/bookdes1.png" width="50" height="50" align="middle">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img class="imgpos" src="images/booksdes4.jpg" width="50" height="50" align="middle">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img class="imgpos" src="images/booksdes5.jpg" width="50" height="50" align="middle">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img class="imgpos" src="images/booksdes6.png" width="50" height="50" align="middle">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img class="imgpos" src="images/booksdes7.png" width="50" height="50" align="middle">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img class="imgpos" src="images/booksdes8.png" width="50" height="50" align="middle">
				</div>
		</div>
		<br>
	</header>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
		<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 class="w3-head">Post an Ad</h2>
			<div class="post-ad-form">
				<form action="thankyou.php" enctype="multipart/form-data" method="post">
					<label>Select Category <span>*</span></label>
					<select name="category" class="title">
					  <option value="" disabled selected hidden>Select Category</option>
					  <option value="School">School</option>
					  <option value="Medical">Medical</option>
					  <option value="Engineering">Engineering</option>
					  <option value="History">History</option>
					  <option value="Geology">Geology</option>
					  <option value="Zoology">Zoology</option>
					  <option value="Sports">Sports</option>
					  <option value="Fashion">Fashion</option>
					  <option value="Kids">Kids</option>
					  <option value="Cookery">Cookery</option>
					  <option value="Novels">Novels</option>
					  <option value="Others">Others</option>
					</select>
					
					<!-- Select City -->
					<br>
					<label>Select City <span>*</span></label>
					<select name="city" class="title">
					    <option value="" disabled selected hidden>Select your city</option>
					    <option value="Mumbai">Mumbai</option>
						<option value="Byculla">Byculla</option>
						<option value="Dadar">Dadar</option>
						<option value="Kurla">Kurla</option>
						<option value="Ghatkopar">Ghatkopar</option>
						<option value="Thane">Thane</option>
						<option value="Dombivli">Dombivali</option>
						<option value="Kalyan">Kalyan</option>
						<option value="Vashi">Vashi</option>
						<option value="Nerul">Nerul</option>
						<option value="Bandra">Bandra</option>
						<option value="Mulund">Mulund</option>
						<option value="Andheri">Andheri</option>
						<option value="Panvel">Panvel</option>
					</select>
					<br>
				
					<label>Ad Title <span>*</span></label>
					<input type="text" class="phone" name="title" maxlength="100" required>
					
					
					<label>Price<span>*</span></label>
					<input type="text" class="phone" name="price" maxlength="4" required>
					
					<label>Ad Description <span>*</span></label>
					<textarea class="mess" placeholder="Write few lines about your product" pattern="[A-Za-z]{1,32}" name="description" maxlength="2000" required></textarea>
					
					<div class="upload-ad-photos">
					<label>Photos for your ad :</label>	
					<input name="uploadedimage" class="photos-upload-view" type="file">
					<br>
					<br>
					</div>
					
					<div class="personal-details">
						<label>Your Name <span>*</span></label>
						<input type="text" class="name" pattern="[A-Za-z]{1,32}+[A-Za-z]{1,32}" name="name" required>
						<label>Your Mobile No <span>*</span></label>
						<input type="text" class="phone" pattern="[789][0-9]{9}" name="mobile" maxlength="10" required>
						<label>Your Email Address<span>*</span></label>
						<input type="text" class="email" pattern="[^ @]*@[^ @]*" name="email" required>
						<div class="clearfix"></div>
						<p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="terms.html" target="_blank">Terms of Use </a> <a href="privacy.html" target="_blank"></a></p>
					<input type="submit" value="post">
			</div>
		</div>	
	</div>
	<!-- // Submit Ad -->
	<!--footer section start-->		
		<footer>
				<div class="w3-agileits-footer-top">
					<div class="container">
						<div class="wthree-foo-grids">
							<div class="col-md-3 wthree-footer-grid">
								<h4 class="footer-head">Who We Are</h4>
								<p>A team of youngsters who developed a platform for buying and selling of old books.</p>
							</div>
							
							<div class="col-md-3 wthree-footer-grid">
								<h4 class="footer-head">Book Sold ?</h4>
								<p>If the book has been sold and you want to delete an ad email us from the same email address which you used to post an ad. Write your book name in the subject.</p>
							</div>
							<div class="col-md-3 wthree-footer-grid">
								<h4 class="footer-head">Information</h4>
								<ul>
									<li><a href="terms.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Terms of Use</a></li>
									
								</ul>
							</div>
							<div class="col-md-3 wthree-footer-grid">
								<h4 class="footer-head">Contact Us</h4>
								<span class="hq">Our Headquarters</span>
								<address>
									<ul class="location">
										<li><span class="glyphicon glyphicon-map-marker"></span></li>&nbsp;&nbsp;&nbsp;Mumbai,Maharashtra,India
									</ul>	
									<div class="clearfix"> </div>
									<ul class="location">
										<li><span class="glyphicon glyphicon-earphone"></span></li>&nbsp;&nbsp;&nbsp;+91 720 8310 370
									</ul>	
									<div class="clearfix"> </div>
									<ul class="location">
										<li><span class="glyphicon glyphicon-envelope"></span></li>&nbsp;&nbsp;&nbsp;admin@booksbazar.club							</ul>						
								</address>
							</div>
							<div class="clearfix"></div>
						</div>						
					</div>	
				</div>	
				<div class="agileits-footer-bottom text-center">
				<div class="container">
					<div class="w3-footer-logo">
						<h1><a href="index.html"><span>Books</span>Bazar</a></h1>
					</div>
					<div class="w3-footer-social-icons">
						
					</div>
					<div class="copyrights">
						<p> © 2017 Gptians. All Rights Reserved | Design by SRPM <a href="http://.com/"> </a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</footer>
        <!--footer section end--> 

</body>
		<!-- Navigation-JavaScript -->
			<script src="js/classie.js"></script>
			<script src="js/main.js"></script>
		<!-- //Navigation-JavaScript -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->

</html>