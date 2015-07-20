<div class="tabbable tabbable-tabdrop">
											<ul class="nav nav-tabs">
													
													<?php
													echo '<li ';
													echo ($active == 1) ? 'class="active"' : '';
													echo '>';
													echo $this->Html->link('<i class="fa fa-user"></i> Moje dane', ['controller'=>'users', 'action'=>'manage', $user['id']] , array('escape'=>false,'class'=>'')); 
													echo '</li>';
													?>
													
												<li <?php echo ($active == 2) ? 'class="active"' : '' ?> >
													<?php echo $this->Html->link('<i class="fa fa-camera"></i> Zdjęcie główne ', ['controller'=>'users', 'action'=>'mainimage', $user['id']] , array('escape'=>false,'class'=>''));?> 
												</li>
												
												<?php 
												if($user['type'] == 1){
													echo '<li ';
													echo ($active == 3) ? 'class="active"' : '';
													echo '>';
													echo $this->Html->link('<i class="fa fa-map-marker"></i> Siedziba(y) i miejscowości działalności', ['controller'=>'users', 'action'=>'manageCities', $user['id']] , array('escape'=>false,'class'=>'')); 
													echo '</li>';
													
													echo '<li ';
													echo ($active == 4) ? 'class="active"' : '';
													echo '>';
													echo $this->Html->link('<i class="fa fa-align-justify"></i> O mnie i zakres usług', ['controller'=>'users', 'action'=>'description', $user['id']] , array('escape'=>false,'class'=>'')); 
													echo '</li>';
													
													echo '<li ';
													echo ($active == 5) ? 'class="active"' : '';
													echo '>';
													echo $this->Html->link('<i class="fa fa-picture-o"></i> Galeria', ['controller'=>'users', 'action'=>'galleries', $user['id']] , array('escape'=>false,'class'=>'')); 
													echo '</li>';
													
												}
												?> 
												
												
											</ul>
											
					</div>
					
