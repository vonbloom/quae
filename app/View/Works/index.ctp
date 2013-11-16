        	<div class="tape">
				<?php foreach($areas as $area):?>
                <section id="<?php echo Inflector::slug(strtolower($area['Area']['name']), '-');?>" class="folio <?php echo Inflector::slug(strtolower($area['Area']['name']), '-');?>">
					<div class="bar clickable">
                        <img src="img/logo-<?php echo Inflector::slug(strtolower($area['Area']['name']), '-');?>-bar.png">
                        <h3><?php echo $area['Area']['name']?></h3>
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
                <?php endforeach;?>

            </div>
        
         <script> 
        $(window).load(function() {
			$('.loading').hide(100,function(){
				$('.tape').fadeIn(500<?php if (isset ($_GET['cat'])) echo ", function(){ $('#".$_GET['cat']." .bar').click();}" ;?>);
			});

			// Always scroll horizontal
			$('.content').mousewheel(function(event, delta) {
				this.scrollLeft -= (delta * 30);
				event.preventDefault();
			});
		});		
        </script>
        
        <?php //debug($areas);?>
        <?php //debug ($this->viewVars['langCodes']);?>
        
        