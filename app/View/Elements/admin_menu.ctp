<nav class="boxed">
	<ul class="nav nav-list">
		<li <?php if ($this->params['controller'] == 'sections' || $this->params['controller'] == 'subsections') echo 'class="active"'; ?>>
		<?php echo $this->Html->link(__('Sections').$this->Html->tag('i','',array('class' => 'glyphicon glyphicon-chevron-right pull-right')), array('controller' => 'sections', 'action' => 'index', 'admin' => true), array('escape' => false)); ?>
<!--		<li<?php if ($this->params['controller'] == 'pictures') echo ' class="active"';?>>
		<?php echo $this->Html->link(__('Pictures').$this->Html->tag('i','',array('class' => 'glyphicon glyphicon-chevron-right pull-right')), array('controller' => 'pictures', 'action' => 'index', 'admin' => true), array('escape' => false));?>
 		</li> -->
		<li<?php if ($this->params['controller'] == 'areas') echo ' class="active"';?>>
		<?php echo $this->Html->link(__('Areas').$this->Html->tag('i','',array('class' => 'glyphicon glyphicon-chevron-right pull-right')), array('controller' => 'areas', 'action' => 'index', 'admin' => true), array('escape' => false));?>
		</li>
		<li<?php if ($this->params['controller'] == 'works' || $this->params['controller'] == 'pictures') echo ' class="active"';?>>
		<?php echo $this->Html->link(__('Works').$this->Html->tag('i','',array('class' => 'glyphicon glyphicon-chevron-right pull-right')), array('controller' => 'works', 'action' => 'index', 'admin' => true), array('escape' => false));?>
		</li>
		<li<?php if ($this->params['controller'] == 'customers') echo ' class="active"';?>>
		<?php echo $this->Html->link(__('Customers').$this->Html->tag('i','',array('class' => 'glyphicon glyphicon-chevron-right pull-right')), array('controller' => 'customers', 'action' => 'index', 'admin' => true), array('escape' => false));?>
		</li>

		</ul>
</nav>
