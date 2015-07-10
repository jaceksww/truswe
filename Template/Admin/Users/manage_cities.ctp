
<h1><?php echo $title ?></h1>
<?php echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do użytkownika </a>', ['controller'=>'users', 'action'=>'manage', $userID ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
<br />
<hr />
<br />
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-cog"></i><?php echo $subtitle ?></div>
			</div>
			<div class="portlet-body form">	
				<div class="row">
				<div class="controls col-md-12">
				<?php
				echo $this->Form->create('', ['class' => 'form-horizontal form-bordered']); 
				?>
				<?php echo $this->Form->input('userID',['type'=>'hidden', 'value'=>$userID, 'inputContainer' => '{{content}}', 'label'=>false]);?>
				<table style="margin:10px;">
				<tr>
					<td>Dodaj nową: </td>
					<td><?php echo $this->Form->input('city',['inputContainer' => '{{content}}', 'label'=>false]);?></td>
					<td><input type="submit" value="Dodaj"></td>
				</tr>
				</table>

				<?php
					echo $this->Form->end();
					?>
				<hr />
				<ul>
				<?php 
				foreach($usersCities as $city){
					echo '<li>'.$city['city'];
					echo $this->Html->link('<i class="fa fa-times-circle"></i> ', ['controller'=>'users', 'action'=>'removeCity', $city['id'], $city['user_id'] ], array('escape'=>false));
					echo '</li> ';
				}
				?>
				</ul>
			</div>
			</div>
			</div>			
		</div>
<br />
<hr />
<br />
<?php echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do użytkownika </a>', ['controller'=>'users', 'action'=>'manage', $userID ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
