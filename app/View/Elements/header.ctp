        <div class="navbar navbar-fixed-top">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <?php echo $this->Html->link('', array('controller' => 'pages', 'action' => 'display', 'home'), array('escape' => false, 'class' => 'navbar-brand')); ?>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                   	<?php 
                   		foreach ($menu as $item) {
							echo ((isset($this->params['pass'][0]) && $this->params['pass'][0] == $item['Section']['url']) || (!isset($this->params['pass'][0]) && $this->params['controller'] == $item['Section']['controller'])) ? '<li class="active">' : '<li>';
		                      	
							if ($item['Section']['controller'] == 'sections' || $item['Section']['controller'] == 'pages' || $item['Section']['controller'] == 'areas') {
			                	echo $this->Html->link(mb_strtoupper($item['Section']['name'], 'UTF-8'), array('controller' => $item['Section']['controller'], 'action' => 'view', $item['Section']['url']));
	                       	} else {
		                       	echo $this->Html->link(mb_strtoupper($item['Section']['name'], 'UTF-8'), array('controller' => $item['Section']['controller'], 'action' => 'index'));
                       		}
	                       	
                       		echo '</li>';
                       	}
                       	
                       	foreach ($areas as $area) {

                       		echo ((isset($this->params['pass'][0]) && $this->params['pass'][0] == $area['Area']['url'])) ? '<li class="active">' : '<li>';                       		
                       		echo $this->Html->link(mb_strtoupper($area['Area']['name'], 'UTF-8'), array('controller' => 'areas', 'action' => 'view', $area['Area']['url']));                       		 
                       		echo '</li>';
                       	}
                    ?>
            	</ul>
            	<?php //echo $this->element('lang_menu'); ?>
            </div><!--/.navbar-collapse -->         
        </div>							