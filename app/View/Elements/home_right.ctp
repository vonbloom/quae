<?php if ($this->params['controller'] == 'contacts'): ?>
<address>
  <strong><?php echo $parameters['Parameter']['title'];?></strong>
  <?php echo $parameters['Parameter']['adress'];?>
  <a href="<?php echo $parameters['Parameter']['mail'];?>"><?php echo $parameters['Parameter']['mail'];?></a>
</address>
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $parameters['Parameter']['gmaps'];?>&amp;output=embed&iwloc=near"></iframe><br />
<small><a href="<?php echo $parameters['Parameter']['gmaps'];?>" target="_blank"><?php echo __('Show in a bigger map'); ?></a></small>
<?php elseif ($this->params['controller'] == 'releases' || $this->params['controller'] == 'posts' || $this->params['controller'] == 'products' || $this->params['controller'] == 'recipes'):?>


    <div class="row visible-lg visible-md">
		<ul class="nav selector col-lg-12 col-md-12">
		 <?php for ($i = 0; $i < count($pictures); $i++) : ?>
                <li>
				<?php
					$class = isset($this->params['pass'][0]) && $this->params['pass'][0] == Inflector::slug($pictures[$i]['Picture']['url'], '-') ? Inflector::slug($pictures[$i]['Picture']['url'], '-').' active' : Inflector::slug($pictures[$i]['Picture']['url'], '-');
	
	                echo $this->Html->link(
	                	str_replace("-", " ", ucfirst($pictures[$i]['Picture']['url'])),
	                    array('controller' => 'products', 'action' => 'show', Inflector::slug($pictures[$i]['Picture']['url'], '-')),
	                    array('class' => $class, 'data-rel' => Inflector::slug($pictures[$i]['Picture']['url'], '-'), 'data-order' => $i+1)
	                );
				?>
                </li>
		<?php endfor;?>
		</ul>
    <?php if ($this->params['action'] == 'show'):?>
    <div class="col-lg-12 col-md-12">
    <?php
    foreach ($pictures as $picture) {
		if (Inflector::slug($picture['Picture']['url'], '-') == $this->params['pass'][0]) {
		    echo $this->Html->link(
		    		str_replace("-", " ", ucfirst($picture['Picture']['text'])),
		    		array('controller' => 'products', 'action' => 'index'),
		    		array('class' => $this->params['pass'][0])
		    );
		}
	}
	?>
    </div>
    <?php endif;?>
</div>
<?php else:?>
<!-- <a class="twitter-timeline" href="https://twitter.com/elhornodelenaSA" data-widget-id="306383626558382080">Tweets by @elhornodelenaSA</a> -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- <div class="fb-like-box" data-href="https://www.facebook.com/pages/El-Horno-de-Le%C3%B1a/263120387056033" data-width="360" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div> -->
<?php endif; ?>
