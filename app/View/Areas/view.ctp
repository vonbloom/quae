<div class="tape">
                <!-- Section #1 -->
                <section id="intro" class="open" data-speed="4" data-type="background" style="background-image:url(<?php echo $this->webroot.'img/bg-'.Inflector::slug(strtolower($area['Area']['name']), '-').'.jpg';?>)">
                    <header>
                        <?php echo $this->Html->image('logo-'.Inflector::slug(strtolower($area['Area']['name']), '-').'.png');?>
                        <h1><?php echo $area['Area']['title'];?></h1>
                    </header>
                    <article>
                        <div>
                        	<?php echo $area['Area']['text']?>
                        </div>
                        <a href="#about" class="btn"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </article>
                    <div class="player">
                    	<?php if(!empty($area['Area']['vimeo'])):?>
                        <iframe src="//player.vimeo.com/video/<?php echo $area['Area']['vimeo'];?>?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ee1111&amp;loop=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <?php endif;?>
                    </div>
                </section>
                                
                <!-- Section #2 -->
                <section id="about" class="open">
					<div class="bar transparent">
                        <?php echo $this->Html->image('logo-'.Inflector::slug(strtolower($area['Area']['name']), '-').'-s.png');?>
                        <h3><?php echo __('Our Filosophy')?></h3>
                        <a href="#works" class="btn pull-left"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>

                    <ul class="grid">
<!--                     	<li class="cell highlight">  
                        	<?php echo $this->Html->image('logo-'.Inflector::slug(strtolower($area['Area']['name']), '-').'-bar.png');?>
                         </li> 
                         <li class="cell text">                        	 
                        	<?php echo $this->Html->image('logo-box.jpg');?>
                         </li> 
                         <li class="cell"> 
                        	<?php echo $this->Html->image('logo-box.jpg');?>
                         </li> -->
                        <li class="cell highlight">
                        	<h2><?php echo $area['Area']['subtitle1']?></h2>
                        </li>
                        <li class="cell big">
                        	<?php echo $this->Html->image(Inflector::slug(strtolower($area['Area']['name']), '-').'-box01.png');?>
                        </li>
                        <li class="cell text">
                        	<?php echo $area['Area']['text2']?>
                        </li>
<!--                     	<li class="cell highlight">  
                        	<h2><?php echo $area['Area']['subtitle2']?></h2>                       	
                         </li> 
                         <li class="cell text">                        	 
                        	<p><?php echo $area['Area']['text3']?></p>
                         </li> 
                         <li class="cell logo"> 
                        	<?php echo $this->Html->image('logo-'.Inflector::slug(strtolower($area['Area']['name']), '-').'-bar.png');?>
                         </li> -->
                        <li class="cell big">
                        	<?php echo $this->Html->image(Inflector::slug(strtolower($area['Area']['name']), '-').'-box02.png');?>
                        </li>
                        <li class="cell highlight">
                        	<h2><?php echo $area['Area']['subtitle2']?></h2>
                        </li>
                        <li class="cell text">
                        	<?php echo $area['Area']['text3']?>
                        </li>
                    </ul>
                </section>
                                
                <!-- Section #3 -->
                <section id="works" class="open">
					<div class="bar">
                        <?php echo $this->Html->image('logo-'.Inflector::slug(strtolower($area['Area']['name']), '-').'-s.png');?>
                        <h3><?php echo __('Our Works')?></h3>
                        <a href="#intro" class="btn pull-left"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    </div>

                    <ul class="grid">               	
                    	<?php for($i=0; $i<count($area['Work']); $i++):?>
                        <li class="cell<?php echo ($i == 0 || $i == 7 || $i % 12 == 0) ? ' big' : '';?>"> 
                       		<?php
                       			echo $this->Html->link(
                       				$this->Html->image('/uploads/images/'.$area['Work'][$i]['filename']),
									array('controller' => 'works', 'action' => 'view', $area['Work'][$i]['url']),
									array('escape' => false)
								);
							?>
                        </li>
                        <?php endfor;?>
                    </ul>
                </section>
            </div>


        <script>
			$(window).load(function() {
				$('.loading').hide(100,function(){
					$('.tape').fadeIn(500);
				});
			});		
        </script>

        <?php //debug($area);?>
        <?php //debug ($this->params);?>