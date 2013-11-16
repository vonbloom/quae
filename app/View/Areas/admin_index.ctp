<div class="sections index">
	<table class="table table-bordered table-striped table-hover">
	<thead>
	<tr>
		<th></th>
  		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($areas as $area): ?>
	<tr id="<?php echo $area['Area']['id']; ?>"<?php if ($area['Area']['visible'] != 1) echo ' class="muted"'?>>
		<td class="actions"><i class="glyphicon glyphicon-move" title="<?php echo __('Move'); ?>"></i></td>
		<td><?php echo h($area['Area']['id']); ?>&nbsp;</td>
		<td><?php echo h($area['Area']['name']); ?>&nbsp;</td>
    	<td class="actions">
    	<?php 	
			if ($area['Area']['visible'] == 1)
				$options = array('icon' => 'glyphicon glyphicon-eye-open', 'button' => 'btn btn-sm btn-warning btn-visible', 'title' => __('Visible'));
			else
				$options = array('icon' => 'glyphicon glyphicon-eye-open', 'button' => 'btn btn-sm btn-visible', 'title' => __('Not visible'));
			
			echo 
				$this->Form->button(
						$this->Html->tag('i','', array('class' => $options['icon'])),
						array('class' => $options['button'], 'title' => $options['title'])
				);
				
		?>
			<div class="btn-group">
			<?php 
				echo
				$this->Html->link(
						$this->Html->tag('i','', array('class' => 'glyphicon glyphicon-pencil')),
						array('controller' => 'areas', 'action' => 'edit', $area['Area']['id']),
						array('escape' => false, 'class' => 'btn btn-sm btn-inverse', 'title' => __('Edit'))
				);
			?>
			</div>
			<?php
	            echo $this->Form->postLink(
	            	$this->Html->tag('i','', array('class' => 'glyphicon glyphicon-trash')),
	                array('action' => 'delete', $area['Area']['id']),
	                array('escape' => false, 'class' => 'btn btn-sm btn-danger', 'title' => __('Delete')),
	                __('Are you sure you want to delete # %s?', $area['Area']['id'])
	            );
			?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>

<script>
	$(document).ready(function(){
		$('.table tbody').sortable({
			helper: function(e, tr) {
			    var $originals = tr.children();
			    var $helper = tr.clone();
			    $helper.children().each(function(index)
			    {
			      // Set helper cell sizes to match the original sizes
			      $(this).width($originals.eq(index).width());
			    });
			    return $helper;
			},
			handle: 'td:first',
			cursor: 'move',
		    stop: function() {
		        $.ajax({
		            type: "POST",
		            url: "<?php echo $this->here."/reorder";?>",
		            data: {items:$('.table tbody').sortable('toArray')},
		        });
		    }
		})/*.disableSelection()*/;

		
		$('.btn-visible').click(function(){
			if ($(this).hasClass('btn-warning')) {
				$(this).removeClass('btn-warning').find('i').removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
				$(this).parent().parent().addClass('muted');
				$.ajax({
		            type: "POST",
		            url: "<?php echo $this->here."/show";?>",
		            data: {id:$(this).parent().parent().attr('id'), show:0},
				});
			} else {
				$(this).addClass('btn-warning').find('i').addClass('glyphicon-eye-open').removeClass('glyphicon-eye-close');
				$(this).parent().parent().removeClass('muted');
				$.ajax({
		            type: "POST",
		            url: "<?php echo $this->here."/show";?>",
		            data: {id:$(this).parent().parent().attr('id'), show:1},
				})
			}
		});
	});
</script>
