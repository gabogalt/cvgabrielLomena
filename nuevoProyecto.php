<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
	<title>Proyecto Nuevo</title>

	<!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/modificaciones.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">

</head>
<?php 
session_start();
if (isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
	
	require_once('php/conexion.php');
    $idUsuario = $_SESSION['idUsuario'];
    
    
    
    $consulta2 = "SELECT usuario, foto from usuarios where id = '$idUsuario' ";
    $query2 = mysqli_query($conexion,$consulta2) or die (mysqli_error($conexion));
    $datosP = mysqli_fetch_array($query2) or die (mysqli_error($conexion));
	$usuario = $datosP['usuario'];
	$foto = $datosP['foto'];
	
	
	
	?>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> Lomeña Projects</a></h1>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link" href="index.php"><em class="fa fa-dashboard"></em> Inicio</a></li>
					<li class="nav-item"><a class="nav-link" href="proyecto.php"><em class="fa fa-calendar-o"></em> Proyectos</a></li>
					<li class="nav-item"><a class="nav-link active" href="nuevoProyecto.php"><em class="fa fa-pencil-square-o"></em> Nuevo Proyecto <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="perfil.php"><em class="fa fa-clone"></em> Perfil</a></li>
				</ul>
				
				</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Nuevo Proyecto</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo $foto; ?>" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1"><?php echo $usuario; ?></h4>
							<h6 class="text-muted">Administrador</h6>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
							 <a class="dropdown-item" href="logout.php"><em class="fa fa-power-off mr-1"></em> Cerrar Sesion</a></div>
					</div>
					<div class="clear"></div>
                </header>
                
                
				<section class="row ml-2" style="border: 1px solid #7F8C8D; width:98.5%">
                    
					<div class="col-sm-12">
						<section class="row">
							<div class="col-12">
								<div class="card mb-4">
									<div cla	ss="card-block">
										
										<form class="form" action="nuevoProyectoC.php" method="POST">
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Nombre del Proyecto</label>
												<div class="col-md-9">
													<input required type="text"  style="border: 1px solid #7F8C8D; width:98.5%" name="nombreProyecto" id="nombreProyecto" class="form-control" >
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Número de Orden</label>
												<div class="col-md-9">
													<input required class="form-control"  style="border: 1px solid #7F8C8D; width:98.5%" type="text" id="numeroOrden" name="numeroOrden">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Nombre y Apellido del Cliente</label>
												<div class="col-md-9">
													<input required class="form-control input_np"  style="border: 1px solid #7F8C8D; width:98.5%" id="nombreCliente" type="text" name="nombreCliente" >
												</div>
											</div>

											
											

											<div class="form-group row">
													<label class="col-md-3 col-form-label">Correo</label>
													<div class="col-md-9">
														<input required class="form-control" id="correo13" style="border: 1px solid #7F8C8D; width:98.5%" type="email" name="correo" >
													</div>
												</div>

												<div class="form-group row">
														<label class="col-md-3 col-form-label">Monto a cobrar </label>
														<div class="col-md-9">
															<input required class="form-control"  id="monto" style="border: 1px solid #7F8C8D; width:98.5%" type="text" name="monto" >
														</div>
													</div>
										
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Descripción del Proyecto</label>
												<div class="col-md-9">
													<textarea name="descripcionP" id="descripcionP"  style="border: 1px solid #7F8C8D; width:98.5%" class="form-control"></textarea>
													
												</div>
											</div>
                                            
                                            <div class="form-group row">
                                                    <div class="col-4"></div>
                                                 <div class="col-4"></div>
                                                <div class="col-4">
                                    
                                                 <button type="button" id="registrar" class="btn btn-primary btn-lg ml-5" style=" width: 80%">Enviar</button></div>
                                                        <!-- button -->
                                                    </div>
                                                </div>
											</div>
										</form>
									</div>
								</div>
                            </div>
                            
                            <section class="row mt-3     ml-2">
						
								<div style="width:17.5%" ></div>
                                <div class="  alert bg-warning  pl-3 " style="width: 81%; color:black" > Recuerde llenar cada uno de los campos.</div>
                                <!-- <div class=">  </div> -->
                                	
                        </section>
                        
                        </section>
                    
						
						
						
					</div>
				</section>
			</main>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
	<script src="js/funcionesP.js"></script>
<?php }else{

    header('Location:login.php');
} ?>
	</body>
</html>
