<div class="sections index">
	<table class="table table-bordered table-hover">
	<thead>
	<tr>
  		<th><?php echo $this->Paginator->sort('id'); ?></th>
  		<th><?php echo __('Image'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($customers as $customer): ?>
	<tr id="<?php echo $customer['Customer']['id']; ?>"<?php if ($customer['Customer']['visible'] != 1) echo 'class="muted"'?>>
		<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
		<td class="actions">
		<?php
			if (!empty($customer['Customer']['filename']))
				echo $this->Html->image('/uploads/images/'.$customer['Customer']['filename'], array('width'=>'60px'));
			else
				echo $this->Html->image('http://www.placehold.it/60x60/EFEFEF/AAAAAA&text=no+image');
		?>		
		</td>
		<td><?php echo h($customer['Customer']['name']); ?>&nbsp;</td>
    	<td class="actions">
		<?php 	
			if ($customer['Customer']['visible'] == 1)
				$options = array('icon' => 'glyphicon glyphicon-eye-open', 'button' => 'btn btn-sm btn-warning btn-visible', 'title' => __('Visible'));
			else
				$options = array('icon' => 'glyphicon glyphicon-eye-close', 'button' => 'btn btn-sm btn-visible', 'title' => __('Not visible'));
			
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
					array('controller' => 'customers', 'action' => 'edit', $customer['Customer']['id']),
					array('escape' => false, 'class' => 'btn btn-sm btn-inverse', 'title' => __('Edit'))
			);

// 			echo
// 			$this->Html->link(
// 					$this->Html->tag('i','', array('class' => 'glyphicon glyphicon-picture')),
// 					array('controller' => 'pictures', 'action' => 'index', $customer['Customer']['id']),
// 					array('escape' => false, 'class' => 'btn btn-sm btn-inverse', 'title' => __('Gallery'))
// 			);

		?>
		</div>
		<?php
            echo $this->Form->postLink(
            	$this->Html->tag('i','', array('class' => 'glyphicon glyphicon-trash')),
                array('action' => 'delete', $customer['Customer']['id']),
                array('escape' => false, 'class' => 'btn btn-sm btn-danger', 'title' => __('Delete')),
                __('Are you sure you want to delete # %s?', $customer['Customer']['id'])
            );
		?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>

<?php echo $this->element('admin_pagination'); ?>

<script>
	$(document).ready(function(){
		$('.btn-visible').click(function(){
			if ($(this).hasClass('btn-warning')) {
				$(this).removeClass('btn-warning').find('i').removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
				$(this).parent().parent().addClass('muted');
				$.ajax({
		            type: "POST",
		            url: "<?php echo $this->webroot."admin/".$this->params['controller']."/show";?>",
		            data: {id:$(this).parent().parent().attr('id'), show:0},
				});
			} else {
				$(this).addClass('btn-warning').find('i').addClass('glyphicon-eye-open').removeClass('glyphicon-eye-close');
				$(this).parent().parent().removeClass('muted');
				$.ajax({
		            type: "POST",
		            url: "<?php echo $this->webroot."admin/".$this->params['controller']."/show";?>",
		            data: {id:$(this).parent().parent().attr('id'), show:1},
				})
			}
		});
	});
</script>
