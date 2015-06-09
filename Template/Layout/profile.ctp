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
            
            <li><a href="#benefits">Opinie klientów</a></li>
            <li><a href="#contact">Kontakt</a></li>
          </ul>
        </div>
        <!-- Navigation END -->
      </div>
    </div>
  </div>
  <!-- Header END -->
  
  <!-- About block BEGIN -->
  <div class="about-block content content-left" id="about">
    <div class="container">
     
      <div class="row">
		<div class="col-md-4 content-center">
		
		<div class="caption">
                  <span class="big"><i class="fa fa-camera"></i> Galeria</span>
                </div>
		<img src="../../img/o-mnie/o-mnie-1.jpg" alt="walmart" ><br />
		<img src="../../img/o-mnie/o-mnie-1.jpg" alt="walmart"  class="profile-gal-thumb">
		<img src="../../img/o-mnie/o-mnie-1.jpg" alt="walmart"  class="profile-gal-thumb">
		<img src="../../img/o-mnie/o-mnie-1.jpg" alt="walmart"   class="profile-gal-thumb">
		<img src="../../img/o-mnie/o-mnie-1.jpg" alt="walmart"  class="profile-gal-thumb">
		
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
		<div class="col-md-8 ">
		<div class="pricing-content">
		 <h2 class="pull-left padding-left-40"><strong>Zakres</strong> usług</h2>
              <div class="clearfix"></div>
			  <br />
              <ul class="list-unstyled">
                <li><i class="fa fa-circle"></i> Miejscowość: Konin</li>
                <li><i class="fa fa-circle"></i> Zakres usług:
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
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Services block END -->
  <!-- Message block BEGIN -->
  <div class="message-block content content-center valign-center" id="message-block">
    <div class="valign-center-elem">
      <h2>The details are not the details <strong>They make the design</strong></h2>
      <em>KEEN THEMES</em>
    </div>
  </div>
  <!-- Message block END -->
  
  <!-- Choose us block BEGIN -->
  <div class="choose-us-block content text-center margin-bottom-40" id="benefits">
    <div class="container">
      <h2>Why to <strong>choose us</strong></h2>
      <h4>Lorem ipsum dolor sit amet, <a href="javascript:void(0);">consectetuer adipiscing</a> elit, sed diam nonummy<br> nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</h4>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 text-left">
          <img src="../../assets/frontend/onepage/img/choose-us.png" alt="Why to choose us" class="img-responsive">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 text-left">
          <div class="panel-group" id="accordion1">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">Lorem ipsum dolor sit amet</a>
                </h5>
              </div>
              <div id="accordion1_1" class="panel-collapse collapse in">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Consectetur adipisicing elit</a>
                </h5>
              </div>
              <div id="accordion1_2" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Augue assum anteposuerit dolore</a>
                </h5>
              </div>
              <div id="accordion1_3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Sollemnes in futurum</a>
                </h5>
              </div>
              <div id="accordion1_4" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Nostrud Tempor veniam</a>
                </h5>
              </div>
              <div id="accordion1_5" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Ut enem magana sed dolore</a>
                </h5>
              </div>
              <div id="accordion1_6" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Choose us block END -->
  <!-- Checkout block BEGIN -->
  <div class="checkout-block content">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h2>CHECK OUT ADMIN THEME! <em>Most Full Featured &amp; Powerfull Admin Theme</em></h2>
        </div>
        <div class="col-md-2 text-right">
          <a href="http://www.keenthemes.com/preview/index.php?theme=Trustran_admin&amp;page=index.html" target="_blank" class="btn btn-primary">Live preview</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Checkout block END -->
  <!-- Facts block BEGIN -->
  <div class="facts-block content content-center" id="facts-block">
    <h2>Some facts about us</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="item">
            <strong>39</strong>
            Projects Completed
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="item">
            <strong>14</strong>
            Team Members
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="item">
            <strong>29k+</strong>
            Products Sold
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="item">
            <strong>500</strong>
            Weekly Sales
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Facts block END -->
  
  <!-- Testimonials block BEGIN -->
  <div class="testimonials-block content content-center margin-bottom-65">
    <div class="container">
      <h2>Customer <strong>testimonials</strong></h2>
      <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
      <div class="carousel slide" data-ride="carousel" id="testimonials-block">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <!-- Carousel items -->
          <div class="active item">
            <blockquote>
              <p>This is the most awesome, full featured, easy, costomizeble theme. It�s extremely responsive and very helpful to all suggestions.</p>
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
  <!-- Testimonials block END -->
  <!-- Partners block BEGIN -->
  <div class="partners-block">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="../../assets/frontend/onepage/img/partners/cisco.png" alt="cisco">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="../../assets/frontend/onepage/img/partners/walmart.png" alt="walmart">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="../../assets/frontend/onepage/img/partners/gamescast.png" alt="gamescast">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="../../assets/frontend/onepage/img/partners/spinwokrx.png" alt="spinwokrx">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="../../assets/frontend/onepage/img/partners/ngreen.png" alt="ngreen">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="../../assets/frontend/onepage/img/partners/vimeo.png" alt="vimeo">
        </div>
      </div>
    </div>
  </div>
  <!-- Partners block END -->
  <!-- BEGIN PRE-FOOTER -->
  <div class="pre-footer" id="contact">
    <div class="container">
      <div class="row">
        <!-- BEGIN BOTTOM ABOUT BLOCK -->
        <div class="col-md-4 col-sm-6 pre-footer-col">
          <h2>About us</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
          <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
        </div>
        <!-- END BOTTOM ABOUT BLOCK -->
        <!-- BEGIN TWITTER BLOCK --> 
        <div class="col-md-4 col-sm-6 pre-footer-col">
          <h2 class="margin-bottom-0">Latest Tweets</h2>
          <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>      
        </div>
        <!-- END TWITTER BLOCK -->
        <div class="col-md-4 col-sm-6 pre-footer-col">
          <!-- BEGIN BOTTOM CONTACTS -->
          <h2>Our Contacts</h2>
          <address class="margin-bottom-20">
            35, Lorem Lis Street, Park Ave<br>
            California, US<br>
            Phone: 300 323 3456<br>
            Fax: 300 323 1456<br>
            Email: <a href="mailto:info@Trustran.com">info@Trustran.com</a><br>
            Skype: <a href="skype:Trustran">Trustran</a>
          </address>
          <!-- END BOTTOM CONTACTS -->
          <div class="pre-footer-subscribe-box">
            <h2>Newsletter</h2>
            <form action="javascript:void(0);">
              <div class="input-group">
                <input type="text" placeholder="youremail@mail.com" class="form-control">
                <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END PRE-FOOTER -->
  <!-- BEGIN FOOTER -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <!-- BEGIN COPYRIGHT -->
        <div class="col-md-6 col-sm-6">
          <div class="copyright">2014 � Trustran One Page. ALL Rights Reserved.</div>
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN SOCIAL ICONS -->
        <div class="col-md-6 col-sm-6 pull-right">
          <ul class="social-icons">
            <li><a class="rss" data-original-title="rss" href="javascript:void(0);"></a></li>
            <li><a class="facebook" data-original-title="facebook" href="javascript:void(0);"></a></li>
            <li><a class="twitter" data-original-title="twitter" href="javascript:void(0);"></a></li>
            <li><a class="googleplus" data-original-title="googleplus" href="javascript:void(0);"></a></li>
            <li><a class="linkedin" data-original-title="linkedin" href="javascript:void(0);"></a></li>
            <li><a class="youtube" data-original-title="youtube" href="javascript:void(0);"></a></li>
            <li><a class="vimeo" data-original-title="vimeo" href="javascript:void(0);"></a></li>
            <li><a class="skype" data-original-title="skype" href="javascript:void(0);"></a></li>
          </ul>
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

						   //marker.infoWindow.open(map, marker);
					   }
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