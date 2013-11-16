  <?php

$cakeDescription = __('HLT | Admin');
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
		echo $this->Html->css('admin');
	?>
	<!-- Javascript -->
	<?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'); ?>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	
	<?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js'); ?>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-ui-1.10.3.custom.min.js"><\/script>')</script>
	
	<?php echo $this->Html->script('vendor/modernizr-2.6.2.min'); ?>
	
</head>	

<body>

	<div class="container login">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4  col-md-4 col-md-offset-4">
				<?php echo $this->fetch('content'); ?>
				<?php echo $this->Session->flash();?>
				</div>
		</div>
	</div>
	
	<?php echo $this->Html->script('vendor/jquery.mobile.custom.min'); ?>
	<?php echo $this->Html->script('vendor/bootstrap.min'); ?>
	<?php echo $this->Html->script('plugins'); ?>
	<?php echo $this->Html->script('admin'); ?>


	<?php //echo $this->element('sql_dump'); ?>
	<?php //debug ($this->params); ?>
	<?php //debug ($sections); ?>
	<?php //debug ($works); ?>
	<?php //debug ($_SERVER['HTTP_ACCEPT_LANGUAGE']);?>
	<?php //debug ($_SESSION);?>
	<?php //debug ($locale = Configure::read('Config.language'));?>
</body>
</html>
