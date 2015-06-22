<ul>
<?php
foreach($menu_elements as $el){
	$active_class = '';
	if( 
		( strlen($_SERVER['REQUEST_URI']) > 2 && strstr($el['url'],$_SERVER['REQUEST_URI']) )
		||
		(($_SERVER['REQUEST_URI'] == '' || $_SERVER['REQUEST_URI'] == '/') &&  strstr($el['name'],  'Strona'))
		)
		{
			$active_class = ' active';
		}
	echo '<li class="dropdown '.$active_class.'">';
	echo $this->Html->link($el['name'], $el['url'], array('class'=>'dropdown-toggle'));
	echo '</li>';
}
?>
</ul>

