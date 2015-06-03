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
					if(!empty($page)){
						echo $this->Form->create($page, ['class' => 'form-horizontal form-bordered']); 
						echo $this->Form->input('pageID');
					}else{
						echo $this->Form->create('', ['class' => 'form-horizontal form-bordered']); 
					}
					echo $this->Form->hidden('uri');
					?>
						<div class="form-group">
							<label class="control-label col-md-3">Nazwa strony:</label>
							<div class="controls  col-md-9">
								<?php echo $this->Form->input('name',['class'=>'form-control', 'label'=>false]);?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Tytuł:</label>
							<div class="controls col-md-9">
								<?php echo $this->Form->input('title',['class'=>'form-control', 'label'=>false]);?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Treść strony:</label>
							<?php echo $this->Form->textarea('content',['class'=>'inbox-editor wysihtml5 form-control  col-md-9', 'data-provide'=>'markdown' , 'rows'=>12,'label'=>false]);?>
							
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

