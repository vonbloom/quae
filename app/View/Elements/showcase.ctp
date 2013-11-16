    <!-- Main slide -->
    <div id="slide" class="visible-lg visible-md showcast">
    	<div id="screen">
            <div id="landscapes">
            <?php for ($i = 0; $i < count($pictures); $i++) : ?>
                <div id="<?php echo Inflector::slug($pictures[$i]['Picture']['url'], '-'); ?>" class="landscape<?php echo (Inflector::slug($pictures[$i]['Picture']['url'], '-') == $this->params['pass'][0]) ? ' active':''; ?>" style="background-image: url(<?php echo $this->webroot.'uploads/images/'.$pictures[$i]['Picture']['filename']; ?>)" data-order="<?php echo $i+1;?>"></div>
            <?php endfor;?>
            </div>
        </div>
        <div id="table"></div>
        <div id="objects">
        	<div class="container">
        		<?php
        		
        			/** DESAYUNOS **/
        		
        			echo $this->Html->link(
        				$this->Html->image('desayuno03.png'),
						array('controller' => 'products', 'action' => 'index', 23),
						array('escape' => false, 'id' => 'desayuno01', 'class' => 'object static desayuno layer1', /*'title' => __('Cereals'), 'data-toggle' => 'tooltip', 'data-placement' => 'top',*/ 'data-xpos' => '0%', 'data-ypos' => '10px')
					);
					echo $this->Html->link(
							$this->Html->image('desayuno04.png'),
							array('controller' => 'products', 'action' => 'index', 11),
							array('escape' => false, 'id' => 'desayuno02', 'class' => 'object static desayuno layer2', /*'title' => __('Juices'), 'data-toggle' => 'tooltip', 'data-placement' => 'top',*/ 'data-xpos' => '23%', 'data-ypos' => '-15px')
					);
					echo $this->Html->link(
							$this->Html->image('desayuno08.png'),
							'',
							array('escape' => false, 'id' => 'desayuno03', 'class' => 'object static desayuno layer3', 'data-xpos' => '4%', 'data-ypos' => '15px')
					);
					echo $this->Html->link(
							$this->Html->image('desayuno07.png'),
							array('controller' => 'products', 'action' => 'index', 9),
							array('escape' => false, 'id' => 'desayuno04', 'class' => 'object static desayuno layer4', /*'title' => __('Pastries'), 'data-toggle' => 'tooltip', 'data-placement' => 'top',*/ 'data-xpos' => '37%', 'data-ypos' => '10px')
					);
					echo $this->Html->link(
							$this->Html->image('desayuno05.png'),
							'',
							array('escape' => false, 'id' => 'desayuno05', 'class' => 'object static desayuno layer3', 'data-xpos' => '60%', 'data-ypos' => '20px')
					);
					echo $this->Html->link(
							$this->Html->image('desayuno06.png'),
							array('controller' => 'products', 'action' => 'index', 7),
							array('escape' => false, 'id' => 'desayuno06', 'class' => 'object static desayuno layer4', /*'title' => __('Cookies'), 'data-toggle' => 'tooltip', 'data-placement' => 'top',*/ 'data-xpos' => '70%', 'data-ypos' => '0px')
					);
					echo $this->Html->link(
							$this->Html->image('desayuno02.png'),
							'',
							array('escape' => false, 'id' => 'desayuno07', 'class' => 'object static desayuno layer3', 'data-xpos' => '87%', 'data-ypos' => '25px')
					);
					echo $this->Html->link(
							$this->Html->image('desayuno01.png'),
							'',
							array('escape' => false, 'id' => 'desayuno08', 'class' => 'object static desayuno layer-1', 'data-xpos' => '30%', 'data-ypos' => '50px')
					);
					echo $this->Html->link(
							$this->Html->image('desayuno09.png'),
							'',
							array('escape' => false, 'id' => 'desayuno09', 'class' => 'object static desayuno layer2', 'data-xpos' => '89%', 'data-ypos' => '30px')
					);

        		?>
        		<!-- <a id="desayuno01" class="object desayuno layer1" data-xpos="0%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>desayuno03.png"></a> 
                <a id="desayuno02" class="object static desayuno layer2" data-xpos="23%" data-ypos="-15px"><img src="<?php echo $this->webroot.'img/';?>desayuno04.png"></a>
                <a id="desayuno03" class="object static desayuno layer3" data-xpos="4%" data-ypos="15px"><img src="<?php echo $this->webroot.'img/';?>desayuno08.png"></a>
                <a id="desayuno04" class="object static desayuno layer4" data-xpos="37%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>desayuno07.png"></a>
                <a id="desayuno05" class="object static desayuno layer3" data-xpos="60%" data-ypos="20px"><img src="<?php echo $this->webroot.'img/';?>desayuno05.png"></a>
                <a id="desayuno06" class="object static desayuno layer4" data-xpos="70%" data-ypos="0px"><img src="<?php echo $this->webroot.'img/';?>desayuno06.png"></a>
                <a id="desayuno07" class="object static desayuno layer3" data-xpos="87%" data-ypos="25px"><img src="<?php echo $this->webroot.'img/';?>desayuno02.png"></a>
                <a id="desayuno08" class="object static desayuno layer-1" data-xpos="30%" data-ypos="50px"><img src="<?php echo $this->webroot.'img/';?>desayuno01.png"></a>
				<a id="desayuno09" class="object static desayuno layer2" data-xpos="89%" data-ypos="30px"><img src="<?php echo $this->webroot.'img/';?>desayuno09.png"></a>-->
        		
                <a id="comida01" class="object static comida layer2" data-xpos="30%" data-ypos="10px"><img  src="<?php echo $this->webroot.'img/';?>comida01.png"></a>
                <a id="comida02" class="object static comida layer2" data-xpos="0%" data-ypos="5px"><img src="<?php echo $this->webroot.'img/';?>comida02.png"></a>
                <a id="comida03" class="object static comida layer3" data-xpos="18%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>comida03.png"></a>
                <a id="comida04" class="object static comida layer2" data-xpos="49%" data-ypos="50px"><img src="<?php echo $this->webroot.'img/';?>comida04.png"></a>
                <a id="comida05" class="object static comida layer3" data-xpos="85%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>comida05.png"></a>
                <a id="comida06" class="object static comida layer3" data-xpos="30%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>comida06.png"></a>
                <a id="comida07" class="object static comida layer2" data-xpos="52%" data-ypos="8px"><img src="<?php echo $this->webroot.'img/';?>comida07.png"></a>
                <a id="comida08" class="object static comida layer2" data-xpos="72%" data-ypos="30px"><img src="<?php echo $this->webroot.'img/';?>singluten03.png"></a>
                <a id="comida09" class="object static comida layer3" data-xpos="26%" data-ypos="15px"><img src="<?php echo $this->webroot.'img/';?>comida08.png"></a>
                <a id="comida10" class="object static comida layer-1" data-xpos="60%" data-ypos="40px"><img src="<?php echo $this->webroot.'img/';?>comida09.png"></a>
                            
				<a id="merienda01" class="object static merienda layer2" data-xpos="1%" data-ypos="2px"><img  src="<?php echo $this->webroot.'img/';?>merienda03.png"></a>
                <a id="merienda02" class="object static merienda layer4" data-xpos="19%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>cualquier02.png"></a>
                <a id="merienda03" class="object static merienda layer1" data-xpos="33%" data-ypos="40px"><img src="<?php echo $this->webroot.'img/';?>merienda02.png"></a>
                <a id="merienda04" class="object static merienda layer-1" data-xpos="20%" data-ypos="30px"><img src="<?php echo $this->webroot.'img/';?>comida09.png"></a>
                <a id="merienda05" class="object static merienda layer2" data-xpos="41%" data-ypos="-35px"><img src="<?php echo $this->webroot.'img/';?>merienda04.png"></a>
                <a id="merienda06" class="object static merienda layer3" data-xpos="45%" data-ypos="25px"><img src="<?php echo $this->webroot.'img/';?>merienda01.png"></a>
                <a id="merienda07" class="object static merienda layer3" data-xpos="56%" data-ypos="-10px"><img src="<?php echo $this->webroot.'img/';?>singluten06.png"></a>
                <a id="merienda08" class="object static merienda layer2" data-xpos="65%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>merienda05.png"></a>
                <a id="merienda09" class="object static merienda layer3" data-xpos="85%" data-ypos="-5px"><img src="<?php echo $this->webroot.'img/';?>cualquier09.png"></a>
                
        		<a id="cualquier-hora01" class="object static cualquier-hora layer1" data-xpos="20%" data-ypos="-10px"><img  src="<?php echo $this->webroot.'img/';?>singluten06.png"></a>
                <a id="cualquier-hora02" class="object static cualquier-hora layer4" data-xpos="12%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>cualquier02.png"></a>
                <a id="cualquier-hora03" class="object static cualquier-hora layer2" data-xpos="0%" data-ypos="15px"><img src="<?php echo $this->webroot.'img/';?>cualquier03.png"></a>
                <a id="cualquier-hora04" class="object static cualquier-hora layer3" data-xpos="36%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>cualquier04.png"></a>
                <a id="cualquier-hora05" class="object static cualquier-hora layer3" data-xpos="47%" data-ypos="15px"><img src="<?php echo $this->webroot.'img/';?>cualquier05.png"></a>
                <a id="cualquier-hora06" class="object static cualquier-hora layer3" data-xpos="25%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>cualquier06.png"></a>
                <a id="cualquier-hora07" class="object static cualquier-hora layer2" data-xpos="83%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>cualquier07.png"></a>
                <a id="cualquier-hora08" class="object static cualquier-hora layer1" data-xpos="42%" data-ypos="40px"><img src="<?php echo $this->webroot.'img/';?>singluten03.png"></a>
                <a id="cualquier-hora09" class="object static cualquier-hora layer1" data-xpos="67%" data-ypos="15px"><img src="<?php echo $this->webroot.'img/';?>cualquier08.png"></a>
                <a id="cualquier-hora08" class="object static cualquier-hora layer2" data-xpos="55%" data-ypos="0px"><img src="<?php echo $this->webroot.'img/';?>cualquier09.png"></a>
  
          		<a id="reposteria01" class="object static reposteria layer2" data-xpos="-4%" data-ypos="10px"><img  src="<?php echo $this->webroot.'img/';?>reposteria01.png"></a>
                <a id="reposteria02" class="object static reposteria layer4" data-xpos="15%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>reposteria02.png"></a>
                <a id="reposteria03" class="object static reposteria layer2" data-xpos="19%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>reposteria03.png"></a>
                <a id="reposteria04" class="object static reposteria layer1" data-xpos="43%" data-ypos="50px"><img src="<?php echo $this->webroot.'img/';?>reposteria04.png"></a>
                <a id="reposteria05" class="object static reposteria layer3" data-xpos="47%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>reposteria05.png"></a>
                <a id="reposteria06" class="object static reposteria layer-1" data-xpos="50%" data-ypos="0px"><img src="<?php echo $this->webroot.'img/';?>reposteria06.png"></a>
                <a id="reposteria07" class="object static reposteria layer2" data-xpos="52%" data-ypos="8px"><img src="<?php echo $this->webroot.'img/';?>reposteria07.png"></a>
                <a id="reposteria08" class="object static reposteria layer2" data-xpos="68%" data-ypos="30px"><img src="<?php echo $this->webroot.'img/';?>singluten03.png"></a>
                <a id="reposteria09" class="object static reposteria layer3" data-xpos="74%" data-ypos="5px"><img src="<?php echo $this->webroot.'img/';?>reposteria09.png"></a>
                <a id="reposteria10" class="object static reposteria layer1" data-xpos="78%" data-ypos="-20px"><img src="<?php echo $this->webroot.'img/';?>reposteria10.png"></a>
                
        		<a id="sin-gluten01" class="object static sin-gluten layer2" data-xpos="1%" data-ypos="0px"><img  src="<?php echo $this->webroot.'img/';?>singluten01.png"></a>
                <a id="sin-gluten02" class="object static sin-gluten layer4" data-xpos="20%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>singluten02.png"></a>
                <a id="sin-gluten03" class="object static sin-gluten layer1" data-xpos="29%" data-ypos="40px"><img src="<?php echo $this->webroot.'img/';?>singluten03.png"></a>
                <a id="sin-gluten04" class="object static sin-gluten layer3" data-xpos="26%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>singluten04.png"></a>
                <a id="sin-gluten05" class="object static sin-gluten layer2" data-xpos="42%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>singluten05.png"></a>
                <a id="sin-gluten06" class="object static sin-gluten layer1" data-xpos="61%" data-ypos="0px"><img src="<?php echo $this->webroot.'img/';?>singluten06.png"></a>
                <a id="sin-gluten07" class="object static sin-gluten layer3" data-xpos="68%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>singluten07.png"></a>
                <a id="sin-gluten08" class="object static sin-gluten layer2" data-xpos="76%" data-ypos="10px"><img src="<?php echo $this->webroot.'img/';?>singluten08.png"></a>
            </div>
        </div>                
    </div>
