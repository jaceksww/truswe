
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
		
			<?php echo $this->requestAction(['controller'=>'users', 'action'=>'profile_about', 'pass'=>array('params'=>$userParams)]);?>
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