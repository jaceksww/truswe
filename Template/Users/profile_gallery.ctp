<?php foreach($usersPhotos as $photo): ?>
	<?php if($photo['photo'] != '' && file_exists($staticurl."profiles/".$usersParams[0]['id']."/".$photo['photo'])): ?>
							
		<div class="item col-md-4 col-sm-6 col-xs-12">
				<img src="<?php echo $staticurl.'profiles/'.$usersParams[0]['id'].'/'.$photo['photo']?>" alt="NAME" class="img-responsive">
				<a href="<?php echo $staticurl.'profiles/'.$usersParams[0]['id'].'/'.$photo['photo']?>" class="zoom valign-center">
				  <div class="valign-center-elem" style="position: absolute; top: 50%; margin-top: -40px; width: 100%; height: 80px;">
				    <strong>Zdjęcie z galerii</strong>
				    
				    <b>Zobacz</b>
				  </div>
				</a>
		</div>
	<?php endif; ?>
	
<?php endforeach;?>
