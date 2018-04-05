<!DOCTYPE HTML>
<!--
	Iridium by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Datos</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="no-sidebar">

		<?php 

			


				$Nombre =$_GET['Nombre'];
				$Apellido =$_GET['Apellido'];
				$Telefono =$_GET['Telefono'];
				$Correo =$_GET['Correo'];
				$Asunto =$_GET['Asunto'];
				$Mensaje =$_GET['Mensaje'];

				$classNombre = "";
				$classApellido = "";
				$classTelefono = "";
				$classCorreo = "";
				$classAsunto = "";
				$classMensaje = "";

				$msgNombre = "";
				$msgApellido = "";
				$msgTelefono = "";
				$msgCorreo = "";
				$msgAsunto = "";
				$msgMensaje = "";



				if (empty($Nombre)) {	
					$Nombre = "";				
					$msgNombre = "Falta el Nombre";
					$classNombre = "error";				
				}else if (!ctype_alpha($Nombre)) {
					$Nombre = "";
					$msgNombre = "Solo Letras!!";
					$classNombre = "error";					
				}

				if (empty($Apellido)) {
					$Apellido = "";
					$msgApellido = "Falta el Apellido";
					$classApellido = "error";
				}else if (!ctype_alpha($Apellido)) {
					$Apellido = "";
					$msgApellido = "Solo Letras!!";
					$classApellido = "error";					
				}

				if (empty($Telefono)) {
					$Telefono = "";
					$msgTelefono = "Falta el Teléfono";
					$classTelefono = "error";
				}else if (ctype_alpha($Telefono)) {
					$Telefono = "";
					$msgTelefono = "Solo Números!!";
					$classTelefono = "error";					
				}

				if (empty($Correo)) {
					$Correo = "";
					$msgCorreo = "Falta el Correo";
					$classCorreo = "error";
				}

				if (empty($Asunto)) {
					$Asunto = "";
					$msgAsunto = "Falta el Asunto";
					$classAsunto = "error";
				}

				if (empty($Mensaje)) {
					$Mensaje = "";
					$msgMensaje = "Falta el Mensaje";
					$classMensaje = "error";
				}
			


		?>

		<!-- Header -->
		<div id="header">
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Johanson Castañeda</a></h1>
					<span>Perfil Profesional y Personal</span>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="left-sidebar.html">Sobre Mí</a></li>
						<li><a href="#">Extra</a></li>
						<li class="active"><a href="no-sidebar.html">Contacto</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="12u skel-cell-important">
						<section>
							<header>
								<h2>Datos</h2>
							</header>
							
							<div class="row">
							<form>
								
								<div class="4u"><label>Nombre: </label><input placeholder="<?php echo $msgNombre; ?>" class="<?php echo $classNombre; ?>" readonly="" value="<?php echo $Nombre; ?>" type="text" name="Nombre"></div>
								<div class="4u"><label>Apellido: </label><input placeholder="<?php echo $msgApellido; ?>" class="<?php echo $classApellido; ?>" readonly="" value="<?php echo $Apellido; ?>" type="text" name="Apellido"></div>
								<div class="4u"><label>Teléfono: </label><input placeholder="<?php echo $msgTelefono; ?>" class="<?php echo $classTelefono; ?>" readonly="" value="<?php echo $Telefono; ?>" type="number" name="Telefono"></div>
								<div class="4u"><label>Correo: </label><input placeholder="<?php echo $msgCorreo; ?>" class="<?php echo $classCorreo; ?>" readonly="" value="<?php echo $Correo; ?>" type="text" name="Correo"></div>
								<div class="4u"><label>Asunto</label><input placeholder="<?php echo $msgAsunto; ?>" class="<?php echo $classAsunto; ?>" readonly="" value="<?php echo $Asunto; ?>" type="text" name="Asunto"></div>
								<div class="4u"><label>Mensaje</label><textarea placeholder="<?php echo $msgMensaje; ?>" class="<?php echo $classMensaje; ?>" readonly="" name="Mensaje"><?php echo $Mensaje ?></textarea></div>
								<div class="4u"><a href="no-sidebar.html" class="button">Volver</a></div>

							</form>
							</div>

						</section>
					</div>
					
				</div>
			</div>
		</div>

		<!-- Footer -->
		


		<!-- Footer -->
		

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<section>
					&ldquo;Para todo hay tiempo...&rdquo;
				</section>
			</div>
		</div>
		
	</body>
</html>