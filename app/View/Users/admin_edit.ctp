<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php
echo $this->Form->create('User', array('class' => 'well', 'role' => 'form'));
?>
<div class="btn-group">
<?php
echo $this->Form->button(__('Submit'), array('type' => 'submit', 'class' => 'btn btn-success'));
echo $this->Html->link(__('Cancel'), array('controller' => $this->params['controller'], 'action' => 'index'), array('class'=>'btn btn-default'));
?>
</div>
    <fieldset>
        <?php
	        echo $this->Form->input('username', array('div' => array('class' => 'form-group'), 'class' => 'form-control'));
	        echo $this->Form->input('password', array('div' => array('class' => 'form-group'), 'class' => 'form-control'));
	        echo $this->Form->input('role', array('div' => array('class' => 'form-group'), 'label' => __('Role'), 'class' => 'form-control', 'options' => array('admin' => 'Admin', 'author' => 'Author')));
        ?>
    </fieldset>
<div class="btn-group">
<?php
echo $this->Form->button(__('Submit'), array('type' => 'submit', 'class' => 'btn btn-success'));
echo $this->Html->link(__('Cancel'), array('controller' => $this->params['controller'], 'action' => 'index'), array('class'=>'btn btn-default'));
?>
</div>
<?php echo $this->Form->end();?>
</div>
    