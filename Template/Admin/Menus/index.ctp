<h1>Menu</h1>


<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bell-o"></i>Lista menu
							</div>
							
						</div>
						<div class="portlet-body">
						<?php echo $this->Html->link('<i class="fa fa-plus"></i> Dodaj nowy </a>', ['controller'=>'menus', 'action'=>'manage' ], array('escape'=>false,'class'=>'btn default btn-lg green')); ?>
										
							<div class="table-scrollable">
								<table class="table table-striped table-bordered table-advance table-hover">
								<thead>
								<tr>
									<th>
										<i class="fa fa-angle-double-right"></i> ID
									</th>
									<th>
										<i class="fa fa-angle-double-right"></i> Kolejność
									</th>
									<th class="hidden-xs">
										<i class="fa fa-caret-right"></i> Nazwa
									</th>
									<th>
										<i class="fa fa-link"></i> Url
									</th>
									
									<th>
									</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($menus as $menu): ?>
								<tr>
									<td class="highlight">
										<div class="success">
										</div>
										<a href="javascript:;">
										<?php echo $menu['menuID'] ?>
									</td>
									<td>
										 <?php echo $menu['ordering'] ?>
									</td>
									<td class="hidden-xs">
										 
										<?php echo $this->Html->link($menu['name'], ['controller'=>'menus', 'action'=>'manage', $menu['menuID'] ], array('class'=>'')); ?>
									</td>
									<td>
										 <?php echo $menu['url'] ?>
									</td>
									
									<td>
										<?php echo $this->Html->link('<i class="fa fa-edit"></i> Edytuj </a>', ['controller'=>'menus', 'action'=>'manage', $menu['menuID'] ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
										<?php echo $this->Html->link('<i class="fa fa-trash-o"></i> Usuń </a>', ['controller'=>'menus', 'action'=>'manage', $menu['menuID'] ], array('escape'=>false, 'class'=>'btn default btn-xs black')); ?>
										
									</td>
								</tr>
								<?php endforeach; ?>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
