
<!-- BEGIN CONTENT -->
          
          
            <div class="portlet box red" style="border:none;">
										
										<div class="portlet-body">
										
							<div class="tabbable tabbable-tabdrop">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#portlet_tab_1" data-toggle="tab">Utwórz profil kierowcy</a>
									</li>
									<li>
										<a href="#portlet_tab_2" data-toggle="tab">Utwórz profil klienta</a>
									</li>
									
								</ul>
								
							</div>
							
											<div class="tab-content">
												<div class="tab-pane active" id="portlet_tab_1">
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                
				  <?php echo $this->Form->create('Users/create_account', ['class'=>'form-horizontal', 'method' => 'post']);?>
                    <fieldset>
                      <legend>Dane użytkownika</legend>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">Imię <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" name="firstname" class="form-control" id="firstname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Nazwisko <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" name="lastname" class="form-control" id="lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Login / Nazwa profilu <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" name="login" class="form-control" id="login">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" name="email" class="form-control" id="email">
                        </div>
                      </div>
                    </fieldset>
					<fieldset>
                      <legend>Rodzaje transportu</legend>
					  
					  <?php 
					  $i = 0;
					  foreach ($cats as $cat):
					  if($i == 0 || $i==2 || $i == 4) echo '<div class="form-group">';
					  ?>
						  
                        
                        <div class="col-lg-6">
                          <div class="md-checkbox">
							<input type="checkbox" id="checkboxCreateAccountTransport<?php echo $cat['id'];?>" class="md-check" <?php echo ($i==0) ? 'checked' : ''; ?> >
							<label name="transport" for="checkboxCreateAccountTransport<?php echo $cat['id'];?>">
								<span></span>
								<span class="check"></span>
								<span class="box"></span>
								<?php echo $cat['name'];?> 
							</label>
							</div>
										
                        </div>
                      
					  <?php 
					  if($i == 1 || $i==3 || $i == 5) echo '</div>';
					  $i++;
					  endforeach; 
					  ?>
					  
					  
                    </fieldset>
					
                    <fieldset>
                      <legend>Hasło</legend>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Hasło <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" name="password" class="form-control" id="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="confirm-password"  class="col-lg-4 control-label">Powtórz hasło <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text"  name="password2" class="form-control" id="confirm-password">
                        </div>
                      </div>
                    </fieldset>
                    <!--<fieldset>
                      <legend>Newsletter</legend>
                      <div class="checkbox form-group">
                        <label>
                          <div class="col-lg-4 col-sm-4">Singup for Newsletter</div>
                          <div class="col-lg-8 col-sm-8">
                            <input type="checkbox">
                          </div>
                        </label>
                      </div>
                    </fieldset>
                    -->
                    <div class="row">
                    <div class="col-md-12">
                    <fieldset>
                      <legend>Kontrola antyspamowa</legend>
                      	<div class="form-group">
		                    <label for="password" class="col-lg-4 control-label"> </label>
		                    <div class="col-lg-8">
								<!-- BEGIN REPCAPTCHA -->
								<div class="g-recaptcha" data-sitekey="6LfiNgkTAAAAADLWbjrNshBvXvdP4OvCbEaz0iGP"></div>
								<!-- END REPCAPTCHA -->
		                    </div>
		                  </div>
		                
						</fieldset>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" class="btn btn-primary">Utwórz konto</button>
                        <button type="button" class="btn btn-default">Anuluj</button>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">    
                      	<p>Masz już konto w serwisie Trustran?</p>      
                        <a class="btn btn-default openLoginModal" href="#loginModal" data-toggle="modal">Zaloguj się</a>
                        
                      </div>
                    </div>
                    
                  <?php echo $this->Form->end()?>
                </div>
                <!--
                <div class="col-md-4 col-sm-4 pull-right">
                  <div class="form-info">
                    <h2><em>Important</em> Information</h2>
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo quat.</p>

                    <p>Duis autem vel eum iriure at dolor vulputate velit esse vel molestie at dolore.</p>

                    <button type="button" class="btn btn-default">More details</button>
                  </div>
                </div>
                -->
              </div>
            </div>
										</div>
										<div class="tab-pane active" id="portlet_tab_2">
										Profil klienta
										</div>
									</div>
								</div>
          
          <!-- END CONTENT -->
          
 <!-- BEGIN GOOGLE RECAPTCHA -->
<script type="text/javascript">
        var RecaptchaOptions = {
           theme : 'custom',
           custom_theme_widget: 'recaptcha_widget'
        };
    </script>
<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>
<!-- END GOOGLE RECAPTCHA -->
