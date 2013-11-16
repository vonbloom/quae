<hr>
<div class="navbar">
<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<ul class="pagination">
	<?php
		echo $this->Paginator->first('|<', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'prev disabled'));
		echo $this->Paginator->prev('<<', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'prev disabled'));
		echo $this->Paginator->numbers(array(
		    //'before' => '',
		    'separator' => '',
		    'currentClass' => 'active',
		    'tag' => 'li',
		    //'after' => ''
		));
		echo $this->Paginator->next('>>', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'next disabled'));
		echo $this->Paginator->last('>|', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'next disabled'));
	?>
	</ul>
</div>
