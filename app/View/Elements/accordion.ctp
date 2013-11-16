<div class="panel-group products" id="accordion">
	<?php
		foreach ($panel as $element):
		$activeFam = 	(isset($this->params['pass'][0]) && $element['Family']['id'] == $this->params['pass'][0]) || 
						(isset($product) && $element['Family']['id'] == $product['Product']['family_id']);
		if ($element['Family']['count'] > 0):
	?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
			<a class="accordion-toggle<?php echo ($activeFam) ? ' active' : ''; ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $element['Family']['id'];?>">
				<?php echo $element['Family']['name'];?> <i class="glyphicon glyphicon-chevron-down pull-right"></i>
			</a>
			</h4>
		</div>
		<div id="collapse<?php echo $element['Family']['id'];?>" class="panel-collapse collapse<?php echo ($activeFam) ? ' in' : ''; ?>">
			<ul class="panel-body nav nav-pills nav-stacked">
				<?php
					for ($i=0; $i<count($element['Category']); $i++):
					$activeCat =	(isset($this->params['pass'][1]) && $element['Category'][$i]['id'] == $this->params['pass'][1]) ||
									(isset($product) && $element['Category'][$i]['id'] == $product['Product']['category_id']);
				?>
				<li<?php echo ($activeFam && $activeCat) ? ' class="active"' : ''; ?>>
				<?php 
					echo $this->Html->link(
							$element['Category'][$i]['name'].$this->Html->tag('span',$element['Category'][$i]['count'], array('class' => 'badge pull-right')),
							array('controller' => 'products', 'action' => 'index', $element['Family']['id'], $element['Category'][$i]['id']),
							array('escape' => false)
					);
				?>
				</li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
	<?php endif;?>
	<?php endforeach; ?>
</div>