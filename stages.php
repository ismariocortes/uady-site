<!-- 
     Created on : 25 feb 2021, 17:45:35 
     Author     : Mario Cortés 
     Subject    : Experiencia de Usuario en la Web
-->

<?php

if (filter_input_array(INPUT_GET)) {
	$stage = filter_input(INPUT_GET, "stage");

?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>Selección Posgrado 2021</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/bootstrap-ish.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<section id="header" class="wrapper">

				<!-- Logo -->
				<div id="logo">
					<h1>Etapas del proceso</h1>
				</div>

				<!-- Nav -->
				<?php include "partials/nav.php" ?>

			</section>

			<!-- Main -->
			<section id="main" class="wrapper style2">
				<div class="title">Etapa <span id="stage"><?php echo $stage ?></span></div>
				<div class="container">
					<div class="row gtr-150">
						<div class="col-4 col-12-medium">

							<!-- Sidebar -->
							<div id="sidebar">
								<section class="box">
									<header>
										<h2>Otras Etapas</h2>
									</header>
									<ul class="style2">
										<li id="stage-1">
											<article class="box post-excerpt">
												<a href="stages.php?stage=1" class="image left">
													<img src="images/lap_etapas.png" alt="" />
												</a>
												<h3><a href="stages.php?stage=1">Etapa 1 <br> Registro en Línea </a></h3>
												<p>Del 27 de febrero al 30 de abril 2021.</p>
											</article>
										</li>
										<li id="stage-2">
											<article class="box post-excerpt">
												<a href="stages.php?stage=2" class="image left">
													<img src="images/imp_etapas.png" alt="img-etapa2" />
												</a>
												<h3><a href="stages.php?stage=2">ETAPA 2 <br> Impresión de comprobante</a></h3>
												<p>Del 24 al 29 de mayo 2021</p>
											</article>
										</li>
										<li id="stage-3">
											<article class="box post-excerpt">
												<a href="stages.php?stage=3" class="image left">
													<img src="images/ceneval_etapas.png" alt="img-etapa3" />
												</a>
												<h3><a href="stages.php?stage=3">ETAPA 3 <br> Presentar Exani III</a></h3>
												<p>29 de mayo 2021</p>
											</article>
										</li>
										<li id="stage-4">
											<article class="box post-excerpt">
												<a href="stages.php?stage=4" class="image left">
													<img src="images/search_etapas.png" alt="img-etapa4" />
												</a>
												<h3><a href="stages.php?stage=4">ETAPA 4 <br> Publicación de resultados</a></h3>
												<p>A partir del 8 de julio 2021</p>
											</article>
										</li>
										<li id="stage-5">
											<article class="box post-excerpt">
												<a href="stages.php?stage=5" class="image left">
													<img src="images/inscripciones_etapas.png" alt="img-etapa5" />
												</a>
												<h3><a href="stages.php?stage=5">ETAPA 5 <br> Inscripciones</a></h3>
												<p>Del 16 al 20 de agosto 2021</p>
											</article>
										</li>
									</ul>
								</section>
							</div>
						</div>
						<div class="col-8 col-12-medium imp-medium">
							<!-- Content -->
							<?php
							$stage = "partials/stage_" . $stage . ".php";
							include $stage
							?>
						</div>
					</div>
				</div>
			</section>
			<div id="anchor-atencion"></div>

			<!-- Footer -->
			<?php include "partials/footer.php" ?>

		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/stages.js"></script>
		<script src="assets/js/modal.js"></script>
	</body>

	</html>
<?php
} else {
	header("location: index.php");
}
?>