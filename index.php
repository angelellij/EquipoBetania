<!DOCTYPE html>

<html> 

	<head>
		
        <meta charset="UTF-8">
		<title> Equipo Betania </title>
		<link rel="stylesheet" href="css/BetaniaStyles.css">
		<meta name="viewport" content="width=device-width, initial-scale=0.6"/>
		<link rel="shortcut icon" type="image/x-icon" href="img/loguito.ico">

		<script src="js/MenuMovil.js"></script>
				
	</head>
	
	<body>
		<header>
			<div id='anav'>
				<div onclick=menucerrar() id=logo><p id=logot>Equipo Betania</p></div>
				<img onclick=menu() id="menunav" src="img/menu.png"/>
				<div onclick=menucerrar() id="NavegacionBarra" class="closed">
						<div class=divi></div>
						<a class="nav" href="#inicio"><p class='navi'>Inicio</p></a>
						<div class=divitydiv><div class=divi></div></div>
						<a class="nav" href="#Equipo"><p class='navi'>Equipo</p></a>
						<div class=divitydiv><div class=divi></div></div>
						<a class="nav" href="#Mision"><p class='navi'>Misión</p></a>
						<div class=divitydiv><div class=divi></div></div>
						<a class="nav" href="#Propuestas"><p class='navi'>Servicios</p></a>
						<div class=divitydiv><div class=divi></div></div>
						<a class="nav" href="#Contacto"><p class='navi'>Contacto</p></a>
							<div class=divi></div>
				</div>
			</div>
			<div id='bnav' class="EsParrafo">
					<div id=logo><p id=logot>Equipo Betania</p></div>
					<div>
						<nav>
							<a class="nav" href="#Contacto"><div class=barra><p class=navtext>Contacto</p></div></a>
							<a class="nav" href="#Propuestas"><div class=barra><p class=navtext>Propuestas</p></div></a>
							<a class="nav" href="#Mision"><div class=barra><p class=navtext>Misión</p></div></a>
							<a class="nav" href="#Equipo"><div class=barra><p class=navtext>Equipo</p></div></a>
							<a class="nav" href="#inicio"><div class=barra><p class=navtext>Inicio</p></div></a>
						</nav>
					</div>
			</div>
			</header>
		
		<main onclick=menucerrar() id=main>
			<section id="inicio">
				<div id="titulos">
					<img id=logotitulo src=img/Logo_Betania.png>
					<p id="subtitulo"> #DesdeAdentro </p>
					<p id="slogan"> "Una puerta al conocimiento de sí mismo" </p>
				</div>
			</section>
			<hr id=Equipo>
				<article class="left">
					<div class=leftbox class=textleft>
						<h2 class="EsTitulo"> ¿Quienes Somos? </h2> 
						<p class=EsParrafo> Somos un equipo formado por profesionales de Psicología, 
						Psicopedagogía y Psiquiatría, que comprende a la persona como un ser integral, 
						atravesado por su historia, familia y valores, que se sostiene en el presente 
						y busca desarrollarse y trascender. </p>
					</div>
					<div class=rightbox> <img id=imgequi class=imgEstandar src="img/somos.jpg" alt="Imagen" /> </div>
				</article>
					
			</section>
	
			<section id="Mision">
			<a href="https://www.freepik.es/fotos-vectores-gratis/personas">
				<article id="MisionArticulo">
					<div>
						<h3 class="EsTitulo"> Misión</h3>
						<p class=EsParrafo> Brindar herramientas como para que quienes acudan a nosotros puedan 
						conocerse a sí mismos y desplegarse como personas.</p>
					</div>
					<div>
						<p class="EsTitulo"> Visión</p>
						<p class=EsParrafo> Reconocemos a la persona como ser  bio-psico-socio-espiritual con una 
						vocación interior que busca desplegarse para ser constructor de un mundo nuevo. </p>
					</div>
				</article>
			</a>
			</section>
			<hr id=Propuestas>
			<section>
				<article id=PropuestasArticulo>
					<h4 class="EsTitulo"> Propuestas </h4>
						<div class="bullet" id="serviciosp">
							<div class=row>
								<p class="col leftcol EsParrafo">Procesos de Orientación Vocacional.</p>
								<p class="col rightcol EsParrafo">Talleres de Orientación Vocacional.</p>
							</div>
							<div class=row>
								<p class="col leftcol EsParrafo">Espacio de Psicoterapia y Psicopedagogía.</p> 
								<p class="col rightcol EsParrafo">  Psicotécnicos Laborales para instituciones educativas. </p> 
							</div>
							<div class=row>
								<p class="col midcol EsParrafo"> Procesos Psicodiagnóstico.</p>
							</div>
						</div>
					</article>
			</section>
			<hr id=Contacto>
			<section>
				<article id=contacto>
					<div class=leftbox>
						<h5 class="EsTitulo"> Contacto </h5> 
							<form action="php/Betania.php" method="post">
								<p class=Formulario>Nombre:</p>
								<input type="text" name="nombre" placeholder="Nombre Completo">
								<p class=Formulario>Email:</p>
								<input type="mail" name="mail" placeholder="email@email.com">
								<p class=Formulario>Propuesta de interés:</p>
								<input type="text" name="propuesta" placeholder="Orientación Vocacional">
								<p class=Formulario>Su consulta:</p>
								<textarea name="consulta" placeholder="Escriba aquí su consulta."></textarea>
								<br>
								<button type="submit" name="submit"> Enviar </button>
							</form>
					</div>
					<aside class=leftbox id=contbox> <img id="imgcon" src="img/Contacto.png" class=imgEstandar alt="Imagen" /> </aside>
				</article>				
					
			</section>
		</main>

		<footer  onclick=menucerrar()>
			<p> Equipo Betania </p>
			<a href=mailto:"consultas@equipobetania.com"><p id=mail>consultas@equipobetania.com  </p></a>
		</footer>

	</body>
</html>