
<style>
.gray .portlet-title{background:#ddd !important; color:#666 !important;}
.gray .portlet-title *{color:#666 !important;}
.portlet.box.gray{  border: 1px solid #ddd !important;}
.search-results{border-right:5px solid #ff6b3c;background: #ffe5dd; height:100%;}
.lightgray{background:#f0f0f0 !important; border-left: 5px solid #c1c1c1 !important;}
.separator-orange{border-bottom:1px solid #ddd; clear:both; min-height:10px;margin-top:15px;}
.search-res-box{cursor:pointer}
</style>
<!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            
            <div class="content-page">
              <div class="row">
                <div class="col-md-4 col-sm4 ">
					
						 <div class="portlet box red gray">
						 <div class="portlet-title">
							<div class="caption">
								<i class="fa fa-search"></i>Szukaj
							</div>
						 </div>
						 
						 <div class="portlet-body">
						 
						 <?php if($catParams[0]->id == 1 || $catParams[0]->id == 2 || $catParams[0]->id == 3 || $catParams[0]->id == 4 || $catParams[0]->id == 5) :?>
						
							
							  <h3>Szukaj według nazwy:</h3>
								  
								  <div class="form-group">
									<form class="form-horizontal form-without-legend" role="form">
										<div class="col-lg-8">
										  <input type="text" class="form-control" id="search_name">
										</div>
										
										<div class="col-lg-4">
										 <button class="btn btn-primary" type="button">Szukaj</button>
										</div>
									</form>
								</div>
							 
								
							<?php endif;?>
						
						 
						 <?php if($catParams[0]->id == 1 || $catParams[0]->id == 2 || $catParams[0]->id == 3 || $catParams[0]->id == 4 || $catParams[0]->id == 5) :?>
						
							<div class="separator-orange"><br /><br /></div>
							  <h3>Szukaj według miasta:</h3>
								  
								  <div class="form-group">
									<form class="form-horizontal form-without-legend" role="form">
										<div class="col-lg-8">
										  <input type="text" class="form-control" id="search_city">
										</div>
										
										<div class="col-lg-4">
										 <button class="btn btn-primary" type="button">Szukaj</button>
										</div>
									</form>
								</div>
							 
								
							<?php endif;?>
							 
							 <?php if($catParams[0]->id == 1 || $catParams[0]->id == 2 || $catParams[0]->id == 3  ||  $catParams[0]->id == 4 || $catParams[0]->id == 5):?>
							 <div class="separator-orange"><br /><br /></div>
							 
							  <h3>Szukaj an mapie:</h3>
								<div class="form-group">
									<div class="col-lg-12">
										<div id="search_map" class="gmaps margin-bottom-40" style="height:220px;"></div>
									</div>
								</div>
							<?php endif;?>
							
							<?php if($catParams[0]->id == 1 || $catParams[0]->id == 2 || $catParams[0]->id == 3  || $catParams[0]->id == 5):?>
							<div class="separator-orange"></div>
							
							  <h3>Trasa:</h3>
								  <form class="form-horizontal form-without-legend" role="form">
									 <div class="form-group">
										<div class="col-lg-12">
										  <input type="text" class="form-control" id="route_from" placeholder="Z">
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-lg-12">
										  <input type="text" class="form-control" id="route_to"  placeholder="DO">
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-12">
											 <button class="btn btn-primary" type="button">Szukaj</button>
										</div>
									</div>
								  </form>
								  <?php endif;?>
								 
								  <p class="clearfix"></p>
								  
						</div>
						
					</div>
                </div>
                <div class="col-md-8 col-sm-9">
                    
                      <!-- START TAB 1 -->
                      
                         <h1><?php  echo mb_convert_encoding($catParams[0]->name, 'utf8') ?></h1>
                            
							
							<?php
							
							foreach ($profiles as $user) {
										//print_r($user);
										echo '
										<div class="row" onclick="location.href=\'/'. $user['uri'].'\'">
										
											<div class="note note-default lightgray search-res-box" onclick="location.href = \'#\'">
												<div class="col-lg-3">
												';
												
												if($user['mainImage'] != '' && file_exists($staticurl."profiles/".$user['id']."/".$user['mainImage'])){
													echo '<img class="img-responsive"  src="'.$staticurl.'profiles/'.$user['id'].'/'.$user['mainImage'].'" alt="">';
												}
												else{
													echo '<img class="img-responsive" src="'.$staticurl.'profiles/avatar-default.jpg" alt="">';
												} 
								
												echo '
												</div>
												<div class="col-lg-9">
													<h4 class="block">'. $user['login'].'</h4>
													<p>
														 <span class="testimonials-name">Miejscowość: </span>'. $user['city'].'TO DO<br />
														 <span class="orange">Transport: </span>';
														 $cities_str = '';
														 foreach($user['cities'] as $city){
															   $cities_str .= $city['city'].', ';
														 }
														 echo trim( $cities_str, ', ');
														
											echo '</p>
													<a href="/'. $user['uri'].'" class="btn btn-default pull-right">
													Zobacz profil <i class="m-icon-swapright m-icon-white"></i>
													</a>
												</div>
												<p class="clearfix"></p>
											</div>
										</a>
										</div>';
									}
							?>
                              
                         
						 <ul class="pagination pagination-lg">
						 <?php
						 echo '<li>
										<a href="javascript:;">
										<i class="fa fa-angle-left"></i>
										</a>
									</li>';
						
						 for($i=0; $i < $total_pages; $i++)
						 {
							 $active = '';
							 if($current_page == $i) $active = 'active';
							 $next = $i+1;
							  echo '<li class="'.$active.'">
										<a href="/pl/search/'.$catParams[0]->id.'/'.$i.'">
										'.$next.'
										</a>
									</li>';
						 }
						 echo '<li>
										<a href="javascript:;">
										<i class="fa fa-angle-right"></i>
										</a>
									</li>';
									
						 ?>
								
						</ul>
							
							
					<!-- END TAB 1 -->
               
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
