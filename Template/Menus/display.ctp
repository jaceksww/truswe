<ul>
<?php
foreach($menu_elements as $el){
	echo '<li class="dropdown">';
	echo $this->Html->link($el['name'], $el['url'], array('class'=>'dropdown-toggle'));
	echo '</li>';
}
?>
</ul>

