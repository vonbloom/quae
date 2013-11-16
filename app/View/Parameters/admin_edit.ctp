<?php echo $this->Html->script('ckeditor/ckeditor');?>

<div class="sections form">
<?php
echo $this->Form->create('Parameter', array('class' => 'well', 'role' => 'form'));
?>
<div class="btn-group">
<?php
echo $this->Form->button(__('Save'), array('type' => 'submit', 'class' => 'btn btn-success'));
?>
</div>
	<fieldset>
<?php
	echo $this->Form->input('id');
	foreach ($languages as $language) {
		$langs[$language['Language']['code']] = $language['Language']['name'];
	}
	echo $this->Form->input('title', array('div' => array('class' => 'input text i18n es form-group'), 'class'=>'form-control', 'label' => __('Company')));
	echo $this->Form->input('subtitle', array('div' => array('class' => 'input text i18n es form-group'), 'class'=>'form-control', 'label' => __('Site title')));
	echo $this->Form->input('adress', array('div' => array('class' => 'input text form-group'), 'label' => __('Adress'), 'type'=>'textarea', 'class'=>'ckeditor', 'escape' => 'false'));
	echo $this->Form->input('mail', array('div' => array('class' => 'input text i18n es form-group'), 'class'=>'form-control', 'label' => __('Mail')));
	echo $this->Form->input('gmaps', array('div' => array('class' => 'input text i18n es form-group'), 'class'=>'form-control', 'label' => __('Google maps')));
 	echo $this->Form->input('language', array('div' => array('class' => 'form-group'), 'class'=>'form-control', 'label' => __('Language'), 'type'=>'select', 'options'=>$langs,
 			//'default' => $this->data['Parameter']['language']
 	));
?>
	</fieldset>
<div class="btn-group">
<?php
echo $this->Form->button(__('Save'), array('type' => 'submit', 'class' => 'btn btn-success'));
?>
</div>
<?php echo $this->Form->end();?>
</div>
