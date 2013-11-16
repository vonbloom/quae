<div class="form">
	<?php echo $section['Section']['text']; ?>
    <?php
	    echo $this->Form->create('Contact', array('action' => 'send', 'class' => 'contact-form'));
	    echo $this->Form->input('Contact.name', array('div' => array('class' => 'input text form-group'), 'label' => __('Name'), 'class' => 'form-control', 'maxlength' => 100));
	    echo $this->Form->input('Contact.email', array('div' => array('class' => 'input text form-group'), 'label' => __('E-mail'), 'class' => 'form-control', 'maxlength' => 100));
		echo $this->Form->input('Contact.message', array('div' => array('class' => 'form-group'), 'label' => __('Name'), 'class' => 'form-control', 'cols' => 50));
		?>
		<div class="btn-toolbar">
		<?php echo $this->Form->submit(__('Send'), array('div' => false, 'class'=>'btn btn-lg btn-primary'));?>
		<?php echo $this->Html->link(__('Privacy policy'), array('controller' => 'sections', 'action' => 'view', 'politica-de-privacidad'), array('class' => 'btn btn-link')); ?>
		</div>
		<?php echo $this->Form->end();?>
</div>
