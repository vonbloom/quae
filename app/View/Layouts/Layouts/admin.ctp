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
		echo $this->Html->css('bootstrap-fileupload.min');
		echo $this->Html->css('bootstrap-datetimepicker.min');
		echo $this->Html->css('flags');
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

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <ul class="nav navbar-nav">
		    <li><?php echo $this->Html->link(__('Home'), array('controller' => 'users', 'action' => 'dashboard', 'admin' => true));?></li>
		    <li<?php if ($this->params['controller'] == 'options') echo ' class="active"';?>><?php echo $this->Html->link(__('Configuration'), array('controller' => 'options', 'action' => 'index', 'admin' => true));?></li>
		    <!-- <li<?php if ($this->params['controller'] == 'files') echo ' class="active"';?>><?php echo $this->Html->link(__('File manager'), array('controller' => 'files', 'action' => 'index', 'admin' => true));?></li> -->
	    </ul>
	    
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php echo $userName;?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li>
						<?php echo $this->Html->link(
								$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-wrench')).' '.__('Preferences'),
								array('controller' => 'users', 'action' => 'logout', 'admin' => true),
								array('escape' => false)
						); ?>
					</li>
					<li>
						<?php echo $this->Html->link(
								$this->Html->tag('i', '', array('class' => 'glyphicon 	glyphicon-off')).' '.__('Log Out'),
								array('controller' => 'users', 'action' => 'logout', 'admin' => true),
								array('escape' => false)
						); ?>
					</li>
				</ul>
			</li>
		</ul>		    
	</nav>
	

	<div class="content">
		<div class="col-lg-3">
			<?php echo $this->element('admin_menu'); ?>
			<?php echo $this->element('options_menu'); ?>
		</div>
		<div class="col-lg-9">
			<?php echo $this->element('admin_actions'); ?>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<footer>
	
	</footer>
	
<script>
	$(document).ready(function(){
		$('.nav-tabs li a').click(function(){
			$('.nav-tabs li').removeClass('active');
			$(this).parent().addClass('active');
			$('.i18n').addClass('hidden');
			$('.input.text.'+$(this).attr('id')).removeClass('hidden');
		});

		
	});
</script>

	
	<?php echo $this->Html->script('vendor/jquery.mobile.custom.min'); ?>
	<?php echo $this->Html->script('vendor/bootstrap.min'); ?>
	<?php //echo $this->Html->script('vendor/bootstrap-fileupload.min'); ?>
	<?php echo $this->Html->script('vendor/bootstrap-datetimepicker'); ?>
	<?php echo $this->Html->script('plugins'); ?>
	<?php echo $this->Html->script('admin'); ?>


	<?php //echo $this->element('sql_dump'); ?>
	<?php //debug ($langCodes); ?>
	<?php //debug ($this->here); ?>
	<?php //debug ($_SERVER['HTTP_ACCEPT_LANGUAGE']);?>
	<?php //debug ($_SESSION);?>
	<?php //debug ($locale = Configure::read('Config.language'));?>
	
</body>
</html>
