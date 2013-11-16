<?php echo $this->element('admin_languages'); ?>

<?php echo $this->Html->script('ckeditor/ckeditor');?>

<div class="sections form">
<?php
echo $this->Form->create('Customer', array('type' => 'file', 'class' => 'well', 'role' => 'form'));
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
	echo $this->Form->input('name', array('div' => array('class' => 'input text form-group'), 'class'=>'form-control', 'label' => __('Name')));	
	echo $this->Form->input('filename', array('div' => array('class' => 'form-group'), 'type' => 'file', 'id' => 'imageSel'));
	echo $this->Html->image('/uploads/images/'.$this->request->data['Customer']['filename'],array('width'=>'200px', 'id' => 'fileprev'));
	echo $this->Html->tag('button', __('Remove'), array('class' => 'btn btn-xs btn-danger btn-delete', 'type' => 'button'));
	echo $this->Form->hidden('current', array('value' => $this->request->data['Customer']['filename']));		
 	echo $this->Form->input('url', array('div' => array('class' => 'input text form-group'), 'class'=>'form-control', 'label' => __('Url')));
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
				$('#file-prev').prev('img').attr('src', 'http://www.placehold.it/250x200/EFEFEF/AAAAAA&text=no+image');
				img.src = event.target.result;
			};
		});
		
		$('.btn.btn-delete').click(function(){
			$(this).prev('img').attr('src', 'http://www.placehold.it/250x200/EFEFEF/AAAAAA&text=no+image');
			$(this).next('input').attr('value', '');
		});
	});
</script>
