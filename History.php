<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BooksBazar buy/sell old books </title>
<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
<link rel="stylesheet" href="css/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta -equiv="Content-Type" content="text/html; charset=utf-8" />
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
<!-- //language-select -->
<!-- switcher-grid and list alignment -->
<script src="js/tabs.js"></script>	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
</script>

<style>
.buttoni {
    background-color:#ff4c4c;
	border: none;
    color: white;
	top: -15px;
	left: 50px;	
    padding: 9px 25px;
    font-size: 18px;
}
.buttoni:hover {
    background-color: #008CBA;
    color: white;
}
.buttoni3 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    background-color:#ff4c4c;
	border: none;
    color: white;
	top: -15px;
	left: 50px;	
    padding: 7px 20px;
    font-size: 15px;
}
.buttoni3:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    background-color: #008CBA;
    color: white;
}

input[type=email] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 4px;
    font-size: 15px;

}
input[type=email]:focus {
    border: 3px solid #008CBA;
}

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
.buttoni2 {

    background: transparent;
    border: none !important;
	top: -15px;
	left: 50px;	
    padding: 4px 11px;
    font-size: 15px;
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


<!-- //switcher-grid and list alignment -->
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
		</div>
	</header>
	<br>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Products -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
				<!--Search -->
			<form class="form-horizontal" action="Search.php" method="get">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your city to see local ads</label>
						<select name="sel_city">
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
												
			            </select>
				</div>
				
				<div class="browse-category ads-list">
					<label>Browse Categories</label>
					<select name="sel_cat">
						<option selected style="display:none;color:#eee;">Select Category</option>
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
				</div>
				<div class="search-product ads-list">
					<label>Search for a specific product</label>
					<div class="search">
						<div id="custom-search-input">
						<div class="input-group">
							<input type="text" class="form-control input-lg" name="sel_title" placeholder="Enter AD Title" />
							<span class="input-group-btn">
							
							<!--search-->
								<button class="btn btn-info btn-lg" name="submit1" value="Get Selected Values">
									<i class="glyphicon glyphicon-search"></i>
								</button>
								
							</span>
						</div>
					</div>
					</div>
				</div>
				<div class="clearfix"></div>
				</form>
			</div>
			<!--search end-->

					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<!--Sorting by price-->
								<div class="sort">
								   <div class="sort-by">
								   <form>
										<label>Sort By Price: </label>
										<select name="sortp" onchange="this.form.submit()">
														<option selected style="display:none;color:#eee;">select option</option>
														<option value="LH"> Price: Rs Low to High </option>
														<option value="HL"> Price: Rs High to Low </option>
										</select>
									</form>
									   </div>
									</div>
							<!--Sorting-->
								<div class="clearfix"></div>
						<ul class="list">
							
							<!-- Retrieve data from database bb-->	
							<?php
								include("config.php");
								// Check connection
								$sort_p="";
								if(isset($_GET["sortp"]))
								{
								   $sort_p=$_GET["sortp"];
								}
								if ($sort_p == "LH")
								{
									$sql = "SELECT * FROM postad where ad_category='History' ORDER BY ad_price ASC";
									$result = mysqli_query($conn, $sql);
								
									while ($row = mysqli_fetch_array($result))
									{
										$adcategory=$row['ad_category'];
										$adtitle = $row['ad_title'];
										$addescription =$row['ad_description'];
										$adcity =$row['ad_city'];
										$adprice =$row['ad_price'];
										$adimg=$row['ad_image'];
										$adtime=$row['TimeStamp'];
										$no=$row['s_mobile'];
									    $s_email=$row['s_email'];
										$sname=$row['s_name'];
										
										echo "<li>";
										echo '<img src="'.$adimg.'" alt="NO IMAGE AVAILABLE !" width=100 height=200>'."&nbsp;&nbsp;";
										echo '<section class="list-left">';
										echo '<font color="	#1E90FF"><h3>'.$adtitle.'</h3></font>';
										echo "<hr>";
										echo '<h4>Category : <font color="#696969">'.$adcategory.'</font></h4>';
										echo '<div class="product-details">';
										echo '<h4><span class="-agileinfo">Details</span> :<p><font color="#696969">'.$addescription.'</font></p><div class="clearfix"></div></h4>';
										echo '<span class="adprice">Rs.'.$adprice;
									
									
			//<!--mail coding-->
                                  echo '&emsp;&emsp;&emsp;&emsp;<button type="button" class="buttoni3" data-toggle="modal" data-target="#iModal">Contact Seller</button>';
                                  echo '<div class="modal fade" id="iModal" role="dialog">';
                                    echo '<div class="modal-dialog">';
                                      echo '<div class="modal-content">';
                                        echo '<div class="modal-header">';
                                          echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
                                          echo '<font color="#000000"><h2 class="modal-title">Enter Your Email Id</h2>';
                                        echo '</div>';
                                        echo '<div class="modal-body" >';
                                        echo '<form action="mail.php" method="post">';
                                        echo '<input type="email" name="email" placeholder="Enter mail">';
                                        echo '<input type="hidden" name="sname" value='.$sname.'>';
                                        echo '<input type="hidden" name="no" value='.$no.'>';
                                        echo '<input type="hidden" name="s_email" value='.$s_email.'>';
                                        echo '&emsp;&emsp;<button type="submit" class="buttoni3" id="signup" name="submit">Send</button><br>';
                                        echo '</form>';
                                        echo '</div>';
                                      echo '</div>';
                                      
                                    echo '</div>';
                                  echo '</div>';
        //<!--mail coding-->
								echo '</section>';		
										echo '<section class="list-right">';
										echo '<span class="date">'.$adtime.'</span>';
										echo '<i class="glyphicon glyphicon-map-marker"></i>'.$adcity;
										echo '</section>';
										
										//echo '<div class="product-details">';
										
										
										echo '<div class="clearfix"></div>';
										echo "</li>";
									}
									mysqli_close($conn);
								}
								elseif ($sort_p == "HL")
								{
									$sql = "SELECT * FROM postad where ad_category='History' ORDER BY ad_price DESC";
									$result = mysqli_query($conn, $sql);
								
									while ($row = mysqli_fetch_array($result))
									{
										$adcategory=$row['ad_category'];
										$adtitle = $row['ad_title'];
										$addescription =$row['ad_description'];
										$adcity =$row['ad_city'];
										$adprice =$row['ad_price'];
										$adimg=$row['ad_image'];
										$adtime=$row['TimeStamp'];
										$no=$row['s_mobile'];
									    $s_email=$row['s_email'];
										$sname=$row['s_name'];
										
										echo "<li>";
										echo '<img src="'.$adimg.'" alt="NO IMAGE AVAILABLE !" width=100 height=200>'."&nbsp;&nbsp;";
										echo '<section class="list-left">';
										echo '<font color="	#1E90FF"><h3>'.$adtitle.'</h3></font>';
										echo "<hr>";
										echo '<h4>Category : <font color="#696969">'.$adcategory.'</font></h4>';
										echo '<div class="product-details">';
										echo '<h4><span class="-agileinfo">Details</span> :<p><font color="#696969">'.$addescription.'</font></p><div class="clearfix"></div></h4>';
										echo '<span class="adprice">Rs.'.$adprice;
									
									
			//<!--mail coding-->
                                  echo '&emsp;&emsp;&emsp;&emsp;<button type="button" class="buttoni3" data-toggle="modal" data-target="#iModal">Contact Seller</button>';
                                  echo '<div class="modal fade" id="iModal" role="dialog">';
                                    echo '<div class="modal-dialog">';
                                      echo '<div class="modal-content">';
                                        echo '<div class="modal-header">';
                                          echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
                                          echo '<font color="#000000"><h2 class="modal-title">Enter Your Email Id</h2>';
                                        echo '</div>';
                                        echo '<div class="modal-body" >';
                                        echo '<form action="mail.php" method="post">';
                                        echo '<input type="email" name="email" placeholder="Enter mail">';
                                        echo '<input type="hidden" name="sname" value='.$sname.'>';
                                        echo '<input type="hidden" name="no" value='.$no.'>';
                                        echo '<input type="hidden" name="s_email" value='.$s_email.'>';
                                        echo '&emsp;&emsp;<button type="submit" class="buttoni3" id="signup" name="submit">Send</button><br>';
                                        echo '</form>';
                                        echo '</div>';
                                      echo '</div>';
                                      
                                    echo '</div>';
                                  echo '</div>';
        //<!--mail coding-->
								echo '</section>';		
										echo '<section class="list-right">';
										echo '<span class="date">'.$adtime.'</span>';
										echo '<i class="glyphicon glyphicon-map-marker"></i>'.$adcity;
										echo '</section>';
										
										//echo '<div class="product-details">';
										
										
										echo '<div class="clearfix"></div>';
										echo "</li>";
									}
									mysqli_close($conn);
								}
								else
								{
									$sql = "SELECT * FROM postad where ad_category='History' ORDER BY TimeStamp DESC";
									$result = mysqli_query($conn, $sql);
								
									while ($row = mysqli_fetch_array($result))
									{
										$adcategory=$row['ad_category'];
										$adtitle = $row['ad_title'];
										$addescription =$row['ad_description'];
										$adcity =$row['ad_city'];
										$adprice =$row['ad_price'];
										$adimg=$row['ad_image'];
										$adtime=$row['TimeStamp'];
										$no=$row['s_mobile'];
									    $s_email=$row['s_email'];
										$sname=$row['s_name'];
										
										echo "<li>";
										echo '<img src="'.$adimg.'" alt="NO IMAGE AVAILABLE !" width=100 height=200>'."&nbsp;&nbsp;";
										echo '<section class="list-left">';
										echo '<font color="	#1E90FF"><h3>'.$adtitle.'</h3></font>';
										echo "<hr>";
										echo '<h4>Category : <font color="#696969">'.$adcategory.'</font></h4>';
										echo '<div class="product-details">';
										echo '<h4><span class="-agileinfo">Details</span> :<p><font color="#696969">'.$addescription.'</font></p><div class="clearfix"></div></h4>';
										echo '<span class="adprice">Rs.'.$adprice;
									
									
			//<!--mail coding-->
                                  echo '&emsp;&emsp;&emsp;&emsp;<button type="button" class="buttoni3" data-toggle="modal" data-target="#iModal">Contact Seller</button>';
                                  echo '<div class="modal fade" id="iModal" role="dialog">';
                                    echo '<div class="modal-dialog">';
                                      echo '<div class="modal-content">';
                                        echo '<div class="modal-header">';
                                          echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
                                          echo '<font color="#000000"><h2 class="modal-title">Enter Your Email Id</h2>';
                                        echo '</div>';
                                        echo '<div class="modal-body" >';
                                        echo '<form action="mail.php" method="post">';
                                        echo '<input type="email" name="email" placeholder="Enter mail">';
                                        echo '<input type="hidden" name="sname" value='.$sname.'>';
                                        echo '<input type="hidden" name="no" value='.$no.'>';
                                        echo '<input type="hidden" name="s_email" value='.$s_email.'>';
                                        echo '&emsp;&emsp;<button type="submit" class="buttoni3" id="signup" name="submit">Send</button><br>';
                                        echo '</form>';
                                        echo '</div>';
                                      echo '</div>';
                                      
                                    echo '</div>';
                                  echo '</div>';
        //<!--mail coding-->
								echo '</section>';		
										echo '<section class="list-right">';
										echo '<span class="date">'.$adtime.'</span>';
										echo '<i class="glyphicon glyphicon-map-marker"></i>'.$adcity;
										echo '</section>';
										
										//echo '<div class="product-details">';
										
										
										echo '<div class="clearfix"></div>';
										echo "</li>";
									}
									mysqli_close($conn);
								}
							?>
						</ul>
						</div>

							</div>
						</div>
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Products -->
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
										<li><span class="glyphicon glyphicon-envelope"></span></li>&nbsp;&nbsp;&nbsp;admin@booksbazar.club
									</ul>						
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
</html