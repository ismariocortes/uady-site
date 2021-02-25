<!-- 
     Created on : 25 feb 2021, 17:45:35 
     Author     : Mario Cortés 
     Subject    : Experiencia de Usuario en la Web
-->

<!DOCTYPE HTML>
<html>

<head>
	<title>Selección Posgrado 2021</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<script src="https://use.fontawesome.com/92cfa27dad.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap-ish.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/modal.css" />
</head>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<section id="header" class="wrapper">
			<!-- Logo -->
			<div id="logo">
				<h1>PROCESO DE SELECCIÓN POSGRADOS 2021</h1>
				<img src="images/escudo_blanco.png" id="logo_uady" alt="logo_uady">
				<p>Universidad Autónoma de Yucatán</p>
			</div>
			<!-- Nav -->
			<?php include "partials/nav.php" ?>
		</section>

		<!-- Intro -->
		<section id="intro" class="wrapper style1">
			<div class="title">BIENVENIDO(A)</div>
			<div class="container">
				<p class="style1">
					El Proceso de Selección está diseñado especialmente para seleccionar a los aspirantes que
					desean cursar alguno de los Programas de Posgrado que ofrece la Universidad Autónoma de
					Yucatán. Toda persona que desee ingresar a alguno de los programas de posgrado, deberá
					hacerlo a través de este proceso.
				</p>
				<!-- Banner SIPS -->
				<div class="row featured banner-sips">
					<div class="col-5 col-12-medium" style="padding: 0px !important;">
						<img src="images/lap.png" alt="" class="img-banner">
					</div>
					<div class="col-7 col-12-medium text-sips">
						<h1>SIPS</h1>
						<h3>Sistema de Información para el Proceso de Selección</h3>
					</div>
				</div>
				<ul class="actions">
					<li>
						<a href="http://www.ingreso.uady.mx/posgrado/sistema" class="button style3 large" target="blank">Acceder</a>
					</li>
				</ul>
			</div>
			<div id="anchor-recursos"></div>
		</section>

		<!-- Main -->
		<section id="main" class="wrapper style2">
			<div class="title">RECURSOS</div>
			<div class="container">
				<!-- Convocatorias -->
				<div id="div-convocatorias">
					<h1>CONVOCATORIAS 2021</h1>
					<div class="row">
						<div class="col-4 col-12-medium">
							<a href="recursos/convocatorias/Convocatoria2021Nacionales.pdf" target="_blank" class="button style3 large" target="blank">Nacionales</a>
						</div>
						<div class="col-4 col-12-medium">
							<a href="recursos/convocatorias/Convocatoria2021Extranjeros.pdf" target="_blank" class="button style3 large" target="blank">Extranjeros</a>
						</div>
						<div class="col-4 col-12-medium">
							<a href="recursos/convocatorias/Convocatoria2021EspMedicas.pdf" target="_blank" class="button style3 large" target="blank">Esp. Médicas</a>
						</div>
					</div>
				</div>
				<!-- Banner etapas -->
				<div class="row featured">
					<div class="col-5 col-12-medium" style="padding: 0px !important;">
						<img src="images/students.jpg" alt="" id="img-students">
					</div>
					<div class="col-7 col-12-medium text-etapa1">
						<h1>ETAPA 1</h1>
						<h3>Registro en Línea y Pago de Derechos</h3>
						<h1>Del 27 de febrero al 30 de abril 2021</h1>
					</div>
				</div>
				<!-- Features -->
				<section id="features">
					<header class="style1" style="padding-bottom: 1em; padding-top: 3em;">
						<h2>Recursos importantes para el proceso</h2>
					</header>
					<div class="feature-list">
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
									<h3 class="icon solid fa-flag-usa"><a id="eq-ingles">Equivalencias de inglés</a>
									</h3>
									<p>Equivalencias entre Certificaciones del idioma Inglés aceptadas por la UADY.</p>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<h3 class="icon solid fa-check"><a id="exm-toefl">Examen TOEFL ITP</a></h3>
									<p>Fechas de administración de los exámenes ETS.</p>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<h3 class="icon solid fa-tasks"><a id="etapas-proceso">Fechas del proceso de
											selección</a></h3>
									<p>Fechas de inicio y fin de cada una de las etapas del proceso
										de selección posgrados 2021.</p>
								</section>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div id="anchor-etapas"></div>
		</section>

		<!-- Stages -->
		<?php include "partials/processstages.php" ?>

		<!-- Footer -->
		<?php include "partials/footer.php" ?>

		<!-- Modal windows -->
		<?php include "partials/modal.php" ?>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/modal.js"></script>

</body>

</html>