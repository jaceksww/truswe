<!-- BEGIN CONTENT -->
          <h1>Utwórz profil</h1>
          <div class="col-md-12 col-sm-12">
            
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                
                  <form class="form-horizontal" role="form">
                    <fieldset>
                      <legend>Dane użytkownika</legend>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">Imię <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="firstname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Nazwisko <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Login / Nazwa profilu <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="email">
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Hasło</legend>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Hasło <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="confirm-password" class="col-lg-4 control-label">Powtórz hasło <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="confirm-password">
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
                      <legend>Przepisz kod</legend>
                      	<div class="form-group">
		                    <label for="password" class="col-lg-4 control-label">Kod <span class="require">*</span></label>
		                    <div class="col-lg-8">
		                      <!-- BEGIN REPCAPTCHA -->
											<div id="recaptcha_widget" class="form-recaptcha">
												<div class="form-recaptcha-img" style="width: 325px">
													<a id="recaptcha_image" href="javascript:;">
													</a>
													<div class="recaptcha_only_if_incorrect_sol display-none" style="color:red">
														 Incorrect please try again
													</div>
												</div>
												<div class="input-group" style="width: 325px">
													<input type="text" class="form-control" id="recaptcha_response_field" name="recaptcha_response_field">
													<div class="input-group-btn">
														<a class="btn default" href="javascript:Recaptcha.reload()">
														<i class="fa fa-refresh"></i>
														</a>
														<a class="btn default recaptcha_only_if_image" href="javascript:Recaptcha.switch_type('audio')">
														<i title="Get an audio CAPTCHA" class="fa fa-headphones"></i>
														</a>
														<a class="btn default recaptcha_only_if_audio" href="javascript:Recaptcha.switch_type('image')">
														<i title="Get an image CAPTCHA" class="fa fa-picture-o"></i>
														</a>
														<a class="btn default" href="javascript:Recaptcha.showhelp()">
														<i class="fa fa-question-circle"></i>
														</a>
													</div>
												</div>
												<p class="help-block">
													<span class="recaptcha_only_if_image">
													Przepisz kod z obrazka </span>
													<span class="recaptcha_only_if_audio">
													Wpisz kod który usłyszałeś </span>
												</p>
											</div>
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
                  </form>
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
