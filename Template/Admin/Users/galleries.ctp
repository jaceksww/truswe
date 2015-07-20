
<link href="../../assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet">
<h1><?php echo $title ?></h1>
<?php if(strstr($_SERVER['REQUEST_URI'], 'admin'))  echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do listy </a>', ['controller'=>'users', 'action'=>'index', $user['type'] ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
<br />
<hr />
<br />
		<div class="portlet box red"  style="border:none;">
			
			<div class="portlet-body form">	
				<?php echo $this->element('user_manage_menu', ['user'=>$user, 'active'=>5]);?>

				<div class="row">
				<div class="controls col-md-12">
				<br /><h3><?php echo $subtitle ?></h3>
				<?php
				echo $this->Form->create('', ['type' => 'file', 'class' => 'form-horizontal form-bordered']); 
				?>
				<?php echo $this->Form->input('userID',['type'=>'hidden', 'value'=>$userID, 'inputContainer' => '{{content}}', 'label'=>false]);?>
				<table style="margin:10px;">
				<tr>
					<td>Dodaj zdjęcie: </td>
					<td>
						<div class="row fileupload-buttonbar">
							<div class="col-lg-6">
								<span class="btn green fileinput-button">
											<i class="fa fa-plus"></i>
										<span>
										Wybierz zdjęcie</span>
										<input type="file" name="photo" >
										</span>
							</div>
							
							<div class="col-lg-6">
							&nbsp;&nbsp;
								<input type="submit" class="btn green" value="Dodaj">
							</div>
						</div>
					
					</td>
				</tr>
				</table>

				<?php
					echo $this->Form->end();
					?>
				<hr />
				<div class="row">
				<?php 
				foreach($usersPhotos as $photo){
					echo '<div class="col-md-3"><center>';
					if($user['mainImage'] != '' && file_exists($staticurl."profiles/".$user['id']."/".$photo['photo'])){
						echo '<img class="img-responsive" src="'.$staticurl.'profiles/'.$user['id'].'/'.$photo['photo'].'" alt="">';
					}
					
					echo '<br />';
					echo $this->Html->link('<i class="fa fa-times-circle"></i> Usuń ', ['controller'=>'users', 'action'=>'removePhoto', $photo['id'], $photo['user_id'] ], array('escape'=>false, 'class'=>'btn btn-xs red'));
					echo '<br />';
					echo '<br />';
					echo '</center></div> ';
				}
				?>
				</div>
			</div>
			</div>
			</div>			
		</div>
<br />
<hr />
<br />
<?php echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do użytkownika </a>', ['controller'=>'users', 'action'=>'manage', $userID ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
