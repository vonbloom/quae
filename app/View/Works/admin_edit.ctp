<?php echo $this->element('admin_languages'); ?>

<?php echo $this->Html->script('ckeditor/ckeditor');?>

<div class="sections form">
<?php
echo $this->Form->create('Work', array('type' => 'file', 'class' => 'well'));
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
	
		echo $this->Form->input('Work.name.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'class'=>'form-control', 'label' => __('Name')));
	}
	
	echo $this->Form->input('filename', array('div' => array('class' => 'form-group'), 'type' => 'file', 'id' => 'image-sel'));	
 	if (!empty($this->request->data['Work']['filename']))
 		echo $this->Html->image('/uploads/images/'.$this->request->data['Work']['filename'], array('width'=>'200px', 'id' => 'fileprev'));
 	else
 		echo $this->Html->image('http://www.placehold.it/250x200/EFEFEF/AAAAAA&text=no+image'); 	
 	echo $this->Html->tag('button', __('Remove'), array('class' => 'btn btn-xs btn-danger btn-delete', 'type' => 'button')); 	
 	echo $this->Form->hidden('current', array('value' => $this->request->data['Work']['filename']));
 	
 	echo $this->Form->input('customer_id', array('options' => $customers, 'div' => array('class' => 'form-group'), 'class'=>'form-control'));
 	echo $this->Form->input('area_id', array('options' => $areas, 'div' => array('class' => 'form-group'), 'class'=>'form-control'));
	
	echo $this->Form->input('date', array('div' => array('class' => 'form-group'), 'class'=>'form-control', 'dateFormat' => 'DMY', 'selected' => array('day' => '1'), 'separator' => ''));
 	//echo $this->Form->year('date', array('div' => array('class' => 'form-group'), 'class'=>'form-control', 'label' => __('Year')));
 	//echo $this->Form->month('date', array('div' => array('class' => 'form-group'), 'class'=>'form-control', 'label' => __('Month')));
	
	for ($i=0; $i<count($languages); $i++) {
		$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
		$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
			
		echo $this->Form->input('Work.text.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'label' => __('Text'), 'type'=>'textarea', 'class'=>'ckeditor', 'escape' => 'false'));
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
	
<script type="text/javascript">
	$(document).ready(function(){
				 
		$('#image-sel').change(function(){
			var input = document.getElementById("image-sel");
			var fReader = new FileReader();
				    	
			fReader.readAsDataURL(input.files[0]);
			fReader.onloadend = function(event) {
				var img = document.getElementById("file-prev");
				img.src = event.target.result;
			};
		});
		
		$('.btn.btn-delete').click(function(){
			$(this).prev('img').attr('src', 'http://www.placehold.it/250x200/EFEFEF/AAAAAA&text=no+image')
			$(this).next('input').attr('value', '');
		});

		$('#WorkDateDay').hide();
	});
</script>


