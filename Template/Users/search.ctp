<style>
.gray .portlet-title{background:#ddd !important; color:#666 !important;}
.gray .portlet-title *{color:#666 !important;}
.portlet.box.gray{  border: 1px solid #ddd !important;}
.search-results{border-right:5px solid #ff6b3c;background: #ffe5dd; height:100%;}
.lightgray{background:#f0f0f0 !important; border-left: 5px solid #c1c1c1 !important;}
.separator-orange{border-bottom:1px solid #ddd; clear:both; min-height:10px;margin-top:15px;}
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
							
							  <h3>Szukaj według miasta:</h3>
								  
								  <div class="form-group">
									<form class="form-horizontal form-without-legend" role="form">
										<div class="col-lg-8">
										  <input type="text" class="form-control" id="firstname">
										</div>
										
										<div class="col-lg-4">
										 <button class="btn btn-primary" type="button">Szukaj</button>
										</div>
									</form>
								</div>
							 
								<div class="separator-orange"><br /><br /></div>
							
							 
							  <h3>Szukaj an mapie:</h3>
								<div class="form-group">
									<div class="col-lg-12">
										<div id="map" class="gmaps margin-bottom-40" style="height:220px;"></div>
									</div>
								</div>
						
							<div class="separator-orange"></div>
							
							  <h3>Trasa:</h3>
								  <form class="form-horizontal form-without-legend" role="form">
									 <div class="form-group">
										<div class="col-lg-12">
										  <input type="text" class="form-control" id="firstname" placeholder="Z">
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-lg-12">
										  <input type="text" class="form-control" id="firstname"  placeholder="DO">
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-12">
											 <button class="btn btn-primary" type="button">Szukaj</button>
										</div>
									</div>
								  </form>
								  
								  <p class="clearfix"></p>
								  
						</div>
					</div>
                </div>
                <div class="col-md-8 col-sm-9">
                    
                      <!-- START TAB 1 -->
                      
                         
                            
							
							<?php
							foreach ($profiles as $user) {
										
										echo '
										<div class="row">
											<div class="note note-default lightgray">
												<div class="col-lg-3">
													<img class="img-responsive" src="../../assets/admin/pages/media/blog/3.jpg" alt="">
												</div>
												<div class="col-lg-9">
													<h4 class="block">'. $user['login'].'</h4>
													<p>
														 Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
													</p>
													<a href="javascript:;" class="btn btn-default pull-right">
													Zobacz profil <i class="m-icon-swapright m-icon-white"></i>
													</a>
												</div>
												<p class="clearfix"></p>
											</div>
										</div>';
									}
							?>
                              
                         
						 
						 
								<ul class="pagination pagination-lg">
									<li>
										<a href="javascript:;">
										<i class="fa fa-angle-left"></i>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										1 </a>
									</li>
									<li>
										<a href="javascript:;">
										2 </a>
									</li>
									<li>
										<a href="javascript:;">
										3 </a>
									</li>
									<li>
										<a href="javascript:;">
										4 </a>
									</li>
									<li>
										<a href="javascript:;">
										5 </a>
									</li>
									<li>
										<a href="javascript:;">
										6 </a>
									</li>
									<li>
										<a href="javascript:;">
										<i class="fa fa-angle-right"></i>
										</a>
									</li>
								</ul>
							
							
					<!-- END TAB 1 -->
               
              </div>
            </div>
          </div>
          <!-- END CONTENT -->