<div class="col-md-3" >
	<?php
								if($usersParams[0]['mainImage'] != '' && file_exists($staticurl."profiles/".$usersParams[0]['id']."/".$usersParams[0]['mainImage'])){
									echo '<img class="img-responsive" src="'.$staticurl.'profiles/'.$usersParams[0]['id'].'/'.$usersParams[0]['mainImage'].'" alt="">';
								}
								else{
									echo '<img class="img-responsive" src="'.$staticurl.'profiles/avatar-default.jpg" alt="">';
								} 
	?>
	
</div>
<div class="col-md-9" >
    <?php echo (!empty($usersParams[0]['description'])) ? $usersParams[0]['description'] : '-' ?>
</div>
		
		