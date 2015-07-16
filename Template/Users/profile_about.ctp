
<div class="pricing-content">
		 
              <div class="clearfix"></div>
			  <br />
              <ul class="list-unstyled">
                <li> <h4> <i class="fa fa-circle"></i> Miejscowość: <?php echo (!empty($usersParams[0]['city'])) ? $usersParams[0]['city'] : '-' ?></h4></li>
                <li> <h4> <i class="fa fa-circle"></i> Zakres usług:</h4>
				<br />
					<?php echo (!empty($usersParams[0]['services'])) ? $usersParams[0]['services'] : '-' ?>
				</li>
               
              </ul>
            </div>
		
			<div id="profile_location_map" class="gmaps margin-bottom-40" style="height:320px;"></div>
<?php
if(!empty($usersCities)):
?>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            var UsersProfileMap = function () {

			return {
				//main function to initiate the module
				init: function () {
					var map;
					$(document).ready(function(){
						  map = new GMaps({
							div: '#profile_location_map',
							lat: <?php echo $usersCities[0]['lat']?>,
							lng: <?php echo $usersCities[0]['lng']?>,
						  });
						  <?php foreach($usersCities as $city):?>
						  
							   var marker = map.addMarker({
									lat: <?php echo $city['lat']?>,
									lng: <?php echo $city['lng']?>,
									title: 'Loop ed, Inc.',
									click: function(e) {
										alert('Szukaj tej miejscowości..');
									  },
									mouseover: function(e){
									//marker.infoWindow.open(map, marker);
									},
									infoWindow: {
										content: "<b>Loop, Inc.</b> 795 Park Ave, Suite 120<br>San Francisco, CA 94107"
									}
								});
						<?php endforeach;?>
					});
				}
			};
			
		}();
		UsersProfileMap.init();
        });
    </script>
<?php
endif;
?>
