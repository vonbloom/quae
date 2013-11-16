<ul class="nav nav-tabs">
	<?php foreach($languages as $language):?>
		<li<?php echo ($language['Language']['code'] == $this->Session->read('Config.language')) ? ' class="active"' : '';?>>
			<a id="<?php echo $language['Language']['code'];?>">
				<img src="flags.png" class="flag flag-<?php echo $language['Language']['code'];?>" /> <?php echo $language['Language']['name'];?>
			</a>
		</li>
	<?php endforeach;?>
</ul>
