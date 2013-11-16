<div class="sections index">
	<table class="table table-bordered table-striped table-hover">
	<thead>
	<tr>
  		<th><?php echo __('Id'); ?></th>
  		<th><?php echo __('Flag'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($languages as $language): ?>
	<tr>
		<td><?php echo h($language['Language']['id']); ?></td>
		<td class="actions">
		<?php 
			echo
			$this->Html->image(
					array('falgs.png'),
					array('class' => 'flag flag-'.$language['Language']['code'])
			);
		?>		
		</td>
		<td><?php echo h($language['Language']['name']); ?></td>
    	<td class="actions">
			<?php
	            echo $this->Form->postLink(
	            	$this->Html->tag('i','', array('class' => 'glyphicon glyphicon-trash')),
	                array('action' => 'delete', $language['Language']['id']),
	                array('escape' => false, 'class' => 'btn btn-sm btn-danger', 'title' => __('Delete')),
	                __('Are you sure you want to delete # %s?', $language['Language']['id'])
	            );
			?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>
