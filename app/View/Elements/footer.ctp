        <footer class="navbar navbar-fixed-bottom">
            <ul class="nav navbar-nav">
                <li>&copy; QUAE 2013</li>
                   	<?php 
                   		foreach ($footer as $item) {
							echo ((isset($this->params['pass'][0]) && $this->params['pass'][0] == $item['Section']['url']) || (!isset($this->params['pass'][0]) && $this->params['controller'] == $item['Section']['controller'])) ? '<li class="active">' : '<li>';
		                      	
							if ($item['Section']['controller'] == 'sections' || $item['Section']['controller'] == 'pages') {
			                	echo $this->Html->link(mb_strtoupper($item['Section']['name'], 'UTF-8'), array('controller' => $item['Section']['controller'], 'action' => 'view', $item['Section']['url']));
	                       	} else {
		                       	echo $this->Html->link(mb_strtoupper($item['Section']['name'], 'UTF-8'), array('controller' => $item['Section']['controller'], 'action' => 'index'));
                       		}
	                       	
                       		echo '</li>';
                       	}
                    ?>
            </ul>
            <ul class="nav navbar-nav social pull-right">
                <li class="facebook"><a href="https://www.facebook.com/QUAEsolucionescreativas" target="_blank" data-toggle="tooltip" title="Facebook"></a></li>
                <li class="twitter"><a href="https://twitter.com/QUAEtools" target="_blank" data-toggle="tooltip" title="Twitter"></a></li>
                <li class="youtube"><a href="http://www.youtube.com/user/SolucionesQUAE" target="_blank" data-toggle="tooltip" title="Youtube"></a></li>
                <li class="linkedin"><a href="http://www.linkedin.com/company/quae-soluciones-creativas-a-medida/products" target="_blank" data-toggle="tooltip" title="Linkedin"></a></li>
            </ul>
    
            <ul class="nav navbar-nav places pull-right">
                <li><a href="#" data-toggle="popover" title="" data-container="body" data-placement="top" data-content="Ctra. Cerdanyola, 34<br>08123 Sant Cugat del Vall�s<br>Tel.: 931 234 567".html_safe data-original-title="Contacto en Barcelona" data-trigger="click">
                    Barcelona
                </a></li>
                <li><a href="#" data-toggle="popover" title="" data-container="body" data-placement="top" data-content="Tel.: 931 234 567".html_safe data-original-title="Contacto en Marid" data-trigger="click">
                    Madrid
                </a></li>            
            </ul>
        </footer>
