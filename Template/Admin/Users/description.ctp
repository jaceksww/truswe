
<h1><?php echo $title ?></h1>
<?php echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do użytkownika', ['controller'=>'users', 'action'=>'manage', $user['id'] ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
<br />
<hr />
<br />
		<div class="portlet box red"  style="border:none;">
			
			<div class="portlet-body form">	
				<?php echo $this->element('user_manage_menu', ['user'=>$user, 'active'=>4]);?>
				<br /><h3><?php echo $subtitle ?></h3>
					<?php 
					if(!empty($user)){
						echo $this->Form->create($user, ['class' => 'form-horizontal form-bordered']); 
						echo $this->Form->input('id');
					}else{
						echo $this->Form->create('', ['type' => 'file', 'class' => 'form-horizontal form-bordered']); 
					}
					?>
						<div class="form-group">
							<div class="form-group">
							<label class="control-label col-md-2">Opis:</label>
							<div class="col-md-10">
							<?php echo $this->Form->textarea('description',['class'=>'inbox-editor wysihtml5 form-control  col-md-9', 'data-provide'=>'markdown' , 'rows'=>12,'label'=>false]);?>
							</div>
						</div>
						
						
						<div class="form-group">
							<div class="form-group">
							<label class="control-label col-md-2">Zakres usług:</label>
							<div class="col-md-10">
							<?php echo $this->Form->textarea('services',['class'=>'inbox-editor wysihtml5 form-control  col-md-9', 'data-provide'=>'markdown' , 'rows'=>12,'label'=>false]);?>
							</div>
						</div>
						
						
						
						
						
						<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<?php echo $this->Html->link('Anuluj', ['controller'=>'users', 'action'=>'manage', $user['id'] ], array('escape'=>false,'class'=>'btn default')); ?>
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
<?php echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do użytkownika ', ['controller'=>'users', 'action'=>'manage', $user['id'] ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>

