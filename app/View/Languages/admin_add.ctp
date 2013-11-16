<div class="sections form">
<?php
echo $this->Form->create('Language', array('class' => 'well', 'role' => 'form'));
?>

<div class="btn-group">
<?php
echo $this->Form->button(__('Submit'), array('type' => 'submit', 'class' => 'btn btn-success'));
echo $this->Html->link(__('Cancel'), array('controller' => $this->params['controller'], 'action' => 'index'), array('class'=>'btn btn-default'));

$options = array(
	'ca' => 'Català',
	'en' => 'English',
	'es' => 'Español',
	'de' => 'Deutsch',
	'fr' => 'Française',
	'it' => 'Italiano',
	'pt' => 'Português',
);
?>
</div>
<fieldset>
<?php
	echo $this->Form->input('code', array('div' => array('class' => 'form-group'), 'class' => 'form-control', 'id' => 'code-sel', 'label' => __('Language'),
		'options' => $options,
		'empty' => array(0 => __('Select language')),
	));

	echo $this->Form->hidden('name');
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

<script type="text/javascript">
	$(document).ready(function(){
		$('#code-sel').change(function(){
			$('#LanguageName').val($('#code-sel option:selected').text());
		});
	});
</script>
