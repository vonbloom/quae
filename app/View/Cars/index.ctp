<?php 
$results = array(
		array('id'=>1, 'cat'=>'mini', 'car'=>'Volkswagen up!', 'price'=>36),
		array('id'=>2, 'cat'=>'mini', 'car'=>'Volkswagen up!', 'price'=>42),
		array('id'=>3, 'cat'=>'standard', 'car'=>'Volkswagen up!', 'price'=>55),
		array('id'=>4, 'cat'=>'standard', 'car'=>'Volkswagen up!', 'price'=>61),
		array('id'=>5, 'cat'=>'standard', 'car'=>'Volkswagen up!', 'price'=>78),
		array('id'=>6, 'cat'=>'compacto', 'car'=>'Volkswagen up!', 'price'=>87),
		array('id'=>7, 'cat'=>'compacto', 'car'=>'Volkswagen up!', 'price'=>93),
		array('id'=>8, 'cat'=>'compacto', 'car'=>'Volkswagen up!', 'price'=>120),
		array('id'=>9, 'cat'=>'berlina', 'car'=>'Volkswagen up!', 'price'=>132),
		array('id'=>10, 'cat'=>'berlina', 'car'=>'Volkswagen up!', 'price'=>147),		
);
?>
    <div class="content container">
      <div class="row">
        <ul class="nav nav-pills col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
            <li class="active"><a href="#">Mini</a></li>
            <li><a href="#">Standard</a></li>
            <li><a href="#">Compacto</a></li>
            <li><a href="#">Berlina</a></li>
        </ul>
	</div>
    <hr />

        <?php foreach($results as $result):?>
        <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
           	  <img src="img/<?php echo $result['cat']?>.png" />
            </div>
            <div class="col-lg-3 col-md-3">
            	<h3>Turismo <?php echo $result['cat']?></h3>
                <p><?php echo $result['car']?></p>
            	<h5>Especificaciones</h5>
                <ul class="nav">
                    <li>4/5 puertas</li>
                    <li>Ocupación 1/2 maletas</li>
                    <li>Isofix</li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-5">
                <table class="table table-bordered table-striped specs">
                    <thead>
                        <tr>
                            <th></th>
                            <th colspan="2">Todo riesgo con franquicia</th>
                            <th colspan="2">Todo riesgo sin franquicia</th>
                        </tr>
                        <tr>
                            <th>Precio/día</th>
                            <th>100 Km/día</th>
                            <th>300 Km/día</th>
                            <th>100 Km/día</th>
                            <th>300 Km/día</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1 - 1</td>
                            <td>1 - 2</td>
                            <td>1 - 3</td>
                            <td>1 - 4</td>
                            <td>1 - 5</td>
                        </tr>
                        <tr>
                            <td>1 - 10</td>
                            <td>2 - 20</td>
                            <td>3 - 30</td>
                            <td>4 - 40</td>
                            <td>5 - 50</td>
                        </tr>
                        <tr>
                            <td>10 - 1</td>
                            <td>10 - 2</td>
                            <td>10 - 3</td>
                            <td>10 - 4</td>
                            <td>10 - 5</td>
                        </tr>
                        <tr>
                            <td>10 - 10</td>
                            <td>10 - 10</td>
                            <td>10 - 10</td>
                            <td>10 - 10</td>
                            <td>10 - 10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endforeach;?>
</div>