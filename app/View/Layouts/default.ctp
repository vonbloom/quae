<?php

$cakeDescription = $parameters['Parameter']['title'];
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
		
		echo $this->Html->css('main');

		echo $this->Html->css('http://fonts.googleapis.com/css?family=Titillium+Web:400,300,200,600,700,900,300italic,400italic,600italic');
	?>

	<!-- Javascript -->
	<?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js'); ?>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
	
	<?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js'); ?>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-ui-1.10.3.custom.min.js"><\/script>')</script>
	
	<?php echo $this->Html->script('vendor/modernizr-2.6.2.min'); ?>
</head>	

<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->	
   
   <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ca_ES/all.js#xfbml=1&appId=281439278549063";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
   

	<?php echo $this->element('header'); ?>
		
	<?php echo $this->element('slide'); ?>
			
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>	           
	        </div>
			<?php //echo $this->element('blogs'); ?>
	    </div> <!-- /container -->
	</div>
		
	<?php echo $this->element('footer'); ?>
	
	<!-- Javascript -->
	<?php echo $this->Html->script('vendor/bootstrap.min.js'); ?>
	<?php echo $this->Html->script('plugins.js'); ?>
	<?php echo $this->Html->script('main.js'); ?>
	
	
	<?php //echo $this->element('sql_dump'); ?>
    <?php //debug ($defLang = $this->session->read('Config.language'));?>
	<?php //debug ($activeLang);?>
	<?php //debug ($this->Session->read('Config.language'));?>
    <?php //debug ($this->params);?>
    <?php //debug ($menu);?>
	</body>
</html>
