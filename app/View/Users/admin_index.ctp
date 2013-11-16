<div class="sections index">
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
  		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td class="actions"><?php echo $user['User']['username'];?>&nbsp;</td>
		<td class="actions">
		<div class="btn-group">
		<?php 
			if ($userId == $user['User']['id'] || $userId == 1) {
				echo
				$this->Html->link(
						$this->Html->tag('i','', array('class' => 'glyphicon glyphicon-pencil')),
						array('controller' => 'users', 'action' => 'edit', $user['User']['id']),
						array('escape' => false, 'class' => 'btn btn-sm btn-inverse', 'title' => __('Edit'))
				);
			}
		?>
		</div>
		<?php
			if ($user['User']['id'] != 1 && $userId == 1) {
	            echo $this->Form->postLink(
	            	$this->Html->tag('i','', array('class' => 'glyphicon glyphicon-trash')),
	                array('controller' => 'users', 'action' => 'delete', $user['User']['id']),
	                array('escape' => false, 'class' => 'btn btn-sm btn-danger', 'title' => __('Delete')),
	                __('Are you sure you want to delete # %s?', $user['User']['id'])
	            );
			}
		?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>
