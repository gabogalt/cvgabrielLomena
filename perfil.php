<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
	<title>Perfil</title>
	<style>
	
	.image-upload > input
{
    display: none;
}
</style>



    <!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	
	
    
</head>

<body>

<!-- <?php 
session_start();
if (isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])) {
    require_once('php/conexion.php');
    $idUsuario = $_SESSION['idUsuario'];
    // $numeroOrden = $_GET['numeroOrden'];
    $consulta = "SELECT nombre, apellido, correo from registro where id = '$idUsuario' ";
    $query  = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
    $datosProyecto = mysqli_fetch_array($query);
    $nombre = $datosProyecto['nombre'];
    $apellido = $datosProyecto['apellido'];
    $correo = $datosProyecto['correo'];
    
    
    $consulta2 = "SELECT usuario, foto from usuarios where id = '$idUsuario' ";
    $query2 = mysqli_query($conexion,$consulta2) or die (mysqli_error($conexion));
    $datosP = mysqli_fetch_array($query2) or die (mysqli_error($conexion));
	$usuario = $datosP['usuario'];
	$foto = $datosP['foto'];
	
	
   
    
    ?> -->
	<div class="container" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> Lomeña    Projects</a></h1>
													
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link " href="index.php"><em class="fa fa-dashboard"></em> Inicio <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="proyecto.php"><em class="fa fa-calendar-o"></em> Proyectos</a></li>
					<li class="nav-item"><a class="nav-link" href="nuevoProyecto.php"><em class="fa fa-pencil-square-o"></em> Nuevo Proyecto</a></li>
					<li class="nav-item"><a class="nav-link active" href="perfil.php"><em class="fa fa-clone"></em> Perfil</a></li>
				</ul>
				

			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Perfil Usuario</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src=" <?php echo $foto; ?>" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1"><?php echo $usuario ?></h4>
							<h6 class="text-muted">Administrador</h6>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
						     <a class="dropdown-item" href="logout.php"><em class="fa fa-power-off mr-1"></em> Cerrar Sesión</a></div>
					</div>
					<div class="clear"></div>
				</header>
				

<div class="container" >
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4"><div class="contenedor mx-auto">
			<form action="fotoUsuario.php"  enctype="multipart/form-data" method="post">		
				<div class="image-upload" >
					<label for="file-input">
						<img src="<?php echo $foto; ?> " class="" style="border-radius:50%; width: 18em; heigth: auto"/>
					</label>
					<input id="file-input" name="fotoUsuario" type="file"/>
				</div>
				<button type="submit pr-4" class="btn btn-block btn-primary" style=" width:24em; "><h6>Subir foto de Perfil</h6></a></button>
			</form>	 
		</div>
		<div class="col-4"></div>
		
		</div>
	</div>

		<div class="contedendor5 mt-5"> 	
			

			<div class="container-fluid ">
				<div class="row  card  " >
					<div class="col-6 mx-auto">
						<div class="form-group">
						<h5 class="pt-3 pl-3">Nombre</h5>

							<div class="input-group mt-3">
								<div class="input-group-prepend">
									<span class="input-group-text" >
										<i class="fas fa-user" style="color:chocolate"></i>
										</span>
								</div>
								
								<input type="text" class="form-control" placeholder="Nombre" value=" <?php echo $nombre ?>" name="nombre" id="nombre" required>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="container-fluid mt-4">
				<div class="row  card  " >
					<div class="col-6 mx-auto">
						<div class="form-group">
						<h5 class="pt-3 pl-3">Apellido</h5>
							<div class="input-group mt-3">
								<div class="input-group-prepend">
									<span class="input-group-text" >
										<i class="fas fa-user" style="color:chocolate"></i>
										</span>
								</div>
								
								<input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido" value=" <?php echo $apellido ?>" required>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="container-fluid mt-4 ">
				<div class="row  card  " >
					<div class="col-6 mx-auto">
						<div class="form-group">
						<h5 class="pt-3 pl-3">Usuario</h5>
							<div class="input-group mt-3">
								<div class="input-group-prepend">
									<span class="input-group-text" >
										<i class="fas fa-user" style="color:chocolate"></i>
										</span>
								</div>
								
								<input type="text" class="form-control" value="<?php echo $usuario ?>" placeholder="Usuario" name="usuario"  id="usuario12" required>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid mt-4">
				<div class="row card ">
					<div class="col-6 mx-auto ">
						<div class="form-group">
						<h5 class="pt-3 pl-3">Correo</h5>
							<div class="input-group mt-3">
							
							
								<div class="input-group-prepend ">
									<span class="input-group-text " >
										<i class="fas fa-at " style="color:chocolate"></i>
									</span>
								</div>
								
								<input type="email" class="form-control  " placeholder="Correo" value="<?php echo $correo ?>" name="correo" id="correo1" required>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="container pb-5 mt-4">
				<div class="row ">
					<div class="col-4"></div>
					<div class="col-4"></div>
					<div class="col-4    mx-auto " >
						<button type="button" id="actualizarDatos" class="btn btn-primary btn-lg  " >Actualizar Datos</button>
					</div>
				</div>
			</div>
		</div>
</div>

</main>
<!-- <?php } else{
	header('Location:Login.php');
}?> -->

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
   
	</body>
</html>
