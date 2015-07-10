
<h1><?php echo $title ?></h1>
<?php echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do użytkownika </a>', ['controller'=>'users', 'action'=>'manage', $userID ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
<br />
<hr />
<br />
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-camera"></i><?php echo $subtitle ?></div>
			</div>
			<div class="portlet-body form">	
					<?php 
					if(!empty($user)){
						echo $this->Form->create($user, ['class' => 'form-horizontal form-bordered']); 
						echo $this->Form->input('id');
					}else{
						echo $this->Form->create('', ['type' => 'file', 'class' => 'form-horizontal form-bordered']); 
					}
					?>
						<div class="form-group">
							<label class="control-label col-md-3">Avatar:</label>
							<div class="controls  col-md-9">
								<?php echo $this->Form->input('id',['type'=>'hidden','value'=>$userID,'class'=>'form-control', 'label'=>false]);?>
								<?php echo $this->Form->input('mainImage',['value'=>$mainimage, 'class'=>'form-control', 'label'=>false]);?>
								<?php
								if(file_exists($staticurl."profiles/".$userID."/".$mainimage)){
									echo '<img class="img-responsive" src="'.$staticurl.'profiles/'.$userID.'/'.$mainimage.'" alt="">';
								}
								else{
									echo '<img class="img-responsive" src="'.$staticurl.'profiles/avatar-default.jpg" alt="">';
								} 
								?>
								<?php echo $this->Form->file('new_mainImage',['class'=>'form-control', 'label'=>false]);?>
							</div>
						</div>
						
						
						<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
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
<?php echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do użytkownika </a>', ['controller'=>'users', 'action'=>'manage', $userID ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>

