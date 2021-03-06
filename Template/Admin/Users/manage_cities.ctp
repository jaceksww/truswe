
<h1><?php echo $title ?></h1>
<?php if(strstr($_SERVER['REQUEST_URI'], 'admin'))  echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> Wróć do listy </a>', ['controller'=>'users', 'action'=>'index', $user['type'] ], array('escape'=>false,'class'=>'btn default btn-xs blue')); ?>
<br />
<hr />
<br />
		<div class="portlet box red"  style="border:none;">
			
			<div class="portlet-body form">	
				<?php echo $this->element('user_manage_menu', ['user'=>$user, 'active'=>3]);?>

				<div class="row">
				<div class="controls col-md-12">
				<br /><h3><?php echo $subtitle ?></h3>
				<?php
				echo $this->Form->create('', ['class' => 'form-horizontal form-bordered']); 
				?>
				<?php echo $this->Form->input('is_main',['type'=>'hidden', 'value'=>$is_main, 'inputContainer' => '{{content}}', 'label'=>false]);?>
				
				<?php echo $this->Form->input('userID',['type'=>'hidden', 'value'=>$userID, 'inputContainer' => '{{content}}', 'label'=>false]);?>
				<table style="margin:10px;">
				
				<tr>
					<td>Dodaj nową: </td>
					<td><?php echo $this->Form->input('city',['class'=>'form-control','inputContainer' => '{{content}}', 'label'=>false]);?></td>
					<td><input type="submit"  class="btn green" value="Dodaj"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<div class="md-checkbox">
							<input name="is_main" value="1" type="checkbox" id="checkboxIsMain" class="md-check" <?php echo ($is_main == 1) ? 'checked' : ''; ?> >
							<label name="transport" for="checkboxIsMain">
								<span></span>
								<span class="check"></span>
								<span class="box"></span>
								zapisz jako siedzibę firmy
							</label>
							</div>
					</td>
					<td></td>
				</tr>
				</table>

				<?php
					echo $this->Form->end();
					?>
				<hr />
				<h4>Miejscowości, w których świadczone są usługi <small>(miejscowości te zostaną zaznaczone na mapie jako miejsca gdzie świadczysz usługi)</small></h4>
				<ul>
				<?php 
				$userCitiesStr = '';
				if(!empty($usersCities) && count($usersCities) > 0){
					foreach($usersCities as $city){
						if($city['is_main'] == 1) continue;
						$userCitiesStr .= '<li>'.$city['city'];
						$userCitiesStr .= $this->Html->link('<i class="fa fa-times-circle"></i> ', ['controller'=>'users', 'action'=>'removeCity', $city['id'], $city['user_id'] ], array('escape'=>false));
						$userCitiesStr .= '</li> ';
					}
				}
				if($userCitiesStr == ''){
					$userCitiesStr .= '<li>Brak zapisanych miejscowości</li>';
				}
				echo $userCitiesStr;
				?>
				</ul>
				
				<hr />
				<h4>Siedziby firmy <small>(miejscowości te zostaną zaznaczone na mapie na Twojej stronie profilowej - kontakt)</small></h4>
				<ul>
				<?php 
				$userCitiesStr = '';
				if(!empty($usersCities) && count($usersCities) > 0){
					foreach($usersCities as $city){
						if($city['is_main'] == 0) continue;
						$userCitiesStr .= '<li>'.$city['city'];
						$userCitiesStr .= $this->Html->link('<i class="fa fa-times-circle"></i> ', ['controller'=>'users', 'action'=>'removeCity', $city['id'], $city['user_id'] ], array('escape'=>false));
						$userCitiesStr .= '</li> ';
					}
				}
				if($userCitiesStr == ''){
					$userCitiesStr .= '<li>Brak zapisanych miejscowości</li>';
				}
				echo $userCitiesStr;
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
