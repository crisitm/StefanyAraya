<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php

    $destino = "chvasvar@gmail.com";
    $asunto="Formulario de inscripción";
    $desde = "From: ".$_POST['demo-email'];
    $comentario = "
    \n
    Nombre : $_POST['demo-name']\n
    Curso : $_POST['demo-category']\n
    Correo : $_POST['demo-email']\n
    Comentario : $_POST['demo-message']\n
    \n

    ";
    $resultado = mail($destino, $asunto, $comentario, $desde);
    if($resultado == true){
        echo "mensaje enviado";
        
    }
    else{
     echo "mensaje no enviado";
    
    }


?>


<html>
	<head>
		<title>Diseñadora Stefany Araya</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color0 span-3-75">
									<h1 class="major">Hola, me llamo<br />
									Stefany</h1>
									<p> Consejo de alguíen que le apaciona<strong> la moda</strong>...Tener algo que te inspire facilita que la colección sea coherente y transmita un mismo mensaje o sensación</p>
									<ul class="actions">
										<li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/stef15.jpg" alt="" />
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight medium right" id="first">
								<div class="content span-7">
									<h2 class="major">Ah!...También soy amante de los perros</h2>
									<p>Ellos son Hanny y Stella, una tiene perronalidad más reservada pero animada y la otra es más expresiva pero retraida. </p>
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/stef27.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1">
								<div class="intro joined">
									<h2 class="major"> Me interesa ...</h2>
									<p>La combinación armonica que produce el arte y la tecnologia al tomarse de la mano y crear ideas que transformen un pensamiento en una herramienta concreta.</p>
								</div>
								<div class="inner">
									<ul class="grid-icons three connected">
										<li><span class="icon fa-diamond"><span class="label">Lorem</span></span></li>
										<li><span class="icon fa-camera-retro"><span class="label">Ipsum</span></span></li>
										<li><span class="icon fa-cog"><span class="label">Dolor</span></span></li>
										<li><span class="icon fa-paper-plane"><span class="label">Sit</span></span></li>
										<li><span class="icon fa-bar-chart"><span class="label">Amet</span></span></li>
										<li><span class="icon fa-code"><span class="label">Nullam</span></span></li>
									</ul>
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight large left">
								<div class="content span-5">
									<h2 class="major">Diseñadora de modas</h2>
									<p>Estudiante de diseño de moda en la Universidad Veritas.</p>
								</div>
								<div class="image filtered tinted" data-position="top right">
									<img src="images/stef19.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel">
								<div class="intro color2">
									<h2 class="major">Portafolio</h2>
									<p>Durante los últimos años, la experiencia adquirida en el área de moda y diseño.</p>
								</div>
								<div class="gallery">
									<div class="group span-3">
										<a href="images/gallery/portafolio/stef4.jpg" class="image filtered span-3" data-position="bottom"><img src="images/gallery/portafolio/stef4.jpg" alt="" /></a>
										<a href="images/gallery/portafolio/stef5.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/portafolio/stef5.jpg" alt="" /></a>
										<a href="images/gallery/portafolio/stef6.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/portafolio/stef6.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/portafolio/stef2.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/portafolio/stef2.jpg" alt="" /></a>
									<div class="group span-4-5">
										<a href="images/gallery/portafolio/stef10.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/portafolio/stef10.jpg" alt="" /></a>
										<a href="images/gallery/portafolio/stef9.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/portafolio/stef9.jpg" alt="" /></a>
										<a href="images/gallery/portafolio/stef11.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/portafolio/stef11.jpg" alt="" /></a>
										<a href="images/gallery/portafolio/stef8.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/portafolio/stef8.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/portafolio/stef3.jpg" class="image filtered span-2-5" data-position="right"><img src="images/gallery/portafolio/stef3.jpg" alt="" /></a>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color4-alt">
								<div class="intro color4">
									<h2 class="major">Contacto</h2>
									<p>Para más información sobre algún servicio de Arte o tecnología siguenos en redes sociales.</p>
								</div>
								<div class="inner columns divided">
									<!--<div class="span-3-25">
										<form method="post" action="#">
											<div class="field half">
												<label for="name">Nombre</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="email" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Mensaje</label>
												<textarea name="message" id="message" rows="4"></textarea>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Enviar consulta" class="button special" /></li>
											</ul>
										</form>
									</div>-->
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon fa-twitter"><a href="#">@meliflua</a></li>
											<li class="icon fa-facebook"><a href="#">facebook.com/meliflua</a></li>
											<!--<li class="icon fa-snapchat-ghost"><a href="#">@meliflua-tld</a></li>-->
											<li class="icon fa-instagram"><a href="#">@meliflua-tld</a></li>
											<!--<li class="icon fa-medium"><a href="#">medium.com/meliflua</a></li>-->
										</ul>
									</div>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color2-alt">
								<div class="intro color2">
									<h2 class="major">Matrícula abierta <b>Dibujo de Moda</b></h2>
									<p>La matricula se encuentra abierta, favor llenar el siguiente formulario para incribirse </p>
								</div>
								<div class="inner columns aligned">
									
									
									<div class="span-3">
										<h4>Cursos disponibles</h4>
										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>Nombre</th>
														<th>Descripción</th>
														<th>Precio</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Dibujo intro</td>
														<td>Intro dibujo.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Dibujo I</td>
														<td>Dibujo avanzado.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Dibujo II</td>
														<td> Dibujo avanzado.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Dibujo III</td>
														<td>Dibujo avanzado.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Dibujo avanzado</td>
														<td>Dibujo avanzado.</td>
														<td>29.99</td>
													</tr>
												</tbody>
												<tfoot>
													<!--<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>-->
												</tfoot>
											</table>
										</div>
									</div>
									
									<div class="span-4-5">
										<h3 class="major">Formulario de inscripción</h3>
										<form method="post" action="index.php">
											<div class="field third">
												<label for="demo-name">Nombre</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Nombre completo" />
											</div>
											<div class="field third">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@meliflua.com" />
											</div>
											<div class="field third">
												<label for="demo-category">Curso</label>
												<div class="select-wrapper">
													<select name="demo-category" id="demo-category">
														<option value="">-</option>
														<option value="1">Dibujo Intro</option>
														<option value="1">Dibujo I</option>
														<option value="1">Dibujo II</option>
														<option value="1">Dibujo III</option>
                                                        <option value="1">Dibujo Avanzado</option>
													</select>
												</div>
											</div>
											<div class="field quarter">
												<input type="radio" id="demo-priority-low" name="interes-alto" class="color2" checked />
												<label for="demo-priority-low">Alto interes</label>
											</div>
											<div class="field quarter">
												<input type="radio" id="demo-priority-high" name="interes-medio" class="color2" />
												<label for="demo-priority-high">Interes medio</label>
											</div>
											
											
											<div class="field">
												<label for="demo-message">Mensaje</label>
												<textarea name="demo-message" id="demo-message" placeholder="Ingrese su comentario" rows="2"></textarea>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Enviar formulario" class="special color2" /></li>
												<li><input type="reset" value="Cancelar" /></li>
											</ul>
										</form>
									</div>
								</div>
							</section>

						<!-- Copyright -->
							<div class="copyright">&copy; Diseñado por <a href="https://www.yesduet.com">YesDuest.com</a>.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>
            

	</body>
</html>