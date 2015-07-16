<div class="tabbable tabbable-tabdrop">
											<ul class="nav nav-tabs">
												<li <?php echo ($active == 1) ? 'class="active"' : '' ?> >
													<a href="/users/manage" >Moje konto</a>
												</li>
												<li <?php echo ($active == 2) ? 'class="active"' : '' ?> >
													<?php echo $this->Html->link('<i class="fa fa-camera"></i> Zdjęcie główne ', ['controller'=>'users', 'action'=>'mainimage', $user['id']] , array('escape'=>false,'class'=>''));?> 
												</li>
												
												<?php 
												if($user['type'] == 1){
													echo '<li ';
													echo ($active == 3) ? 'class="active"' : '';
													echo '>';
													echo $this->Html->link('<i class="fa fa-align-justify"></i> Zarządzaj miejscowościami', ['controller'=>'users', 'action'=>'manageCities', $user['id']] , array('escape'=>false,'class'=>'')); 
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
					