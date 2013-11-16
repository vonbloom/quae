<?php

$cakeDescription = __('El Horno de Leña');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<?php echo $this->Html->charset(); ?>
	<?php echo $this->Html->meta(array('http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1')); ?>
	<title>
		<?php echo $cakeDescription; ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php echo $this->Html->meta(array('name' => 'description', 'content' => '')); ?>
	<?php echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width')); ?>
	<?php echo $this->Html->meta(array('name' => 'robots', 'content' => 'noindex')); ?>
		
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		//echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('flat/red');
		echo $this->Html->css('main');

		echo $this->Html->css('http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600');
		
// 		echo $this->fetch('meta');
// 		echo $this->fetch('css');
// 		echo $this->fetch('script');
	?>

	<!-- Javascript -->
	<?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'); ?>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	
	<?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js'); ?>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-ui-1.10.3.custom.min.js"><\/script>')</script>
	
	<?php echo $this->Html->script('vendor/modernizr-2.6.2.min'); ?>
</head>	

<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->	

	<?php echo $this->element('header'); ?>
	
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<article>
						<?php echo $this->element('accordion'); ?>
					</article>
				</div>	
				<div class="col-lg-9 col-md-8">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>	
				</div>
        </div> <!-- /container -->
    </div>
    
    <footer class="sub hidden-phone">
        <div class="container">
	        <div class="row">			
	            <div class="span12">
	                <div class="row">
	    				<?php echo $this->element('shortcuts', array('elements' => 3)); ?>
					</div>
				</div>
			</div>
    	</div>
	</footer>
    <?php echo $this->element('footer'); ?>
	
	<!-- Javascript -->
	<?php echo $this->Html->script('vendor/jquery.mobile.custom.min.js'); ?>
	<?php echo $this->Html->script('vendor/bootstrap.min.js'); ?>
	<?php echo $this->Html->script('vendor/jquery.icheck.min.js'); ?>
	<?php echo $this->Html->script('plugins.js'); ?>
	<?php echo $this->Html->script('functions.js'); ?>
	<?php echo $this->Html->script('main.js'); ?>
	
	
	<?php //echo $this->element('sql_dump'); ?>
	    
    <?php //debug ($product);?>
	<?php //debug ($locale = Configure::read('Config.language'));?>
	<?php //debug($this->params);?>
	
    
</body>
</html>
