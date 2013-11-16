		<div class="posts">
		<?php foreach ($lastPosts as $post):?>
		<article>
            <?php echo $this->Html->tag(
            	'h1',
				$this->Html->link($post['Post']['title'],
				array('controller' => 'posts', 'action' => 'view', $post['Post']['url'])),
				array('escape' => false)
			); ?>
			<?php echo substr($post['Post']['text'], 0, 800).'... '.$this->Html->link(__('Read more'), array('controller' => 'posts', 'action' => 'view', $post['Post']['url']), array('class' => 'btn btn-link')); ?>
		</article>
		<?php endforeach; ?>

		<?php foreach ($lastReleases as $release):?>
		<article>
            <?php echo $this->Html->tag(
            	'h1',
				$this->Html->link($release['Release']['title'],
				array('controller' => 'Releases', 'action' => 'view', $release['Release']['url'])),
				array('escape' => false)
			); ?>
			<?php echo substr($release['Release']['text'], 0, 800).'... '.$this->Html->link(__('Read more'), array('controller' => 'releases', 'action' => 'view', $release['Release']['url']), array('class' => 'btn btn-link')); ?>
		</article>
		<?php endforeach; ?>
	</div>
