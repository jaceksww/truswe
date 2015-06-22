<h1>Media</h1>


<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bell-o"></i>Lista media
							</div>
							
						</div>
						<div class="portlet-body">
						<?php echo $this->Html->link('<i class="fa fa-plus"></i> Dodaj nowy </a>', ['controller'=>'medias', 'action'=>'manage' ], array('escape'=>false,'class'=>'btn default btn-lg green')); ?>
										
							<div class="table-scrollable">
								<table class="table table-striped table-bordered table-advance table-hover">
								<thead>
								<tr>
									<th>
										<i class="fa fa-angle-double-right"></i> ID
									</th>
									
									<th class="hidden-xs">
										<i class="fa fa-caret-right"></i> Plik
									</th>
									<th>
										<i class="fa fa-link"></i> Url
									</th>
									
									<th>
									</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($medias as $media): ?>
								<tr>
									<td class="highlight">
										<div class="success">
										</div>
										<a href="javascript:;">
										<?php echo $media['mediaID'] ?>
									</td>
									
									<td class="hidden-xs">
										<?php echo $this->Html->image($staticurl.'cms/'.$media['url'], array('style'=>'width:100px'));?>
										<?php echo $this->Html->link($media['name'], ['controller'=>'medias', 'action'=>'manage', $media['mediaID'] ], array('class'=>'')); ?>
									</td>
									<td>
										 <?php echo trim($pageurl,'/').$staticurl.'cms/'.$media['url'] ?>
									</td>
									
									<td>
										<?php echo $this->Html->link('<i class="fa fa-edit"></i> Edytuj </a>', ['controller'=>'medias', 'action'=>'manage', $media['mediaID'] ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
										<?php echo $this->Html->link('<i class="fa fa-trash-o"></i> Usuń </a>', ['controller'=>'medias', 'action'=>'manage', $media['mediaID'] ], array('escape'=>false, 'class'=>'btn default btn-xs black')); ?>
										
									</td>
								</tr>
								<?php endforeach; ?>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
