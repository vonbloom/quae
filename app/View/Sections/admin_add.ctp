<?php echo $this->element('admin_languages'); ?>

<?php echo $this->Html->script('ckeditor/ckeditor');?>

<div class="sections form">
<?php
echo $this->Form->create('Section', array('type' => 'file', 'class' => 'well', 'role' => 'form'));
?>

<div class="btn-group">
<?php
echo $this->Form->button(__('Submit'), array('type' => 'submit', 'class' => 'btn btn-success'));
echo $this->Html->link(__('Cancel'), array('controller' => $this->params['controller'], 'action' => 'index'), array('class'=>'btn btn-default'));
?>
</div>
<fieldset>
<?php
	for ($i=0; $i<count($languages); $i++) {
		$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
		$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
		
		echo $this->Form->input('Section.name.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'class'=>'form-control', 'label' => __('Name')));
	}
	
 	echo $this->Form->input('filename', array('div' => array('class' => 'form-group'), 'type' => 'file', 'id' => 'image-sel'));
	echo $this->Html->image('http://www.placehold.it/250x200/EFEFEF/AAAAAA&text=no+image',array('width'=>'200px', 'id' => 'file-prev'));
	echo $this->Html->tag('button', __('Remove'), array('class' => 'btn btn-xs btn-danger btn-delete', 'type' => 'button'));
	echo $this->Form->hidden('current');
	
 	
 	for ($i=0; $i<count($languages); $i++) {
 		$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
 		$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
 		
 		echo $this->Form->input('Section.text.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'label' => __('Text'), 'type'=>'textarea', 'class'=>'ckeditor', 'escape' => 'false'));
 	}

 	echo $this->Form->hidden('url');
	echo $this->Form->input('controller', array('div' => array('class' => 'form-group'), 'class' => 'form-control'));
	echo $this->Form->input('visible');
    echo $this->Form->input('menu');
    echo $this->Form->input('footer');
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
