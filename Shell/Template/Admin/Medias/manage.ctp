<h1><?php echo $title ?></h1>


		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-gift"></i>Dane elementu media</div>
			</div>
			<div class="portlet-body form">	
					<?php 
					if(!empty($media)){
						echo $this->Form->create($media, ['class' => 'form-horizontal form-bordered','enctype' => 'multipart/form-data']); 
						echo $this->Form->input('mediaID');
						echo $this->Form->hidden('url');
						echo $this->Form->hidden('name');
					}else{
						echo $this->Form->create('', ['class' => 'form-horizontal form-bordered','enctype' => 'multipart/form-data']); 
					}
					
					?>
						<div class="form-group">
							<label class="control-label col-md-3">Plik:</label>
							<div class="controls  col-md-9">
								<?php echo $this->Form->file('media',['class'=>'form-control', 'label'=>false]);?>
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

