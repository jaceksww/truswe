



	
jQuery(document).ready(function() {

	
		$('.openRegisterModal').click(function(){
			$('#loginModal').modal('hide');
		});
		$('.openLoginModal').click(function(){
			$('#registerModal').modal('hide');
		});
	
	

	$('#submitCreateAccountTransport').click(function(){
			var passwordTransport = $('#passwordTransport').val();
			var password2Transport = $('#confirm-passwordTransport').val();
			var emailTransport = $('#emailTransport').val();
			var loginTransport = $('#loginTransport').val();
			var errorTransport = '';
			if(passwordTransport == '' || password2Transport == ''){
				errorTransport += "Hasło jest obowiązkowe!<br />";
			}
			if(passwordTransport != password2Transport){
				errorTransport += "Wpisane hasła nie są identyczne!<br />";
			}
			if(!validateEmail(emailTransport) || emailTransport == ''){
				errorTransport += "Niepoprawny format adresu email!<br />";
			}
			if(loginTransport == ''){
				errorTransport += "Login jest obowiązkowy!<br />";
			}
			var responseTransport = grecaptcha.getResponse(widgetCaptchaTransport);
			if(responseTransport.length == 0)
			{
				errorTransport += "Kontrola antyspamowa niepoprawnie zweryfikowana!<br />";
			}
		if(errorTransport == ''){
			$('#formCreateAccountTransport').submit();
		}else{
			$('#createAccountErrorBoxTransport').show();
			$('#createAccountErrorTransport').html(errorTransport);
			
			 $("#registerModal").animate({ scrollTop: 0 }, "slow");
			return false;
		}
	});
	$('#loginTransport').blur(function(){
		$.ajax({
		  url: "/users/checkIfExists/login/"+$(this).val(),
		  success: function( data ) {
					  if(data.exists == true ){
					  	$('#loginTransport').val('');
					  	$('#loginTransport').focus();
					  	$('<span class="small_error login_error">Wybrany login już istnieje</span>').insertAfter('#loginTransport');
					  }else{
					  	$('.login_error').remove();
					  }
				},
		  dataType: 'json'
		});
	});
	$('#emailTransport').blur(function(){
		$.ajax({
		  url: "/users/checkIfExists/email/"+$(this).val(),
		  success: function( data ) {
					  if(data.exists == true ){
					  	$('#emailTransport').val('');
					  	$('#emailTransport').focus();
					  	$('<span class="small_error email_error">Wybrany email już istnieje</span>').insertAfter('#emailTransport');
					  }else{
					  	$('.email_error').remove();
					  }
				},
		  dataType: 'json'
		});
	});
	
	
	$('#submitCreateAccountClient').click(function(){
			var passwordClient = $('#passwordClient').val();
			var password2Client = $('#confirm-passwordClient').val();
			var emailClient = $('#emailClient').val();
			var loginClient = $('#loginClient').val();
			var firstnameClient = $('#firstnameClient').val();
			var lastnameClient = $('#lastnameClient').val();
			var errorClient = '';
			if(passwordClient == '' || password2Client == ''){
				errorClient += "Hasło jest obowiązkowe!<br />";
			}
			if(firstnameClient == '' || lastnameClient == ''){
				errorClient += "Imię i Nazwisko są obowiązkowe!<br />";
			}
			if(passwordClient != password2Client){
				errorClient += "Wpisane hasła nie są identyczne!<br />";
			}
			if(!validateEmail(emailClient) || emailClient == ''){
				errorClient += "Niepoprawny format adresu email!<br />";
			}
			if(loginClient == ''){
				errorClient += "Login jest obowiązkowy!<br />";
			}
			var responseClient = grecaptcha.getResponse(widgetCaptchaClient);
			if(responseClient.length == 0)
			{
				errorClient += "Kontrola antyspamowa niepoprawnie zweryfikowana!<br />";
			}
		if(errorClient == ''){
			$('#formCreateAccountClient').submit();
		}else{
			$('#createAccountErrorBoxClient').show();
			$('#createAccountErrorClient').html(errorClient);
			
			 $("#registerModal").animate({ scrollTop: 0 }, "slow");
			return false;
		}
	});
	
	$('#loginClient').blur(function(){
		$.ajax({
		  url: "/users/checkIfExists/login/"+$(this).val(),
		  success: function( data ) {
					  if(data.exists == true ){
					  	$('#loginClient').val('');
					  	$('#loginClient').focus();
					  	$('<span class="small_error login_error">Wybrany login już istnieje</span>').insertAfter('#loginClient');
					  }else{
					  	$('.login_error').remove();
					  }
				},
		  dataType: 'json'
		});
	});
	$('#emailClient').blur(function(){
		$.ajax({
		  url: "/users/checkIfExists/email/"+$(this).val(),
		  success: function( data ) {
					  if(data.exists == true ){
					  	$('#emailClient').val('');
					  	$('#emailClient').focus();
					  	$('<span class="small_error email_error">Wybrany email już istnieje</span>').insertAfter('#emailClient');
					  }else{
					  	$('.email_error').remove();
					  }
				},
		  dataType: 'json'
		});
	});
	

});
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}



    
var RevosliderInit = function () {

    return {
        initRevoSlider: function () {
                  jQuery('.fullwidthabnner').show().revolution({ 
                      delay:1500,
                      startheight:417,
                      startwidth:1150,

                      hideThumbs:10,

                      thumbWidth:100,                         // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                      thumbHeight:50,
                      thumbAmount:5,

                      navigationType:"bullet",                // bullet, thumb, none
                      navigationArrows:"solo",                // nexttobullets, solo (old name verticalcentered), none

                      navigationStyle:"round",                // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom

                      navigationHAlign:"center",              // Vertical Align top,center,bottom
                      navigationVAlign:"bottom",              // Horizontal Align left,center,right
                      navigationHOffset:0,
                      navigationVOffset:20,

                      soloArrowLeftHalign:"left",
                      soloArrowLeftValign:"center",
                      soloArrowLeftHOffset:20,
                      soloArrowLeftVOffset:0,

                      soloArrowRightHalign:"right",
                      soloArrowRightValign:"center",
                      soloArrowRightHOffset:20,
                      soloArrowRightVOffset:0,

                      touchenabled:"on",                      // Enable Swipe Function : on/off
                      onHoverStop:"on",                       // Stop Banner Timet at Hover on Slide on/off

                      stopAtSlide:-1,
                      stopAfterLoops:-1,

                      hideCaptionAtLimit:0,         // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                      hideAllCaptionAtLilmit:0,       // Hide all The Captions if Width of Browser is less then this value
                      hideSliderAtLimit:0,          // Hide the whole slider, and stop also functions if Width of Browser is less than this value

                      shadow:1,                               //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
                      fullWidth:"on"                          // Turns On or Off the Fullwidth Image Centering in FullWidth Modus
                  });
        }
    };

}();


	
