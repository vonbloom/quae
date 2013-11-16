<?php if(isset($this->params['pass'][0]) && $this->params['pass'][0] == 'home'):?>
<div id="slide-home" class="carousel slide">
	<div class="container elements">
	    <div class="row">    
			<?php echo $this->element('fastform'); ?>
		
		    <!-- Indicators -->
			<ol class="carousel-indicators">
			<?php for($i=0; $i<count($pictures); $i++):?>
			<li data-target="#slide-home" data-slide-to="<?php echo $i;?>"<?php echo ($i==0)?' class="active"':'';?>></li>
			<?php endfor;?>
			</ol>                
		</div>
	</div>
	
	
	<!-- Wrapper for slides -->
	<div class="carousel-inner visible-lg visible-md">
		<?php for($i=0; $i<count($pictures); $i++):?>
		<div class="item<?php echo ($i==0)?' active':'';?>" style="background-image: url(uploads/images/<?php echo $pictures[$i]['Picture']['filename']; ?>)">
			<?php //echo $this->Html->image('/uploads/images/'.$pictures[$i]['Picture']['filename']);?>
			<div class="carousel-caption">
				<div class="container">
					<div class="row">
            		<p class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4"><?php echo $pictures[$i]['Picture']['text']; ?></p>
            		</div>
            	</div>
			</div>
		</div>
		<?php endfor;?>
	</div>	
</div>

<script>
	$(document).ready(function() {
		$('#slide-home').carousel({
			interval: 5000,
			pause: 'hover'
		});
	});
</script>

<?php elseif($this->params['controller'] == 'bookings'):?>
    <div id="slide-home">
    	<div class="container elements visible-lg visible-md">
		    <div class="row">    
				<?php echo $this->element('fastform'); ?>
			</div>
		</div>
    
        <div class="filter">
        	<div class="top visible-lg visible-md">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="nav col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6">
                                <h2>Elige tu vehículo</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                            </div>
                            <div class="nav col-lg-5 col-md-5 col-sm-6">
                                <h2>Elige tu seguro</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                <p><a class="btn btn-success" href="#">TODO RIESGO<br />CON FRANQUICIA</a>
                                <a class="btn btn-success" href="#">TODO RIESGO<br />SIN FRANQUICIA</a></p>
                            </div>
                        </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
	                        <div class="row buttons">
	                            <form>
	                                <ul class="nav col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3">
	                                    <li class="nav-header">Turismo</li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox"> Mini</label>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox"> Standard</label>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label> <input type="checkbox"> Compacto</label>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox"> Berlina</label>
	                                        </div>
	                                    </li>
	                                </ul>
	                                <ul class="nav col-lg-3 col-md-3  col-sm-3">
	                                    <li class="nav-header">Monovolúmen</li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox">6 plazas</label>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox">9 plazas</label>
	                                        </div>
	                                    </li>
	                                </ul>
	                                <ul class="nav col-lg-3 col-md-3 col-sm-3">
	                                    <li class="nav-header">Furgoneta</li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox">A1</label>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox">A2</label>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label> <input type="checkbox">B1</label>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox">B2</label>
	                                        </div>
	                                    </li>
	                                </ul>
	                                <ul class="nav col-lg-2 col-md-2 col-sm-3">
	                                    <li class="nav-header">Alta gama</li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox"> Mini</label>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox"> Standard</label>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label> <input type="checkbox"> Compacto</label>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="checkbox">
	                                            <label><input type="checkbox"> Berlina</label>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </form>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php elseif($this->params['controller'] == 'cars'):?>
    <div id="slide-home">
       	<div class="container elements">
		    <div class="row">    
				<?php echo $this->element('fastform'); ?>
			</div>
		</div>
    
    	<div class="filter">
        	<div class="top visible-lg visible-md">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
                            <div class="row">
                                <h2 class="col-lg-12 col-md-12 col-sm-12">Flota de vehículos</h2>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 visible-lg visible-md">
                                    <ul>
                                        <li>Lorem ipsum dolor</li>
                                        <li>Sit amet consectetuer</li>
                                        <li>Adipiscing elit. Donec odio</li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
                            <div class="row buttons">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <button class="active">TURISMO<img src="img/turisme.png"/></button>
                                    <span class="arrow-up"></span>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <button>MONOVOLUMEN<img src="img/monovolum.png"/></button>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <button>FURGONETA<img src="img/furgo.png"/></button>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <button>GAMA ALTA<img src="img/gamaalta.png"/></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
<?php elseif($this->params['controller'] == 'bonds'):?>
    <div id="slide-home">
       	<div class="container elements">
		    <div class="row">    
				<?php echo $this->element('fastform'); ?>
			</div>
		</div>
    
    	<div class="filter">
        	<div class="top visible-lg visible-md">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
                            <div class="row">
                                <h2 class="col-lg-12 col-md-12 col-sm-12">Flota de vehículos</h2>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 visible-lg visible-md">
                                    <ul>
                                        <li>Lorem ipsum dolor</li>
                                        <li>Sit amet consectetuer</li>
                                        <li>Adipiscing elit. Donec odio</li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
                            <div class="row buttons">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <button class="active"><img src="img/bono-10.png"/></button>
                                    <span class="arrow-up"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <button><img src="img/bono-20.png"/></button>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <button><img src="img/bono-30.png"/></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
<?php endif;?>