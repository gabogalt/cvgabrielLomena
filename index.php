<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
	<meta name="author" content="">
	<title>Inicio</title>

    <!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">

	

	
	
    
</head>
<?php
session_start();
if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
	
	require_once('php/conexion.php');
    $idUsuario = $_SESSION['idUsuario'];
    
    
    
    $consulta2 = "SELECT usuario, foto from usuarios where id = '$idUsuario' ";
    $query2 = mysqli_query($conexion,$consulta2) or die (mysqli_error($conexion));
    $datosP = mysqli_fetch_array($query2) or die (mysqli_error($conexion));
	$usuario = $datosP['usuario'];
	$foto = $datosP['foto'];

	$consulta = " SELECT * from descripcion_proyecto where idUsuario ='$idUsuario' ";
	$query = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
	
	?>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> Lomeña    Projects</a></h1>
													
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="index.php"><em class="fa fa-dashboard"></em> Inicio <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="proyecto.php"><em class="fa fa-calendar-o"></em> Proyectos</a></li>
					<li class="nav-item"><a class="nav-link" href="nuevoProyecto.php"><em class="fa fa-pencil-square-o"></em> Nuevo Proyecto</a></li>
					<li class="nav-item"><a class="nav-link" href="perfil.php"><em class="fa fa-clone"></em> Perfil</a></li>
				</ul>
				

			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Inicio</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo $foto; ?>" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1"><?php echo $usuario; ?></h4>
							<h6 class="text-muted">Administrador</h6>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
						     <a class="dropdown-item" href="logout.php"><em class="fa fa-power-off mr-1"></em> Cerrar Sesión</a></div>
					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-md-12 col-lg-8">
								<div class="jumbotron ">
									<h1 class="mb-4 ">Bienvenidos</h1>
									<p class="lead justify-center"> Estimada o estimado visitante,
										

										me complace darle la más cordial bienvenida al sitio web de Administración de Proyectos y Clientes.
										


									</div>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Descripcion de Proyectos</h3>
										<h6 class="card-subtitle mb-2 text-muted"><a href="nuevoProyecto.php">Nuevo Proyecto</a></h6>
										
										<div class="divider" style="margin-top: 1rem;"></div>
										<div class="articles-container">
											<div class="article border-bottom">
												<div class="col-xs-12">
													<div class="row">
														<?php
														while($objeto = mysqli_fetch_array($query)){?>
														<div class="col-12 justify-conten">
															<h4><a href="#"><?php echo $objeto['nombreProyecto'];?> </a></h4>
															 <p><?php echo $objeto['descripcionP']; ?>.</p>
														</div>
														<div class="divider"></div>

														<?php } ?>
														
													</div>
												</div>
											<div class="clear"></div>
										</div>
											
										
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card mb-4">
								
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Lista de Tareas pendientes</h3>
									
										

										<?php 
										$consulta = " SELECT * from lista_tareas where idUsuario ='$idUsuario' ";
										$query = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

										while($tareas = mysqli_fetch_array($query)){

										?>					
										<ul class="todo-list mt-2 mb-2">
											
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="<?php echo $tareas['tareas']; ?>">
														<label class="custom-control-label custom-control-description" for="<?php echo $tareas['tareas']; ?>"><?php echo $tareas['tareas']; ?></label>
													<div class="float-right action-buttons"><a href="eliminarTarea.php?id=<?php echo $tareas['id'];?>" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
										
											
										</ul>
										<?php } ?>
										<form action="tarea.php" method="post">
										<div class="card-footer todo-list-footer">
											<div class="input-group">
												<input id="btn-input" name="tarea" type="text" class="form-control input-md" placeholder="Agregar nueva tarea" /><span class="input-group-btn">
													<button typy="submit" class="btn btn-primary btn-md" id="btn-todo">Agregar</button>
													
													</form>
										
											</span></div>

											<div class="divider"></div>
										<div id="calendar"></div>
										
										</div>
									</div>
								</div>
							</div>
						</section>
						
					</div>
				</section>
			</main>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <script>
	    var startCharts = function () {
	                var chart1 = document.getElementById("line-chart").getContext("2d");
	                window.myLine = new Chart(chart1).Line(lineChartData, {
	                responsive: true,
	                scaleLineColor: "rgba(0,0,0,.2)",
	                scaleGridLineColor: "rgba(0,0,0,.05)",
	                scaleFontColor: "#c5c7cc "
	                });
	            }; 
	        window.setTimeout(startCharts(), 1000);
	</script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <?php
    }else{
        header('location:login.php');
    } ?>
	</body>
</html>
