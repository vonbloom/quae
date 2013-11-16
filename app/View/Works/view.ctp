        	<div class="tape vertical">
                <section id="<?php echo Inflector::slug(strtolower($work['Area']['name']), '-');?>" class="folio active <?php echo Inflector::slug(strtolower($work['Area']['name']), '-');?>">
					<div class="bar hidden-xs">
						<?php echo $this->Html->image('logo-'.Inflector::slug(strtolower($work['Area']['name']), '-').'-bar.png');?>
                        <h3><?php echo $work['Area']['name']?></h3>
                    </div>
                    <div class="detail">
                    	<h2><?php echo $work['Work']['name']?></h2>
                        <p><?php echo $work['Work']['text']?></p>
                        <?php
                        foreach($work['Picture'] as $picture):
                        	echo $this->Html->image('/uploads/images/'.$picture['filename'], array('class' => 'picture'));
                        endforeach;
                        
                        echo $this->Html->link(_('Go Back'), array('controller' => 'works', 'action' => 'index'), array('class' => 'btn btn-lg'));
                        ?>
                    </div>
                </section>
            </div>
            
        <script> 
	        $(window).load(function() {
				$('.loading').hide(100,function(){
					$('.tape').fadeIn(500<?php if (isset ($_GET['cat'])) echo ", function(){ $('#".$_GET['cat']." .bar').click();}" ;?>);
				});
			});		
        </script>
            
            
            <?php //debug($work);?>