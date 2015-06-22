<!DOCTYPE html>
<!-- 
Template Name: Trustran - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/Trustran-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>


  <meta charset="utf-8">
  <title>Trustran One Page</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Trustran Shop UI description" name="description">
  <meta content="Trustran Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">
  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->
  <!-- Global styles BEGIN -->
  <link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
  <!-- Global styles END -->
  <!-- Page level plugin styles BEGIN -->
  <link href="../../assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->
  <!-- Theme styles BEGIN -->
  <link href="../../assets/global/css/components.css" rel="stylesheet">
  <link href="../../assets/frontend/onepage/css/style.css" rel="stylesheet">
  <link href="../../assets/frontend/onepage/css/style-responsive.css" rel="stylesheet">
  <link href="../../assets/frontend/onepage/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="./css/trustran-profile.css" rel="stylesheet" id="style-color">
  <link href="../../assets/frontend/onepage/css/custom.css" rel="stylesheet">
  
  <!-- Theme styles END -->
  
    <style>
.huge_orange {
margin: 0 auto;
text-align:center;
color:#5f6f7e;
font-weight:400;
font-size:100px;
line-height:120px;
font-family: 'Oswald', sans-serif;
border-width:0px;
border-style:none;
white-space:nowrap;
}

#promo-block{border-bottom:1px solid #e84d1c}

.custom-navigation {
  list-style: none;
  padding: 19px 0 0;
  margin: 0;
  font: 400 18px "PT Sans Narrow", Arial, sans-serif;
  text-transform: uppercase;
  display:inline;
}
.custom-navigation li {
  padding: 0;
  margin: 0 0 0 25px;
  display:inline;
  line-height:60px;
}
.custom-navigation a {
  color: #78828c;
  padding: 5px 10px;
}
.custom-navigation a:hover,
.custom-navigation li.current a {
  color: #e6400c;
}

.header a:hover {
  text-decoration: none;
}
.header {
   position: static; 
   top: auto; 
}
.padding-left-40{padding-left:60px;}
.profile-gal-thumb{width:60px;margin:3px;}
.big{font-size:25px;line-height:60px;}
 .big i{font-size:20px !important;line-height:60px;}
 .contact-marker{color:#2dafe5 !important;font-size:19px !important; line-height:22px;}
</style>
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body>

  <!-- Promo block BEGIN -->
  <div class="promo-block" id="promo-block">
    <div class="tp-banner-container">
      <div class="tp-banner" >
        <ul>
          <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-delay="9400" class="slider-item-1">
				<div  class="huge_orange start"
				 data-speed="1000"
              data-start="500"
              data-easing="Back.easeInOut"
              data-endspeed="300"
			  ><?php echo $userParams[0]['login']?></div>
                
          </li>
          
        </ul>
      </div>
    </div>
  </div>
  <!-- Promo block END -->
  
  <!-- Header BEGIN -->
  <div class="header header-mobi-ext  content content-center">
    <div class="container ">
      <div class="row">
        
        <!-- Navigation BEGIN -->
        <div class="col-md-12">
          <ul class="custom-navigation">
            <li class="current"><a href="#promo-block">Start</a></li>
            <li><a href="#about">Zakres usług</a></li>
            <li><a href="#services">O mnie / o firmie</a></li>
            
            <li><a href="#reviews">Opinie klientów</a></li>
            <li><a href="#contact">Kontakt</a></li>
          </ul>
        </div>
        <!-- Navigation END -->
      </div>
    </div>
  </div>
  <!-- Header END -->
  
  <!-- About block BEGIN -->
  <div class="content content-left" id="about">
    <div class="container">
     <div class="row">
     <div class="col-md-12 content-center">
     	<h2><strong>Zakres</strong> usług</h2>
     </div>
     </div>
      <div class="row">
		
		<div class="col-md-5 content-center">
		
		<!--IMAGES -->
		<div style="padding-top:0px;background:none;" class="portfolio-block content content-center" id="portfolio">
		
			<div class="row">
			  <div class="item col-md-4 col-sm-6 col-xs-12">
				<img src="../../assets/frontend/onepage/img/portfolio/2.jpg" alt="NAME" class="img-responsive">
				<a href="../../assets/frontend/onepage/img/portfolio/2.jpg" class="zoom valign-center">
				  <div class="valign-center-elem" style="position: absolute; top: 50%; margin-top: -40px; width: 100%; height: 80px;">
				    <strong>Zdjęcie z galerii</strong>
				    
				    <b>Zobacz</b>
				  </div>
				</a>
			  </div>
			  <div class="item col-md-4 col-sm-6 col-xs-12">
				<img src="../../assets/frontend/onepage/img/portfolio/6.jpg" alt="NAME" class="img-responsive">
				<a href="../../assets/frontend/onepage/img/portfolio/6.jpg" class="zoom valign-center">
				  <div class="valign-center-elem" style="position: absolute; top: 50%; margin-top: -40px; width: 100%; height: 80px;">
				    <strong>Zdjęcie z galerii</strong>
				    
				    <b>Zobacz</b>
				  </div>
				</a>
			  </div>
			  <div class="item col-md-4 col-sm-3 col-xs-12">
				<img src="../../assets/frontend/onepage/img/portfolio/8.jpg" alt="NAME" class="img-responsive">
				<a href="../../assets/frontend/onepage/img/portfolio/8.jpg" class="zoom valign-center">
				  <div class="valign-center-elem" style="position: absolute; top: 50%; margin-top: -40px; width: 100%; height: 80px;">
				    <strong>Zdjęcie z galerii</strong>
				    
				    <b>Zobacz</b>
				  </div>
				</a>
			  </div>
			  <div class="item col-md-4 col-sm-3 col-xs-12">
				<img src="../../assets/frontend/onepage/img/portfolio/3.jpg" alt="NAME" class="img-responsive">
				<a href="../../assets/frontend/onepage/img/portfolio/3.jpg" class="zoom valign-center">
				  <div class="valign-center-elem" style="position: absolute; top: 50%; margin-top: -40px; width: 100%; height: 80px;">
				    <strong>Zdjęcie z galerii</strong>
				    
				    <b>Zobacz</b>
				  </div>
				</a>
			  </div>
			  <div class="item col-md-4 col-sm-3 col-xs-12">
				<img src="../../assets/frontend/onepage/img/portfolio/5.jpg" alt="NAME" class="img-responsive">
				<a href="../../assets/frontend/onepage/img/portfolio/5.jpg" class="zoom valign-center">
				  <div class="valign-center-elem" style="position: absolute; top: 50%; margin-top: -40px; width: 100%; height: 80px;">
				    <strong>Zdjęcie z galerii</strong>
				    
				    <b>Zobacz</b>
				  </div>
				</a>
			  </div>
			  <div class="item col-md-4 col-sm-3 col-xs-12">
				<img src="../../assets/frontend/onepage/img/portfolio/4.jpg" alt="NAME" class="img-responsive">
				<a href="../../assets/frontend/onepage/img/portfolio/4.jpg" class="zoom valign-center">
				  <div class="valign-center-elem" style="position: absolute; top: 50%; margin-top: -40px; width: 100%; height: 80px;">
				    <strong>Zdjęcie z galerii</strong>
				    
				    <b>Zobacz</b>
				  </div>
				</a>
			  </div>
			  
			</div>
			<!--end IMAGES -->
		  
			<hr />
			<div class="carousel slide" data-ride="carousel" id="testimonials-block">
		    <!-- Wrapper for slides -->
		
			<div class="caption">
		              <span class="big"><i class="fa fa-comment-o"></i> Najnowsze opinie </span>
		            </div>
		    <div class="carousel-inner">
		      <!-- Carousel items -->
		      <div class="active item">
		        <blockquote>
		          <p>This is the most awesome, full featured, easy, costomizeble theme. Itӳ extremely responsive and very helpful to all suggestions.</p>
		        </blockquote>
		        <span class="testimonials-name">Mark Doe</span>
		      </div>
		      <!-- Carousel items -->
		      <div class="item">
		        <blockquote>
		          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
		        </blockquote>
		        <span class="testimonials-name">Joe Smith</span>
		      </div>
		      <!-- Carousel items -->
		      <div class="item">
		        <blockquote>
		          <p>Williamsburg carles vegan helvetica. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p>
		        </blockquote>
		        <span class="testimonials-name">Linda Adams</span>
		      </div>
		    </div>
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#testimonials-block" data-slide-to="0" class="active"></li>
		      <li data-target="#testimonials-block" data-slide-to="1"></li>
		      <li data-target="#testimonials-block" data-slide-to="2"></li>
		    </ol>
		  </div>
		  </div>
		</div>
		<div class="col-md-7 ">
		<div class="pricing-content">
		 
              <div class="clearfix"></div>
			  <br />
              <ul class="list-unstyled">
                <li> <h4> <i class="fa fa-circle"></i> Miejscowość: Konin</h4></li>
                <li> <h4> <i class="fa fa-circle"></i> Zakres usług:</h4>
				<br />
					<ul>
						<li> Transport na lotniska: Liverpool, Manchester, Poznań, Warszawa, Birmingham, Katowice</li>
						<li> Dowóz w dowolne miejsce na terenie kraju.</li>
					</ul>
				</li>
               
              </ul>
            </div>
		
		<div id="profile_location_map" class="gmaps margin-bottom-40" style="height:320px;"></div>
		</div>
      </div>
    </div>
  </div>
  <!-- About block END -->
  <!-- Services block BEGIN -->
  <div class="services-block content content-left" id="services">
    <div class="container">
      <h2>O mnie / <strong>o firmie</strong></h2>
      <div class="row">
        <div class="col-md-3" >
		 <img src="../../img/o-mnie/o-mnie-1.jpg" alt="walmart" class="img-responsive">
		 </div>
		 <div class="col-md-9" >
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
			nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
			nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
			nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
			nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
			nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
			nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
			nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
			nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
			nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Services block END -->
  
  
  <!-- Choose us block BEGIN -->
  <div class="choose-us-block content text-center margin-bottom-40" id="reviews">
    <div class="container">
      <h2>Opinie <strong>klientów</strong></h2>
	  <?php
	  $reviews = array(
									array('author'=>'Mark Doe', 'content'=>'This is the most awesome, full featured, easy,extremely responsive and very helpful to all suggestions.'),
									array('author'=>'Karol Doe', 'content'=>'This is the most awesome, full featured, easy, costomizeble theme. It\92s extremely responsive and very helpful to all suggestions.'),
									array('author'=>'Mark Nikolson', 'content'=>'This is themost awesome, full featured, easy, costomizeble theme. most awesome, full featured, easy, costomizeble theme. It\92s extremely responsive and very helpful to all suggestions.'),
									array('author'=>'Jarek Doe', 'content'=>'This is the most  responsive and very helpful to all suggestions.'),
									array('author'=>'Mark Doe', 'content'=>'This is the most awesome, full featured, eas extremely responsive and very helpful to all suggestions.')
								);
	  ?>
	  <?php  foreach($reviews as $review):?>
      	<div class="item">
              <p><i><?php echo $review['content']?></i></p>
            <span class="testimonials-name"><?php echo $review['author']?></span>
            <hr />
   		</div>
		<? endforeach;?>
    </div>
  </div>
  <!-- Choose us block END -->
  
  <!-- Facts block BEGIN -->
  <div class="content content-center" id="contact">
    <h2>Kontakt</h2>
    <div class="container">
      <div class="row">
        <!-- BEGIN CONTENT -->
          <div class="col-md-12">
            
            <div class="content-page">
              <div class="row">
                
                <div class="col-md-12 col-sm-12">
                 
				Tutaj klient wpisuje jakąś dodatkową informację jeśli chce. Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit, 
				sed diam nonummy nibh euismod tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
				<div class="separator-orange"><br /><br /></div>
					<?php
					$contact_params = array(
																array('type'=>'Nazwa firmy', 'val'=>'Transpol', 'icon'=>'fa-angle-double-right'),
																array('type'=>'Miejscowość', 'val'=>'Warszawa', 'icon'=>'fa-map-marker'),
																array('type'=>'Nr telefonu', 'val'=>'676 655 433', 'icon'=>'fa-mobile'),
																array('type'=>'Adres e-mail', 'val'=>'transpol@jakasf.pl', 'icon'=>'fa-envelope-o'),
																array('type'=>'Nr GG', 'val'=>'5444433', 'icon'=>'fa-sun-o'),
																array('type'=>'Skype', 'val'=>'transpol.firma', 'icon'=>'fa-skype')
																);
					?>
					<?php foreach($contact_params as $param):?>
					<div class="row">
					<div class="col-md-6 text-right"><h4><?php echo $param['type']?>  : </h4></div> 
					<div class="col-md-6 text-left lead lead"><h4> <span   class="contact-marker fa <?php echo $param['icon']?>">&nbsp;</span> <?php echo $param['val']?></h4></div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			 <div class="row">
                
                <div class="col-md-2"></div>
				<div class="col-md-8">
					<h3>Prześlij wiadomość</h3>
					  <!-- BEGIN FORM-->
					  <form action="#" role="form">
						<div class="form-group">
						  <input type="text" class="form-control text-center" id="contacts-name" placeholder="Imię i nazwisko">
						</div>
						<div class="form-group">
						  <input type="email" class="form-control text-center" id="contacts-email" placeholder="Email">
						</div>
						<div class="form-group">
						  <textarea class="form-control text-center" rows="5" id="contacts-message" placeholder="Twoja wiadomość"></textarea>
						</div>
						<button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Wyślij</button>
						<button type="button" class="btn btn-default">Anuluj</button>
					  </form>
						<br /> <br />
					  <!-- END FORM-->
				 </div>
				 <div class="col-md-2"></div>
			</div>
				  
				

                
				
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
      </div>
    </div>
  </div>
   <div id="profile_contact_map" class="gmaps " style="height:300px;"></div>
  <!-- Facts block END -->

  <!-- BEGIN FOOTER -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <!-- BEGIN COPYRIGHT -->
        <div class="col-md-6 col-sm-6">
          <div class="copyright">2015 Trustran One Page. ALL Rights Reserved.</div>
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN SOCIAL ICONS -->
        <div class="col-md-6 col-sm-6 pull-right">
          email: adres@email.pl | skype: nazwa.skype |  tel: 432 432 432
        </div>
        <!-- END SOCIAL ICONS -->
      </div>
    </div>
  </div>
  <!-- END FOOTER -->
  <a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>
  <!--[if lt IE 9]>
  <script src="../../assets/global/plugins/respond.min.js"></script>
  <![endif]-->
  <!-- Load JavaScripts at the bottom, because it will reduce page load time -->
  <!-- Core plugins BEGIN (For ALL pages) -->
  <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Core plugins END (For ALL pages) -->
  <!-- BEGIN RevolutionSlider -->
  <script src="../../assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
  <!--<script src="../../assets/frontend/onepage/scripts/revo-ini.js" type="text/javascript"></script> -->
  <!-- END RevolutionSlider -->
  <!-- Core plugins BEGIN (required only for current page) -->
  <script src="../../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
  <script src="../../assets/global/plugins/jquery.easing.js"></script>
  <script src="../../assets/global/plugins/jquery.parallax.js"></script>
  <script src="../../assets/global/plugins/jquery.scrollTo.min.js"></script>
  <script src="../../assets/frontend/onepage/scripts/jquery.nav.js"></script>
  <script>
  jQuery(document).ready(function() {
      revapi = jQuery('.tp-banner').show().revolution({
        delay: 1000,
        startwidth: 1170,
        startheight: 150,
        hideThumbs: true,
        fullWidth: "on",
        fullScreen: "off",
        touchenabled:"on",                      // Enable Swipe Function : on/off
        onHoverStop:"on",                       // Stop Banner Timet at Hover on Slide on/off
        fullScreenOffsetContainer: ""
      });
    });
	</script>

  <!-- Core plugins END (required only for current page) -->
  <!-- Global js BEGIN -->
  <script src="../../js/profile.js" type="text/javascript"></script>
  <script>
  
    $(document).ready(function() {
      Layout.init();
    });
  </script>
  
  <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
    <script src="/assets/global/plugins/gmaps/gmaps.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            var UsersSearch = function () {

			return {
				//main function to initiate the module
				init: function () {
					var map;
					$(document).ready(function(){
						  map = new GMaps({
							div: '#profile_location_map',
							lat: -13.004333,
							lng: -38.494333,
						  });
						  for(var i = 0; i<1000;i++)
						  {
								var lat = -13.004333+(i/100);
							   var marker = map.addMarker({
									lat: lat,
									lng: -38.494333,
									title: 'Loop ed, Inc.',
									click: function(e) {
										alert('Szukaj tej miejscowości..');
									  },
									mouseover: function(e){
									//marker.infoWindow.open(map, marker);
									},
									infoWindow: {
										content: "<b>Loop, Inc.</b> 795 Park Ave, Suite 120<br>San Francisco, CA 94107"
									}
								});

							  
						   }
					
					
							var map2;
							
							  map2 = new GMaps({
								div: '#profile_contact_map',
								lat: -13.004333,
								lng: -38.494333,
							  });
							  var i = 1;
							  var lat = -13.004333+(i/100);
								   var marker = map2.addMarker({
										lat: lat,
										lng: -38.494333,
										title: 'Loop ed, Inc.',
										click: function(e) {
											alert('Szukaj tej miejscowości..');
										  },
										mouseover: function(e){
										//marker.infoWindow.open(map2, marker);
										},
										infoWindow: {
											content: "<b>Loop, Inc.</b> 795 Park Ave, Suite 120<br>San Francisco, CA 94107"
										}
									});
										marker.infoWindow.open(map2, marker);
						
					
					});
				}
			};
			
		}();
		UsersSearch.init();
        });
    </script>
  <!-- Global js END -->
  
  
</body>
</html>
