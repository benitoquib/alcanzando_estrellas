@extends('layouts.app2')

@section('content')
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/style5.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}" />
	
<header id="header" class="ex-header2">
 </header>
<div class="ex-basic-2">
<div class="container">
        <div class="row">
            <div class="col-lg-12">
				<div class="cn-slide" id="slide-main">
					<h2>Apoyanos de corazon</h2>
					<nav>
						<a href="#slide-1">Apoyo Economico</a>							
						<a href="#slide-2">Becas</a>						
						<a href="#slide-3">Objetos</a>
						<a href="#slide-4">Prestacion de servicios</a>
						<a href="#slide-5">Inmuebles</a>
						<a href="#slide-6">Voluntariado</a>
					</nav>
				</div>
				
				<!-- Slide 1 and Sub-slides -->
				<div class="cn-slide cn-slide-sub" id="slide-1">
					<h2>Apoyanos economicamente</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-1-1">Una Sola donacion</a>							
						<a href="#slide-1-2">Aporte mensual o anual</a>
						<a href="#slide-1-3">Publicidad para la organizacion</a>
						<a href="#slide-1-4">Herencia</a>
						<a href="#slide-1-5">Apadrinado de niños</a>
					</nav>
				</div>
				
				<div class="cn-slide" id="slide-1-1">
					<h2>Una sola donacion</h2>
					<a href="#slide-1" class="cn-back">Regresar</a>
					<div class="cn-content">
						<p>Puede realizar un deposito a la cuenta <b>30-4018604-0</b> a nombre de <b>Asociacion Alcanzando Estrellas</b> en <b>Banco Agromercantil</b></p>
						<a class="btn-solid-lg page-scroll" href="/registrodonacion">Realizar Donación</a>
					</div>
					
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-1-2">
					<h2>Aporte Mensual o anual</h2>
					<a href="#slide-1" class="cn-back">Regresar</a>
					<div class="cn-content">
						<p>puede aportar mensual o anualmente xd </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-1-3">
					<h2>Publicidad para la organizacion</h2>
					<a href="#slide-1" class="cn-back">Regresar</a>
					<div class="cn-content">
						<p>Financiando la impresión de trifoliares o afiches, spots radiales sobre la problemática de la asociación o de la población objetivo, promocionando alguna actividad especifica.</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>

				<div class="cn-slide" id="slide-1-4">
					<h2>Herencia</h2>
					<a href="#slide-1" class="cn-back">Regresar</a>
					<div class="cn-content">
						<p>Herencia</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-1-5">
					<h2>Apadrinado de niños</h2>
					<a href="#slide-1" class="cn-back">Regresar</a>
					<div class="cn-content">
						<p>Apadrina a un niño</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
			
				
				<!-- Slide 2 and Sub-slides -->
				<div class="cn-slide cn-slide-sub" id="slide-2">
					<h2>Becas</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-2-1">Financiacion de cursos</a>							
					</nav>
				</div>
				
				<div class="cn-slide" id="slide-2-1">
					<h2>Becas</h2>
					<a href="#slide-2" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Financiando cursos que ayuden al crecimiento intelectual y profesional de las niñas, niños y adolescentes como por ejemplo cursos de (mecanografía. computación, inglés, cursos en INTECAP, etc.)</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				
				
				<!-- Slide 3 and Sub-slides -->
				<div class="cn-slide cn-slide-sub" id="slide-3">
					<h2>Objetos materiales</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-3-1">Material Escolar</a>							
						<a href="#slide-3-2">Ropas, zapatos</a>
						<a href="#slide-3-3">Viveres</a>
						<a href="#slide-3-4">Mobiliario y Equipo</a>
					</nav>
				</div>
				
				<div class="cn-slide" id="slide-3-1">
					<h2>Material Escolar</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Materiales que los niños puedan usar en sus clases de apoyo y reforzamiento (Cuadernos, Crayones, Lápices etc).</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-3-2">
					<h2>Ropas, Zapatos</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Materiales que los niños puedan usar en sus clases de apoyo y reforzamiento (Cuadernos, Crayones, Lápices etc).</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-3-3">
					<h2>Viveres</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Frijol, Incaparina, leche o atoles, Alimentos que ayuden al sano crecimiento de las niñas, niños y adolescentes. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				<div class="cn-slide" id="slide-3-4">
					<h2>Mobiliario y equipo</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Donacion de Mobiliario y Equipo (Materiales de oficina, Materiales de aprendizaje) etc. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>

				<!-- Slide 4 and Sub-slides SERVICIOS-->	
				<div class="cn-slide" id="slide-4">
					<h2>Servicios a la poblacion</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Ayudando a la asociación con asuntos profesionales en su población: (Abogado, Psicólogo, Medico, Etc.)</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				

				<!-- Slide 5 and Sub-slides INMUEBLES-->
				<div class="cn-slide cn-slide-sub" id="slide-5">
					<h2>Inmuebles</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-5-1">Casas</a>							
						<a href="#slide-5-2">Terrenos</a>
					</nav>
				</div>
				
				<div class="cn-slide" id="slide-5-1">
					<h2>Casas</h2>
					<a href="#slide-5" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Donacion de un domicilio...</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-5-2">
					<h2>Terrenos</h2>
					<a href="#slide-5" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Donacion de un terreno...</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<!-- Slide 5 and Sub-slides VOluntariado-->
				<div class="cn-slide cn-slide-sub" id="slide-6">
					<h2>Voluntariado</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-6-1">Recaudacion de fondos</a>							
						<a href="#slide-6-2">Apoyo y reforzamiento escolar</a>
						<a href="#slide-6-3">Deportes y recreacion</a>							
						<a href="#slide-6-4">Visitas escolares</a>
					</nav>
				</div>
				
				<div class="cn-slide" id="slide-6-1">
					<h2>Recaudacion de fondos</h2>
					<a href="#slide-6" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Participacion en actividades de recaudacion de fondos</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-6-2">
					<h2>Apoyo y reforzamiento escolar</h2>
					<a href="#slide-6" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Apoyo y reforzamiento escolar</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>

				<div class="cn-slide" id="slide-6-3">
					<h2>Deportes y recreacion</h2>
					<a href="#slide-6" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Participacion en actividades deportivas y de recreacion</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-6-4">
					<h2>Visitas escolares</h2>
					<a href="#slide-6" class="cn-back">Back</a>
					<div class="cn-content">
						<p>Visitas escolares</p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
			</div>
        </div>
    </div>
 </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection