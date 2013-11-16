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
        <div class="col-lg-12 col-md-12">
        <ol class="breadcrumb">
            <li><a href="#">Turismos</a></li>
            <li class="active">Todos</li>
        </ol>
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
        	<?php foreach($results as $result):?>
        	<tr>
                <td class="text-center"><img src="img/<?php echo $result['cat'];?>.png" /></td>
                <td>
                	<h3><?php echo $result['cat'];?></h3>
                    <p><?php echo $result['car'];?></p>
                </td>
                <td>
                <label>Km</label>
                <select>
                	<option>100</option>
                    <option>150</option>
                    <option>200</option>
                </select>
                </td>
                <td>
                <label>Seguro</label>
                <select>
                	<option>Todo riesgo</option>
                    <option>Franquicia 200</option>
                    <option>Franquicia 300</option>
                </select>
				</td>
                <td>
                <label>Precio</label>
                <span class="badge"><?php echo $result['price'];?>€</span>
                </td>
                <td class="text-center"><button type="submit" class="btn btn-success">Reservar</button></td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
</div>