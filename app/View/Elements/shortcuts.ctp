<!-- 
<?php
	if (isset($this->params['pass'][0])) {
		foreach ($menu as $section) {
			if ($section['Section']['url'] != $this->params['pass'][0])
				$newSections[] = $section;
		}
	} else {
		$newSections = $menu;
	}
	$rand_keys = array_rand($newSections, $elements);
	shuffle($newSections);
?>

<?php for ($i = 0; $i < $elements; $i++): ?>
<div class="col-lg-<?php echo 12/$elements;?> col-md-<?php echo 12/$elements;?>">
	<figure>
	<?php		
		if ($newSections[$rand_keys[$i]]['Section']['controller'] == 'sections' || $newSections[$rand_keys[$i]]['Section']['controller'] == 'pages') {
			echo $this->Html->link(
					$this->Html->image('/uploads/images/'.$newSections[$rand_keys[$i]]['Section']['filename'], array('class' => 'img-responsive', 'alt' => 'Interiorismo')),
					array('controller' =>$newSections[$rand_keys[$i]]['Section']['controller'],	'action' => 'view', $newSections[$rand_keys[$i]]['Section']['url']),
					array('escape' => false)
			);
		} else {
			echo $this->Html->link(
					$this->Html->image('/uploads/images/'.$newSections[$rand_keys[$i]]['Section']['filename'], array('class' => 'img-responsive', 'alt' => 'Interiorismo')),
					array('controller' => $newSections[$rand_keys[$i]]['Section']['controller'], 'action' => 'index'),
					array('escape' => false)
			);
		}
	?>
	</figure>
</div>
<?php endfor; ?> -->
