
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
            
              <div class="row">
                <div class="col-md-12 col-sm-12">
					<div id="createAccountErrorBoxTransport" class="alert alert-danger fade in" style="display:none">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
					<span id="createAccountErrorTransport"></span>
					</div>

				  <?php echo $this->Form->create('Users/create_account', ['id'=>'formCreateAccountTransport','class'=>'form-horizontal', 'method' => 'post']);?>
				  <?php echo $this->Form->input('type',['value'=>1,'type'=>'hidden','id'=>'typeTransport','class'=>'form-control', 'label'=>false]);?>
                    <fieldset>
                      <legend>Dane użytkownika</legend>
                      <!--
					  <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">Imię <span class="require">*</span></label>
                        <div class="col-lg-8">
						  <?php echo $this->Form->input('firstname',['id'=>'firstnameTransport','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Nazwisko <span class="require">*</span></label>
                        <div class="col-lg-8">
						  <?php echo $this->Form->input('lastname',['id'=>'lastnameTransport','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
					  -->
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Login / Nazwa profilu <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <?php echo $this->Form->input('login',['id'=>'loginTransport','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <?php echo $this->Form->input('email',['id'=>'emailTransport','class'=>'form-control', 'label'=>false]);?>
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
							<input name="transportType[]" value="<?php echo $cat['id'];?>" type="checkbox" id="checkboxCreateAccountTransport<?php echo $cat['id'];?>" class="md-check" <?php echo ($i==0) ? 'checked' : ''; ?> >
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
                          
						  <?php echo $this->Form->input('password',['type'=>'password','id'=>'passwordTransport','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="confirm-password"  class="col-lg-4 control-label">Powtórz hasło <span class="require">*</span></label>
                        <div class="col-lg-8">
                          
						  <?php echo $this->Form->input('password2',['type'=>'password','id'=>'confirm-passwordTransport','class'=>'form-control', 'label'=>false]);?>
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
								<div id="createAccountRecaptchaTransport">
								</div>
								<!-- END REPCAPTCHA -->
		                    </div>
		                  </div>
		                
						</fieldset>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" id="submitCreateAccountTransport" class="btn btn-primary">Utwórz konto</button>
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
	<div class="tab-pane" id="portlet_tab_2">
		<div id="createAccountErrorBoxClient" class="alert alert-danger fade in" style="display:none">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
					<span id="createAccountErrorClient"></span>
		</div>
		<?php echo $this->Form->create('Users/create_account', ['id'=>'formCreateAccountClient','class'=>'form-horizontal', 'method' => 'post']);?>
		<?php echo $this->Form->input('type',['value'=>2,'type'=>'hidden','id'=>'typeClient','class'=>'form-control', 'label'=>false]);?>
                    <fieldset>
                      <legend>Dane użytkownika</legend>
                      
					  <div class="form-group">
                        <label for="firstnameClient" class="col-lg-4 control-label">Imię <span class="require">*</span></label>
                        <div class="col-lg-8">
						  <?php echo $this->Form->input('firstname',['id'=>'firstnameClient','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastnameClient" class="col-lg-4 control-label">Nazwisko <span class="require">*</span></label>
                        <div class="col-lg-8">
						  <?php echo $this->Form->input('lastname',['id'=>'lastnameClient','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label for="loginClient" class="col-lg-4 control-label">Login / Nazwa profilu <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <?php echo $this->Form->input('login',['id'=>'loginClient','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="emailClient" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <?php echo $this->Form->input('email',['id'=>'emailClient','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
                    </fieldset>
					
					
                    <fieldset>
                      <legend>Hasło</legend>
                      <div class="form-group">
                        <label for="passwordClient" class="col-lg-4 control-label">Hasło <span class="require">*</span></label>
                        <div class="col-lg-8">
                          
						  <?php echo $this->Form->input('password',['type'=>'password','id'=>'passwordClient','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="confirm-passwordClient"  class="col-lg-4 control-label">Powtórz hasło <span class="require">*</span></label>
                        <div class="col-lg-8">
                          
						  <?php echo $this->Form->input('password2',['type'=>'password','id'=>'confirm-passwordClient','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
                    </fieldset>
                    
                    <div class="row">
                    <div class="col-md-12">
                    <fieldset>
                      <legend>Kontrola antyspamowa</legend>
                      	<div class="form-group">
		                    <label for="" class="col-lg-4 control-label"> </label>
		                    <div class="col-lg-8">
								<!-- BEGIN REPCAPTCHA -->
								<div id="createAccountRecaptchaClient">
								
								</div>
								<!-- END REPCAPTCHA -->
		                    </div>
		                  </div>
		                
						</fieldset>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" id="submitCreateAccountClient" class="btn btn-primary">Utwórz konto</button>
                        <a href="/" type="button" class="btn btn-default">Anuluj</a>
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
</div>
</div>
          
          <!-- END CONTENT -->

