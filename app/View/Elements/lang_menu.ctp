<ul class="nav navbar-nav pull-right">
	<?php
	foreach ($this->viewVars['langCodes'] as $language) {
		if (isset($activeLang)) {
			if ($language != $activeLang) {
				echo $this->Html->tag('li',	$this->Html->link(mb_strtoupper(substr($language, 0, 3), 'UTF-8'),	array('controller' => 'pages', 'action' => 'display', 'home', 'language'=>$language)));
			}
		} else {
			if ($language != $defaultLang) {
				echo $this->Html->tag('li',	$this->Html->link(mb_strtoupper(substr($language, 0, 3), 'UTF-8'),	array('controller' => 'pages', 'action' => 'display', 'home', 'language'=>$language)));						
			}
		}
	} 
	?>
</ul>
