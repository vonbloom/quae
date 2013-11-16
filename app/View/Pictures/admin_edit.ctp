<?php echo $this->element('admin_languages'); ?>

<?php echo $this->Html->script('ckeditor/ckeditor');?>

<div class="pictures form">

<?php echo $this->Form->create('Picture', array('type' => 'file', 'class' => 'well', 'role' => 'form')); ?>
<div class="btn-group">
<?php
echo $this->Form->button(__('Submit'), array('type' => 'submit', 'class' => 'btn btn-success'));
if ($this->request->data['Picture']['work_id'] != 0)
	echo $this->Html->link(__('Cancel'), array('controller' => $this->params['controller'], 'action' => 'index', $this->request->data['Picture']['work_id']), array('class'=>'btn btn-default'));
else
	echo $this->Html->link(__('Cancel'), array('controller' => $this->params['controller'], 'action' => 'index'), array('class'=>'btn btn-default'));
?>
</div>
<fieldset>
	<?php
    	echo $this->Form->input('id');
        echo $this->Form->input('filename', array('div' => array('class' => 'form-group'), 'type' => 'file', 'id' => 'image-sel'));
        echo $this->Html->image('/uploads/images/'.$this->request->data['Picture']['filename'], array('height'=>'200px', 'id' => 'file-prev'));
        echo $this->Html->tag('button', __('Remove'), array('class' => 'btn btn-xs btn-danger btn-delete', 'type' => 'button'));
        echo $this->Form->hidden('current', array('value' => $this->request->data['Picture']['filename']));
    	echo $this->Form->input('work_id', array('div' => array('class' => 'form-group'), 'class' => 'form-control', 'options' => $works));

		for ($i=0; $i<count($languages); $i++) {
			$class = 'input text i18n form-group '.$languages[$i]['Language']['code'];
			$class .= $languages[$i]['Language']['code'] == $this->Session->read('Config.language') ? '' : ' hidden';
		
			echo $this->Form->input('Picture.text.'.$languages[$i]['Language']['code'], array('div' => array('class' => $class), 'label' => __('Text'), 'class' => 'form-control', 'escape' => 'false'));
		}
		
		echo $this->Form->input('url', array('div' => array('class' => 'form-group'), 'class' => 'form-control'));
		//echo $this->Form->input('order', array('class'=>'input-mini'));
		echo $this->Form->input('visible');
        ?>
	</fieldset>
<div class="btn-group">
<?php
echo $this->Form->button(__('Submit'), array('type' => 'submit', 'class' => 'btn btn-success'));
if ($this->request->data['Picture']['work_id'] != 0)
	echo $this->Html->link(__('Cancel'), array('controller' => $this->params['controller'], 'action' => 'index', $this->request->data['Picture']['work_id']), array('class'=>'btn btn-default'));
else
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
		//$('#imageSel').attr('value', '');
		$(this).next('input').attr('value', '');
		});		   
	});
</script>
