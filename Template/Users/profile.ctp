
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
		
			<div class="row" >
			<?php echo $this->requestAction(['controller'=>'users', 'action'=>'profile_gallery', 'pass'=>array('params'=>$userParams)]);?>
			  
			  
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
	  <?php echo $this->requestAction(['controller'=>'users', 'action'=>'profile_description', 'pass'=>array('params'=>$userParams)]);?>
        
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
                 <?php echo $this->requestAction(['controller'=>'users', 'action'=>'profile_contact', 'pass'=>array('params'=>$userParams)]);?>
				
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