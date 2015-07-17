<?php echo $usersParams[0]['other_long']?>
				<div class="separator-orange"><br /><br /></div>
					<?php 
					$citymain = '';
					foreach($usersCities as $city):
					?>
							<?php 
							if($city['is_main'] == 1){
								$citymain = $city['city'].'<br />'; 
							} 
							$citymain = trim ($citymain, '<br />');
							?>
						<?php endforeach;?>
					<?php
					$usersParams[0]['city'] = $citymain;
					$contact_params = array(
																array('type'=>'Nazwa firmy', 'key'=>'company','val'=>'Transpol', 'icon'=>'fa-angle-double-right'),
																array('type'=>'Miejscowość', 'key'=>'city', 'val'=>'Warszawa', 'icon'=>'fa-map-marker'),
																array('type'=>'Nr telefonu', 'key'=>'phone', 'val'=>'676 655 433', 'icon'=>'fa-mobile'),
																array('type'=>'Adres e-mail', 'key'=>'email', 'val'=>'transpol@jakasf.pl', 'icon'=>'fa-envelope-o'),
																array('type'=>'Nr GG', 'key'=>'gg', 'val'=>'5444433', 'icon'=>'fa-sun-o'),
																array('type'=>'Skype', 'key'=>'skype', 'val'=>'transpol.firma', 'icon'=>'fa-skype')
																);
																
					?>
					<?php 
					foreach($contact_params as $param):
					if($usersParams[0][$param['key']] == '') continue;
					?>
					<div class="row">
					<div class="col-md-6 text-right"><h4><?php echo $param['type']?>  : </h4></div> 
					<div class="col-md-6 text-left lead lead"><h4> <span   class="contact-marker fa <?php echo $param['icon']?>">&nbsp;</span> <?php echo $usersParams[0][$param['key']]?></h4></div>
					</div>
					<?php endforeach; ?>
				</div>