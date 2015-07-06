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


jQuery(document).ready(function() {
		$('.openRegisterModal').click(function(){
			$('#loginModal').modal('hide');
		});
		$('.openLoginModal').click(function(){
			$('#registerModal').modal('hide');
		});
		
	$('#submitCreateAccountTransport').click(function(){
		
			var password = $('#password').val();
			var password2 = $('#confirm-password').val();
			var email = $('#email').val();
			var login = $('#login').val();
			var error = '';
			if(password == '' || password2 == ''){
				error += "Hasło jest obowiązkowe!<br />";
			}
			if(password != password2){
				error += "Wpisane hasła nie są identyczne!<br />";
			}
			if(!validateEmail(email) || email == ''){
				error += "Niepoprawny format adresu email!<br />";
			}
			if(login == ''){
				error += "Login jest obowiązkowy!<br />";
			}
			
			var response = grecaptcha.getResponse();
			if(response.length == 0)
			{
				error += "Kontrola antyspamowa niepoprawnie zweryfikowana!<br />";
			}
			
		if(error == ''){
			$('#formCreateAccountTransport').submit();
		}else{
			$('#createAccountErrorBoxTransport').show();
			$('#createAccountErrorTransport').html(error);
			
			 $("#registerModal").animate({ scrollTop: 0 }, "slow");
			return false;
		}
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
			if(login == ''){
				errorClient += "Login jest obowiązkowy!<br />";
			}
			
			var responseClient = grecaptcha.getResponse();
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
	

})
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

	