<!-- Page level plugin styles START -->
  <link href="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet">
  <link href="/assets/admin/pages/css/inbox.css" rel="stylesheet">
<!-- Page level plugin styles END -->
  
<h1><?php echo $title ?></h1>


		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-gift"></i>Dane strony</div>
			</div>
			<div class="portlet-body form">	
					<?php 
					if(!empty($user)){
						echo $this->Form->create($user, ['class' => 'form-horizontal form-bordered']); 
						echo $this->Form->input('id');
					}else{
						echo $this->Form->create('', ['class' => 'form-horizontal form-bordered']); 
					}
					//echo $this->Form->hidden('uri');
					?>
						<div class="form-group">
							<label class="control-label col-md-3">Login:</label>
							<div class="controls  col-md-9">
								<?php echo $this->Form->input('login',['class'=>'form-control', 'label'=>false]);?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Email:</label>
							<div class="controls col-md-9">
								<?php echo $this->Form->input('email',['class'=>'form-control', 'label'=>false]);?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Imię:</label>
							<div class="controls col-md-9">
								<?php echo $this->Form->input('firstname',['class'=>'form-control', 'label'=>false]);?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Nazwisko:</label>
							<div class="controls col-md-9">
								<?php echo $this->Form->input('lastname',['class'=>'form-control', 'label'=>false]);?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Miasto:</label>
							<div class="controls col-md-9">
								<?php echo $this->Form->input('city',['class'=>'form-control', 'label'=>false]);?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Rodzaj konta:</label>
							<div class="controls col-md-9">
								<?php
								
								$options = [
									'1' => 'Kierowca',
									'2' => 'Klient'
								];
								echo $this->Form->select('type', $options, [
									
								]);
?>
							</div>
						</div>
						
						<fieldset>
					
					<div class="controls col-md-3 text-right">
					  Rodzaj transportu:
					</div>
					<div class="controls col-md-9">
					  <?php 
					
					  foreach ($cats as $cat):
					  ?>
                          <div class="md-checkbox">
							<input name="transportType[]" value="<?php echo $cat['id'];?>" type="checkbox" id="checkboxCreateAccountTransport<?php echo $cat['id'];?>" class="md-check" <?php echo (in_array( $cat['id'], $usersCats)) ? 'checked' : ''; ?> >
							<label name="transport" for="checkboxCreateAccountTransport<?php echo $cat['id'];?>">
								<span></span>
								<span class="check"></span>
								<span class="box"></span>
								<?php echo $cat['name'];?> 
							</label>
							</div>
					  <?php 
					  endforeach; 
					  ?>
					  </div>
					  
                    </fieldset>
					
					
						
						<div class="form-group">
							<label class="control-label col-md-3">Opis:</label>
							<?php echo $this->Form->textarea('description',['class'=>'inbox-editor wysihtml5 form-control  col-md-9', 'data-provide'=>'markdown' , 'rows'=>12,'label'=>false]);?>
							
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

