

<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bell-o"></i>Lista profili
							</div>
							
						</div>
						<div class="portlet-body">
						Rodzaj profilu: <select id="adminUsersFilterType">
						<option value="1"
						<?php
						if(!$this->session->check('filter.type') || $this->session->read('filter.type') == 1){
							echo ' selected ';
						}
						?>
						>Kierowcy</option>
						<option value="2"
						<?php
						if($this->session->check('filter.type') && $this->session->read('filter.type') == 2){
							echo ' selected ';
						}
						?>
						>Klienci</option>
						</select>
						 | 
						Status: <select id="adminUsersFilterActive">
						<option value="1"
						<?php
						if(!$this->session->check('filter.active') || $this->session->read('filter.active') == 1){
							echo ' selected ';
						}
						?>
						>Aktywne</option>
						<option value="0"
						<?php
						if($this->session->check('filter.active') && $this->session->read('filter.active') == 0){
							echo ' selected ';
						}
						?>
						>Nieaktywne</option>
						</select>
						<?php //echo $this->Html->link('<i class="fa fa-plus"></i> Dodaj nowy </a>', ['controller'=>'pages', 'action'=>'manage' ], array('escape'=>false,'class'=>'btn default btn-lg green')); ?>
						
							<div class="table-scrollable">
								<table class="table table-striped table-bordered table-advance table-hover">
								<thead>
								<tr>
									<th>
										<i class="fa fa-angle-double-right"></i> ID
									</th>
									<th class="hidden-xs">
										<i class="fa fa-caret-right"></i> Login
									</th>
									<th>
										<i class="fa fa-caret-right"></i> Data utworzenia
									</th>
									<th>
										Aktywny
									</th>
									<th>
										
									</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($users as $user): ?>
								<tr>
									<td class="highlight">
										<div class="success">
										</div>
										<a href="javascript:;">
										<?php echo $user['id'] ?>
									</td>
									<td class="hidden-xs">
										 
										<?php echo $user['login']; ?>
									</td>
									<td>
										 <?php echo $user['dateCreated'] ?>
									</td>
									<td>
										 <?php 
										 if($user['active'] == 1){
											 echo '<span class="badge badge-roundless badge-success">AKTYWNY</span>';
										 }else{
											 echo '<span class="badge badge-roundless badge-danger">NIEAKTYWNY</span>';
										 }?>
									</td>
									<td>
										<?php echo $this->Html->link('<i class="fa fa-edit"></i> Edytuj </a>', ['controller'=>'pages', 'action'=>'manage', $user['id'] ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
										<?php echo $this->Html->link('<i class="fa fa-trash-o"></i> Usuń </a>', ['controller'=>'users', 'action'=>'updatefield', $user['id'], 1,'deleted' ], array('escape'=>false,'onclick'=>'return confirm("Usunąć wybranego zawodnika?")' ,'class'=>'btn btn-xs red')); ?>
										<?php 
										 if($user['active'] == 1){
											 echo $this->Html->link('<i class="fa fa-refresh"></i> Deaktywuj </a>', ['controller'=>'users', 'action'=>'updatefield', $user['id'], 0, 'active' ], array('escape'=>false, 'class'=>'btn default btn-xs black')); 
										 }else{
											echo $this->Html->link('<i class="fa fa-refresh"></i> Aktywuj </a>', ['controller'=>'users', 'action'=>'updatefield', $user['id'], 1, 'active' ], array('escape'=>false, 'class'=>'btn default btn-xs black')); 
										 }?>
									</td>
								</tr>
								<?php endforeach; ?>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
					<ul class="pagination">
					<?php
					echo $this->Paginator->first ();
					echo $this->Paginator->prev ();
					echo '<li>
										<a href="javascript:;">
										'.$this->Paginator->current().' </a>
									</li>';
					echo $this->Paginator->next();
					echo $this->Paginator->last ();
					?>
					</ul>
					<?php
					
echo $this->Paginator->counter(
    'Strona {{page}} z {{pages}}'
);
					?>
