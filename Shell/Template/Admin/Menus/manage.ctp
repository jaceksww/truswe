<h1><?php echo $title ?></h1>


		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-gift"></i>Dane elementu menu</div>
			</div>
			<div class="portlet-body form">	
					<?php 
					if(!empty($menu)){
						echo $this->Form->create($menu, ['class' => 'form-horizontal form-bordered']); 
						echo $this->Form->input('menuID');
						
					}else{
						echo $this->Form->create('', ['class' => 'form-horizontal form-bordered']); 
					}
					
					?>
						<div class="form-group">
							<label class="control-label col-md-3">Nazwa:</label>
							<div class="controls  col-md-9">
								<?php echo $this->Form->input('name',['class'=>'form-control', 'label'=>false]);?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Url:</label>
							<div class="controls col-md-9">
								<?php echo $this->Form->input('url',['class'=>'form-control', 'label'=>false]);?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Kolejność w menu:</label>
							<div class="controls col-md-9">
								<?php echo $this->Form->input('ordering',['class'=>'form-control', 'label'=>false]);?>
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

