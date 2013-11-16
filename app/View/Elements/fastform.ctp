                <div class="col-lg-4 col-md-4">
                    <div class="fastform">
                        <a href="index.php"><img src="img/logo.jpg" alt="..."></a>
                        <form class="form" action="index.php?sec=reservas" method="post">                    	
                            <div class="form-group">
                                <label for="cat">Tipo de vehículo</label>
                                <select id="cat" name="cat" class="form-control input-sm">
                                    <option value="0">Turismo</option>
                                    <option value="1">Monovolumen</option>
                                    <option value="2">Furgoneta</option>
                                    <option value="3">Gama alta</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="dateIn">Fecha recogida</label>
                                        <select id="dateIn" name="dateIn" class="form-control input-sm">
                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="dateOut">Fecha entrega</label>
                                        <select id="dateOut" name="dateOut" class="form-control input-sm">
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">RESERVAR AHORA</button>
                        </form>
                        <form class="form" action="index.php?sec=login" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" placeholder="Contraseña" class="form-control input-sm">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success pull-left">ENVIAR</button>
                            <p class="pull-left">¿No eres usuario? <a href="#" class="btn btn-link">Regístrate</a></p>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
                