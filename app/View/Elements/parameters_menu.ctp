<nav class="boxed">
	<ul class="nav nav-list">
		<li <?php if ($this->params['controller'] == 'parameters') echo 'class="active"'; ?>>
		<?php echo $this->Html->link(__('General').$this->Html->tag('i','',array('class' => 'glyphicon glyphicon-chevron-right pull-right')), array('controller' => 'parameters', 'action' => 'edit', 1, 'admin' => true), array('escape' => false)); ?>
		</ul>
</nav>
