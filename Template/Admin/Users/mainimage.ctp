<link href="../../assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet">

<h1><?php echo $title ?></h1>
<?php if(strstr($_SERVER['REQUEST_URI'], 'admin'))  echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do listy </a>', ['controller'=>'users', 'action'=>'index', $user['type'] ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
<br />
<hr />
<br />
		<div class="portlet box red"  style="border:none;">
			
			<div class="portlet-body form">	
				<?php echo $this->element('user_manage_menu', ['user'=>$user, 'active'=>2]);?>
				<br /><h3><?php echo $subtitle ?></h3>
					<?php 
					if(!empty($user)){
						echo $this->Form->create($user, ['type' => 'file','class' => 'form-horizontal form-bordered']); 
						echo $this->Form->input('id');
					}else{
						echo $this->Form->create('', ['type' => 'file', 'class' => 'form-horizontal form-bordered']); 
					}
					?>
						<div class="form-group  text-center">
							<label class="control-label col-md-3">Avatar:</label>
							<div class="controls  col-md-9">
								<?php echo $this->Form->input('id',['type'=>'hidden','value'=>$userID,'class'=>'form-control', 'label'=>false]);?>
								<?php echo $this->Form->input('mainImage',['type'=>'hidden','value'=>$mainimage, 'class'=>'form-control', 'label'=>false]);?>
								<?php
								if($mainimage != '' && file_exists($staticurl."profiles/".$userID."/".$mainimage)){
									echo '<img class="img-responsive" src="'.$staticurl.'profiles/'.$userID.'/'.$mainimage.'" alt="">';
								}
								else{
									echo '<img class="img-responsive" src="'.$staticurl.'profiles/avatar-default.jpg" alt="">';
								} 
								?>
								<br />
								<div class="row fileupload-buttonbar">
									<div class="col-lg-6">
										<span class="btn green fileinput-button">
													<i class="fa fa-plus"></i>
												<span>
												Wybierz zdjęcie</span>
												<input type="file" name="new_mainImage" >
												</span>
									</div>
									
								</div>
							</div>
						</div>
						
						
						<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<?php echo $this->Html->link('Anuluj', ['controller'=>'users', 'action'=>'manage', $userID ], array('escape'=>false,'class'=>'btn default')); ?>
										</div>
									</div>
								</div>
								
					<?php 
					//echo $this->Form->button('Add');
					echo $this->Form->end();
					?>
			</div>			
		</div>
<br />
<hr />
<br />
<?php echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do użytkownika ', ['controller'=>'users', 'action'=>'manage', $userID ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>

