<!-- BEGIN CONTENT -->
          <h1>Zaloguj się</h1>
          <div class="col-md-12 col-sm-12">
            
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                
                  <?php echo $this->Form->create('Users/login', ['id'=>'formCreateAccountTransport','class'=>'form-horizontal', 'method' => 'post']);?>
                    <fieldset>
                      
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Login / Nazwa profilu <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <?php echo $this->Form->input('login',['id'=>'loginLogin','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Hasło <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <?php echo $this->Form->input('password',['type'=>'password','id'=>'passwordLogin','class'=>'form-control', 'label'=>false]);?>
                        </div>
                      </div>
                     
                    </fieldset>
                  </div>
                  <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0">
                        <a href="page-forgotton-password.html">Zapomniałeś hasło?</a>
                      </div>
                   </div>
                  <div class="row">
                  
                    <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
                        <hr>
                        <div class="login-socio">
                            <p class="text-muted">Lub zaloguj się używając:
                            <a href="javascript:;" data-original-title="facebook" style="font-size:25px;position:relative;left:5px; top:3px;color:#3a5795" class="fa fa-facebook-square" title="facebook"></a>
                            <!--
                            <a href="javascript:;" data-original-title="Twitter" class="twitter" title="Twitter"></a>
                            <a href="javascript:;" data-original-title="Google Plus" class="googleplus" title="Google Plus"></a>
                            ><a href="javascript:;" data-original-title="Linkedin" class="linkedin" title="LinkedIn"></a>
                            -->
                           	</p>
                        </div>
                      </div>
                  </div>  
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" class="btn btn-primary">Zaloguj się</button>
                        <button type="button" class="btn btn-default">Anuluj</button>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">    
                      	<p>Nie masz konta w serwisie Trustran?</p>      
                        <a class="btn btn-default openRegisterModal" href="#registerModal" data-toggle="modal">Utwórz konto</a>
                        
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
<!-- END CONTENT -->
       
