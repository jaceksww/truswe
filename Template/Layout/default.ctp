<!DOCTYPE html>
<!-- 
Template Name: TrusTrans - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/TrusTrans-responsive-admin-dashboard-template/4021469?ref=keenthemes
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
  <title>TrusTrans</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="TrusTrans Shop UI description" name="description">
  <meta content="TrusTrans Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

<!--  <link rel="shortcut icon" href="/favicon.ico">-->

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   

  <!-- Theme styles START -->
  <link href="/assets/global/css/components.css" rel="stylesheet">
  <link href="/assets/frontend/layout/css/style.css" rel="stylesheet">
  <link href="/assets/frontend/pages/css/style-revolution-slider.css" rel="stylesheet"><!-- TrusTrans revo slider styles -->
  <link href="/assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="/assets/frontend/layout/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="/css/theme_trustran.css" rel="stylesheet" id="theme-style-color">
  <link href="/assets/frontend/layout/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
  
 <script src="//www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
 <script>
 var widgetCaptchaClient;
    var widgetCaptchaTransport;
	var CaptchaCallback = function(){
	 	
		    widgetCaptchaClient = grecaptcha.render('createAccountRecaptchaClient', {
		      'sitekey' : '6LcVSAkTAAAAADwfYKPNAqYpAlWFcoX9htabCIYZ',
		      'theme' : 'light'
		    });
		    widgetCaptchaTransport = grecaptcha.render('createAccountRecaptchaTransport', {
		      'sitekey' : '6LfiNgkTAAAAADLWbjrNshBvXvdP4OvCbEaz0iGP',
		      'theme' : 'light'
		    });
	};
	</script>
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <!--
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    -->
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+44 333 333 333</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@trustrans.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
					<?php if($this->Session->check('User')):?>
						<li><a class="openLoginModal" href="/users/logout" data-toggle="modal">Wyloguj się</a></li>
                        <li><a class="openRegisterModal" href="/<?php echo $this->Session->read('User.login')?>" data-toggle="modal"><?php echo 'www.'.$_SERVER['SERVER_NAME'].'/'.$this->Session->read('User.login')?></a></li>
					<?php else: ?>
                        <li><a class="openLoginModal" href="#loginModal" data-toggle="modal">Zaloguj się</a></li>
                        <li><a class="openRegisterModal" href="#registerModal" data-toggle="modal">Utwórz profil</a></li>
					<?php endif; ?>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header reduce-header">
      <div class="container">
      	<div class="row">
		    <div class="col-md-3">
		    <a class="site-logo" href="/"><img src="/img/logo.png" alt="TrusTrans FrontEnd"></a>
		    </div>
		    <div class="col-md-4">
	<h3 class="header-tagline">Kierowcy którym możesz zaufać</h3>
		    </div>
		    <div class="col-md-5">
		    <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
			<?php echo $this->element('navigation');?>
			</div>
		</div>
      </div>
    </div>
	<div class="container">
	<?php echo $this->Flash->render() ?>
	</div>
    <!-- Header END -->
	<?php if ($_SERVER['REQUEST_URI'] == '' ||$_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/pl' || strstr($_SERVER['REQUEST_URI'], 'home2')): ?>
	<?php echo $this->element('slider');?>
	<?php endif; ?>
    

    <div class="main">
      <div class="container">
	  
      <?php echo $this->fetch('content') ?>
        
      </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    
	<?php echo $this->element('footer');?>
     <!-- END FOOTER -->
	
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="false" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			Zaloguj się
      </div>
      <div class="modal-body">
          <?php echo $this->requestAction('/users/login');?>
      </div>
      <div class="modal-footer">
          	
      </div>
  </div>
  </div>
</div>

<div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="false" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			Utwórz profil
      </div>
      <div class="modal-body">
          <?php echo $this->requestAction('/users/create_account');?>
      </div>
      <div class="modal-footer">
          	
      </div>
  </div>
  </div>
</div>



 
    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="/assets/global/plugins/respond.min.js"></script>
    <![endif]--> 
	<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="/assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

	
	
    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <!-- BEGIN RevolutionSlider -->  
    <script src="/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
    <script src="/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
    
    <!-- END RevolutionSlider -->


    <script src="/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
        	Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
    
<?php if (strstr($_SERVER['REQUEST_URI'], 'contact')):?>  
    <!--if contact -->
    <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
    <script src="/assets/global/plugins/gmaps/gmaps.js" type="text/javascript"></script>
    <script src="/assets/frontend/pages/scripts/contact-us.js" type="text/javascript"></script>
     <script type="text/javascript">
        jQuery(document).ready(function() {
            ContactUs.init();
        });
    </script>
<?php endif; ?>





<?php if (strstr($_SERVER['REQUEST_URI'], 'search')): ?>
		<?php if(!$this->Session->check('User')):?>
		<script type="text/javascript">
        jQuery(document).ready(function() {
        	$('#loginModal').modal('show');
        });
		</script>
		<?php endif; ?>
		<!-- https://developers.google.com/maps/documentation/javascript/places-autocomplete -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places"></script>
		<script src="/assets/global/plugins/gmaps/gmaps.js" type="text/javascript"></script>
		<script type="text/javascript">
			  jQuery(document).ready(function() {
				
				var defaultBounds = new google.maps.LatLngBounds(
				  new google.maps.LatLng(-33.8902, 151.1759),
				  new google.maps.LatLng(-33.8474, 151.2631));

				var input = document.getElementById('search_city');
				var options = {
				  bounds: defaultBounds,
				  types: ['geocode'],
				   //componentRestrictions: {country: 'pl'}
				};
				autocomplete = new google.maps.places.Autocomplete(input, options);
				
				var input_route_from = document.getElementById('route_from');
				autocomplete = new google.maps.places.Autocomplete(input_route_from, options);
				
				var input_route_to = document.getElementById('route_to');
				autocomplete = new google.maps.places.Autocomplete(input_route_to, options);
				
				//markers
				var UsersSearch = function () {

				return {
					//main function to initiate the module
					init: function () {
						var map;
						$(document).ready(function(){
						  map = new GMaps({
							div: '#search_map',
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

							   //marker.infoWindow.open(map, marker);
						   }
					});
				}
			};

		}();
		UsersSearch.init();
			})

		</script>
<?php endif; ?>    

<script src="/js/trustran.js?v=001" type="text/javascript"></script>
	

</body>
<!-- END BODY -->
</html>
