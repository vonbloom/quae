<?php //echo $this->Session->flash('auth'); ?>

<div class="users login form">
<?php 
echo $this->Form->create('User', array('class' => 'form-horizontal', 'role' => 'form'));
echo $this->Html->image('logo.png');
?>
<fieldset>
        <?php
        echo $this->Form->input('username', array('label' => array('class' => 'control-label', 'text' => __('Username:')), 'class' => 'form-control', 'div' => 'form-group'));
        echo $this->Form->input('password', array('label' => array('class' => 'control-label', 'text' => __('Password:')), 'class' => 'form-control', 'div' => 'form-group'));
    ?>
    </fieldset>
	<?php
		echo $this->Form->submit(__('Login'), array('class'=>'btn btn-primary'));
		echo $this->Form->end();
	?>
</div>
