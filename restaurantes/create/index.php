<!DOCTYPE html>
<html  lang="es">
  <head>
	<title>Panel Deli</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
		<link href="../../css/styles.css" rel="stylesheet">
		<link href="../../css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Panel de Administración Deli</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="login.html">Cerrar Sesión</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="/"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
                    <li class="current"><a href="../../restaurantes"><i class="glyphicon glyphicon-pencil"></i> Restaurantes</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="content-box-large">
				<div class="panel-heading">
					  <div class="panel-title">Información del Restaurante</div>
				</div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="restName" class="col-sm-2 control-label">Nombre:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="restName" placeholder="Nombre">
								    </div>
								  </div>
									<div class="form-group">
								    <label for="restCat" class="col-sm-2 control-label">Categoria:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="restCat" placeholder="Categoria">
								    </div>
									</div>
									<div class="form-group">
								    <label for="restZone" class="col-sm-2 control-label">Zona:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="restZone" placeholder="Zona">
								    </div>
									</div>									
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Dirección:</label>
								    <div class="col-sm-10">
								      <textarea id="restAddr" class="form-control" placeholder="Direccion" rows="3"></textarea>
								    </div>
									</div>
									<div class="form-group">
								    <label for="restTcom" class="col-sm-2 control-label">Tipo de comida:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="restTcom" placeholder="Tipo">
								    </div>
									</div>
									<div class="form-group">
								    <label for="restPrice" class="col-sm-2 control-label">Precio:</label>
								    <div class="col-sm-10">
								      <input type="number" class="form-control" min="1" id="restPrice" placeholder="$">
								    </div>
									</div>
									<div class="form-group">
								    <label class="col-sm-2 control-label">Incluye:</label>
								    <div class="col-sm-10">
								      <textarea id="restInclu" class="form-control" placeholder="Incluye" rows="3"></textarea>
								    </div>
									</div>
									<div class="form-group">
								    <label class="col-sm-2 control-label">Introducción:</label>
								    <div class="col-sm-10">
								      <textarea id="restIntro" class="form-control" placeholder="Introducción" rows="3"></textarea>
								    </div>
									</div>
									<div class="form-group">
								    <label class="col-sm-2 control-label">Parrafo 1:</label>
								    <div class="col-sm-10">
								      <textarea id="restP1" class="form-control" placeholder="Parrafo 1" rows="3"></textarea>
								    </div>
									</div>
									<div class="form-group">
								    <label class="col-sm-2 control-label">Parrafo 2:</label>
								    <div class="col-sm-10">
								      <textarea id="restP2" class="form-control" placeholder="Parrafo 2" rows="3"></textarea>
								    </div>
									</div>
									<div class="form-group">
								    <label class="col-sm-2 control-label">Parrafo 3:</label>
								    <div class="col-sm-10">
								      <textarea id="restP3" class="form-control" placeholder="Parrafo 3" rows="3"></textarea>
								    </div>
									</div>
									<div class="form-group">
											<label class="col-md-2 control-label">Logo</label>
											<div class="col-md-10">
												<input type="file" class="btn btn-default" id="restLogo">
												<p class="help-block">
													qwerty
												</p>
											</div>
									</div>
									<div class="form-group">
											<label class="col-md-2 control-label">Imagen Principal</label>
											<div class="col-md-10">
												<input type="file" class="btn btn-default" id="restImgp">
												<p class="help-block">
													qwerty
												</p>
											</div>
									</div>
									<div class="form-group">
								    <label for="restVideo" class="col-sm-2 control-label">Link Video</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="restVideo" placeholder="Video">
								    </div>
									</div>
									<div class="form-group">
											<label class="col-md-2 control-label">Imagen 2</label>
											<div class="col-md-10">
												<input type="file" class="btn btn-default" id="restImg2">
												<p class="help-block">
													qwerty
												</p>
											</div>
									</div>
									<div class="form-group">
											<label class="col-md-2 control-label">Imagen 3</label>
											<div class="col-md-10">
												<input type="file" class="btn btn-default" id="restImg3">
												<p class="help-block">
													qwerty
												</p>
											</div>
									</div>
									<div class="form-group">
								    <label class="col-sm-2 control-label">Frase:</label>
								    <div class="col-sm-10">
								      <textarea id="restFrase" class="form-control" placeholder="Frase" rows="3"></textarea>
								    </div>
									</div>
									<div class="form-group">
								    <label class="col-sm-2 control-label">Editorial:</label>
								    <div class="col-sm-10">
								      <textarea id="restEdit" class="form-control" placeholder="Editorial" rows="3"></textarea>
								    </div>
									</div>
									<div class="form-group">
											<label class="col-md-2 control-label">Logo Editorial</label>
											<div class="col-md-10">
												<input type="file" class="btn btn-default" id="restLogoEdit">
												<p class="help-block">
													qwerty
												</p>
											</div>
									</div>
									<div class="form-group">
								    <label class="col-sm-2 control-label">Sugeridos:</label>
								    <div class="col-sm-10">
								      <textarea id="restSug" class="form-control" placeholder="Sugeridos" rows="3"></textarea>
								    </div>
									</div>
									<div class="form-group">
								    <label for="restCoord" class="col-sm-2 control-label">Coordenadas</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="restCoord" placeholder="Coordenadas">
								    </div>
									</div>
									<div class="form-group">
								    <label for="restOrdDeli" class="col-sm-2 control-label">Ordenes Deli:</label>
								    <div class="col-sm-10">
								      <input type="number" class="form-control" min="0" id="restOrdDeli" placeholder="#">
								    </div>
									</div>
									<div class="form-group">
								    <label for="restOrdAdi" class="col-sm-2 control-label">Ordenes Adicionales:</label>
								    <div class="col-sm-10">
								      <input type="number" class="form-control" min="0" id="restOrdAdi" placeholder="#">
								    </div>
									</div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
										<button class="btn btn-primary" type="submit">
													<i class="fa fa-save"></i>
													Submit
												</button>
								    </div>
								  </div>
								</form>
			  				</div>
		  	</div>
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
            <div class="copy text-center">
               Copyright 2017 <a href='#'>Deli</a>
            </div>    
         </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/custom.js"></script>
  </body>
</html>