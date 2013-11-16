<nav class="boxed">
	<ul class="nav nav-list">
		<li<?php if ($this->params['controller'] == 'languages') echo ' class="active"';?>>
		<?php echo $this->Html->link(__('Languages').$this->Html->tag('i','',array('class' => 'glyphicon glyphicon-chevron-right pull-right')), array('controller' => 'languages', 'action' => 'index', 'admin' => true), array('escape' => false));?>
		</li>
		<li<?php if ($this->params['controller'] == 'users' && ($this->params['action'] == 'admin_index' || $this->params['action'] == 'admin_edit' || $this->params['action'] == 'admin_add')) echo ' class="active"';?>>
		<?php echo $this->Html->link(__('Users').$this->Html->tag('i','',array('class' => 'glyphicon glyphicon-chevron-right pull-right')), array('controller' => 'users', 'action' => 'index', 'admin' => true), array('escape' => false));?>
		</li>
	</ul>
</nav>
