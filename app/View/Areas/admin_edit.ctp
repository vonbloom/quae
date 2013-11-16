<?php echo $this->element('admin_languages'); ?>

<?php echo $this->Html->script('ckeditor/ckeditor');?>

<div class="sections form">
<?php
echo $this->Form->create('Area', array('class' => 'well', 'role' => 'form'));
?>

<div class="btn-group">
<?php
echo $this->Form->button(__('Submit'), array('type' => 'submit', 'class' => 'btn btn-success'));
echo $this->Html->link(__('Cancel'), array('controller' => $this->params['controller'], 'action' => 'index'), array('class'=>'btn btn-default'));
?>
</div>
<fieldset>
<?php
	echo $this->Form->input('id');
	
	for ($i=0; $i<count($languages); $i++) {
		$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
		$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
		
		echo $this->Form->input('Area.name.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'class'=>'form-control', 'label' => __('Name')));
	}
	for ($i=0; $i<count($languages); $i++) {
		$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
		$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
	
		echo $this->Form->input('Area.title.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'class'=>'form-control', 'label' => __('Title')));
	}
	for ($i=0; $i<count($languages); $i++) {
		$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
		$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
			
		echo $this->Form->input('Area.text.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'label' => __('Text'), 'type'=>'textarea', 'class'=>'ckeditor', 'escape' => 'false'));
	}
	for ($i=0; $i<count($languages); $i++) {
		$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
		$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
	
		echo $this->Form->input('Area.subtitle1.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'class'=>'form-control', 'label' => __('Subtitle 1')));
	}
	for ($i=0; $i<count($languages); $i++) {
		$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
		$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
			
		echo $this->Form->input('Area.text2.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'label' => __('Text 1'), 'type'=>'textarea', 'class'=>'ckeditor', 'escape' => 'false'));
	}
	for ($i=0; $i<count($languages); $i++) {
		$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
		$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
	
		echo $this->Form->input('Area.subtitle2.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'class'=>'form-control', 'label' => __('Subtitle 2')));
	}
	for ($i=0; $i<count($languages); $i++) {
		$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
		$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
			
		echo $this->Form->input('Area.text3.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'label' => __('Text 2'), 'type'=>'textarea', 'class'=>'ckeditor', 'escape' => 'false'));
	}
	
	echo $this->Form->input('visible');
	
	
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
