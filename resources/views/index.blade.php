@extends('layouts.app')

@section('content')

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>ASOCIACIÓN ALCANZANDO ESTRELLAS</h1>
                            <p class="p-heading p-large">Somos una institución  sin fines de lucro, de proyección Social, que propicia el desarrollo integral a la niñez, adolescencia y familias  indígenas en pobreza y pobreza extrema.</p>
                            <a class="btn-solid-lg page-scroll" href="/#intro">DESCUBRE MAS</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">INTRO</div>
                        <h2>"No basta con amar a los niños, es preciso que ellos se den cuenta que son amados"</h2>
                        <div class="testimonial-author">Sectores que Atendemos:</div>
                        <menu>
                            <li>Niñez y juventud que trabaja</li>
                            <li>Niños de famiias desintegradas</li>
                            <li>Niños y Adolescentes en pobreza y pobreza extrema</li>
                            <li>Madres y Hermanos de los niños y niñas</li>
                            <li>Niños que soliciten apoyo en casos especiales</li>
                            <li>Mujeres que necesiten apoyo como asesoria legal, orientacion en problemas familiares.</li>
                        </menu>                                               
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/intro-office.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Logros Destacados<br><br></h2>
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            
                            <i class="fas fa-graduation-cap fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Desempeño Académico</h4>
                            <p>85% al 92% de las niñas, niños y adolescentes apoyados apueban el grado.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-sign-out-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Baja Deserción Escolar</h4>
                            <p>Se ha reducido la desercion escolar de las niñas, niñs y adolescentes que atendemos a 1.76%</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>                            
                            <i class="fas fa-hand-holding-heart fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Superación Emocional</h4>
                            <p>Niñas, niños, adolescentes, madres y padres, han superado problemas emocionales, con una actitud de esfuerzo haci la vida.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>                            
                            <i class="fas fa-flag fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Calidad</h4>
                            <p>Niñas, niños y adolescentes Abanderados.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>                                                                                    
                            <i class="far fa-smile fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Renovación Personal</h4>
                            <p>Mejorada y/o controlada la situación niñas, niños y adolescentes que presentaban problemas de comportamiento (agresividad, timidez) y de bajo rendimiento escolar y /o problemas de aprendizaje.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                     <!-- Card -->
                     <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>                                                                                                                
                            <i class="fas fa-gavel fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Conocimiento</h4>
                            <p>Madres más conscientes de sus derechos y ahora autogestoras.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->


    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">SERVICIOS</div>
                    <h2>Programas de apoyo que la asociación<br> otorga a niños y adultos.</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card/Apoyo Escolar -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-1.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Apoyo Escolar</h3>
                            <p>Comprende varias acciones como:</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Dotación de útiles escolares</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Talleres de reforzamiento:</n></div>                                    
                                </li>
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Escolar</div>
                                </li>           
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Biblioteca</div>
                                </li>            
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Servicio de Internet</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">visitas:</n></div>                                    
                                </li>
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Escolares</div>
                                </li>   
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Domiciliares</div>
                                </li>   
                            </ul>                            
                        </div>
                        
                    </div>
                    <!-- end of card -->

                    <!-- Card/Talleres de Formación -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-taller-form.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Talleres de Formación </h3>
                            <p>Talleres de formación, en valores morales y otros temas como:</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Salud</div>                                                                                               
                                </li>                                
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Derechos</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Medio Ambiente</div> 
                                </li>            
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Recreación</n></div>                                    
                                </li>
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Aprender 3 Deportes</div>
                                </li>   
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Días de Campo</div>
                                </li>   
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Celebraciones Especiales</div>
                                </li>   
                            </ul>                           
                        </div>                        
                    </div>
                    <!-- end of card -->

                    <!-- Card/ Apoyo en Salud -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-2.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Apoyo en Salud</h3>
                            <p>Los servicios médicos que se ofren son los siguientes;</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Formación en Salud</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Desparasitación</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Suplementación</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Referencias a:</div>                                       
                                </li>
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Chequeo Médico</div>
                                </li>   
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Jornadas</div>
                                </li>   
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Refacción Nutritiva</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Dotación de Víveres</div>
                                </li>
                            </ul>                            
                        </div>                        
                    </div>
                    <!-- end of card -->                     

                    <!-- Card/Autodiagnósticos Institucionales-->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-autodiagnostico-institucional.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Autodiagnósticos Institucionales</h3>
                            <p>A instituciones que lo soliciten se utiliza la siguiente metodología:</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">I-STAR</div>
                                </li>        
                            </ul>                            
                        </div>                        
                    </div>
                    <!-- end of card -->

                     <!-- Card/ Capacitación en curso de Filosofía para Niños-->
                     <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-capacitacion-docentes-personas.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Capacitación a Docentes y Personas</h3>
                            <p>Se imparten cursos a docentes y personas que trabajen con niños en temas como:</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Filosofía para Niños</div>
                                </li>                                                                   
                            </ul>                           
                        </div>                        
                    </div>
                    <!-- end of card -->

                    <!-- Card/ Atención Psicológica-->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-atencion-psicologica.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Atención psicológica </h3>
                            <p>Atención Emocional</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Terapias Individuales a:</div>                                                          
                                </li>     
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Niñas</div>
                                </li>                            
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Niños</div>
                                </li>     
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Padres</div>
                                </li>   
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Madres</div>
                                </li>   
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Terapias Grupales</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Talleres de Formación</div>
                                </li>                               
                            </ul>                           
                        </div>                        
                    </div>
                    <!-- end of card -->

                    <!-- Card/Escuela de Madres y Padres-->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-escuela-padres.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Escuela de Madres y Padres</h3>
                            <p>Los servicios médicos que se ofren son los siguientes;</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Formación en Salud</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Desparasitación</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Suplementación</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Referencias a:</div>                                       
                                </li>
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Chequeo Médico</div>
                                </li>   
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Jornadas</div>
                                </li>   
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Refacción Nutritiva</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Dotación de Víveres</div>
                                </li>
                            </ul>                            
                        </div>                        
                    </div>
                    <!-- end of card -->


                    <!-- Card/Incidencia-->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-incidencia.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Incidencia</h3>
                            <p>Además  se ha participado en grupos  o redes de trabajo que se ocupan  en los temas de niñez y mujer, con buenos resultados, como lo son:</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Movimiento Social  por los Derechos de la Niñez</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Grupo de Trabajo Infantil, Ciprodeni (Coordinadora  Interinstitucional por los Derechos de la Niñez)</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Centro de Justicia de Alta Verapaz en Comisión de Prevención  de la Violencia Intra Familiar</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Red de protección de la Niñez  y Juventud</div> 
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Miembro de la ACIEAV- Alianza Cooperativa  para la Incidencia en Educación de Alta Verapaz</div> 
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Red de protección de la Niñez  y Juventud</div> 
                                </li>
                                <li class="media">
                                    <i class="fas fa-check">------</i>
                                    <div class="media-body">Propuesta Presentada "Gratitud de la Educación"</div>
                                </li>                                   
                            </ul>                            
                        </div>                        
                    </div>
                    <!-- end of card -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    


    <!-- Testimonials -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>!Cambiando Vidas!<br>Estas son historias de algunos de nuestros beneficiarios</h2>
                    <p class="p-heading">(ATENCION: Las historias son reales, los medios multimedia, fotos, videos, de estas historias son por referencia para cuidar la integridad de la persona)</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider-->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide / Gloria una estrella con un brillo mas intenso -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Llego a la asociación con problemas de aprendizaje, se trató y se hayo la causa dada por problemas de violencia intrafamiliar (padre no biológico) y barrera idiomática, al tratarla a ella y a su familia comenzó un buen rendimiento en sus clases y aprobó el grado ahora tiene una familia más estable y mayor comunicación con sus padres.</div>
                                            <div class="testimonial-author">Gloria, Una estrella con un brillo mas intenso.</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide / La revelacion de una promesa-->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Rosa una jóven de escasos recursos, la segunda de nueve hijos por su situación económica abandono la escuela para tener que generar ingresos para su familia, la necesidad obliga a las familias a que los niños generen ingresos,  gracias al apoyo y concientización a los padres hoy la mamá esta consiente y apoya a su hija, la que dejo de trabajar y estudia teniendo un buen rendimiento, siendo en el 2011 niña independencia y una de las niñas promesa, de la escuela donde estudiaba (Selección de niños lideres para capacitación de salud mental como agente multiplicador)</div>
                                            <div class="testimonial-author">La revelacion de una promesa</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide / Un niño sin Barreras para Crecer-->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Alejandro un niño con discapacidad auditiva y movimiento de su miembro inferior izquierdo, el segundo de cuatro hijos, madre viuda, estudiando dos años en la escuela donde se le discriminaba por sus discapacidades, no logro aprobar el grado, a la madre le sugirieron que mejor lo pusiera a trabajar, pero la madre busco la Asociación  Alcanzando Estrellas que le gestiono la evaluación e inscripción a la escuela de educación especial EDECRI y para poder llegar  a la misma  el recorre un kilómetro a pie, ya que carecen de recursos económicos para pagar un bus. Ahora Alejandro ya sabe leer, algo que no hubiese podido alcanzar en la escuela donde anteriormente estaba, porque no se le atendía en su problema. La asociación le gestiono audífonos, pues tenía perdida severa del oído izquierdo, también beca por discapacidad del Mineduc, regreso a la escuela donde estudiaba a terminar su primaria y recientemente 3º. básico. Alejandro, también trabajaba algunos días para apoyar con sus gastos  a su mama.
                                            La actitud de la madre fue clave al buscar ayuda para su hijo y no cedió a la tentación de ponerlo a trabajar, aunque tenía mucha necesidad, priorizo la educación de su hijo.</div>
                                            <div class="testimonial-author">Un niño sin Barreras para Crecer</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide La luz que que no se apaga.-->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Amalia la segunda de cuatro hijos, madre qeqchi, analfabeta, a su ingreso presentaba problemas de aprendizaje, al tratarse se estableció que eran por problemas familiares, barrera idiomática y maestra (monolingüe, con poca tolerancia hacia la niña) y después de recibir apoyo psicológico y orientación escolar ahora es una niña sobresaliente y abanderada en la escuela que asiste. 
                                            La actitud de la madre fue clave, porque, aunque la maestra decía que era una niña perezosa, ella busco ayuda en la asociación para su hija.</div>
                                            <div class="testimonial-author">La luz que que no se apaga.</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide La luz que que no se apaga.-->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Estela La octava de ocho hijos, una niña con problemas de aprendizaje y repitencia, no quería asistir a la escuela ni hacer tareas, se le empezó a tratar, brindándole el apoyo psicológico para superar  duelo de la madre  y reforzando áreas de debilidad, hoy es la mejor alumna de su clase, asiste con ilusión y no falta ningún día en un ciclo escolar. La actitud de la hermana que conocía la  institución, fue determinante, al buscar ayuda en la asociación para su hermana menor y la atención brindada a la niña en la  asociación
                                            </div>
                                            <div class="testimonial-author">La Oportunidad de un mejor futuro</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide La luz que que no se apaga.-->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Oscar el cuarto de ocho hijos, mamá viuda, familia qeqchi y analfabeta, un niño con ausentismo escolar y repitencia, por lo cual tenía ya dos bimestres perdidos, se le comenzó a motivar, hablar con hermanos y mamá además de monitorear su asistencia a la escuela se logró que óscar aprobara su grado, en octubre la maestra confirma la aprobación del grado escolar.</div>
                                            <div class="testimonial-author">La perseverancia rinde sus frutos</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide La luz que que no se apaga.-->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Marcos, el 1º. de 3 hermanos, madre soltera, analfabeta, indígena, un joven de escasos recursos que tenía que trabajar para aportar ingresos a su casa, por su alto rendimiento,  logro una beca en el MINEDUC, participo en las olimpiadas de la ciencia del CUNOR obteniendo un tercer lugar a nivel departamental y regional. Asistía a la institución y trabajaba, los medios días,  para apoyar el sostenimiento de su familia, ya que además de los gastos de alimentación, deben pagar alquiler. Logro graduarse de bachiller y ahora asiste a la universidad.</div>
                                            <div class="testimonial-author">Alcanzando Metas</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide La luz que que no se apaga.-->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Amalia jovencita q’eqchi’ risueña, amable, colaboradora, educada, tranquila y responsable. La familia de Amalia está conformada por su madre q’eqchi, analfabeta, madre soltera por abandono del esposo, con poca tolerancia la frustración, trabajaba como empleada de oficios domésticos los ingresos eran insuficientes para cubrir los gastos de alquiler, alimentación y   demás, por tal razón Amalia, trabajo como niñera en las mañanas y fines de semana, para contribuir a   los gastos del instituto. Se levantaba muy temprano luego se prepara para ir a la academia de mecanografía,  que gracias a la  gestión de la institución  gozaba de una beca  completa; a pesar del trabajo y compromisos su rendimiento en la escuela era muy bueno por tal motivo se encontraba en el cuadro de honor de la escuela donde estudiaba. Ella y  su hermano menor  continuaron estudiando, gracias al acompañamiento orientación  en tareas  y formación en valores la joven consiguió la motivación para salir adelante, fue así como se le asigno una beca, para hacer posible que  ella estudiara básico </div>
                                            <div class="testimonial-author">Una historia de resiliencia</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide La luz que que no se apaga.-->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Aurora la segunda de tres hermanos, la madre, qeqchi, analfabeta, soltera, por abandono, con poca tolerancia a la frustración, no quería que ella estudiara, solo su hermano por ser varón estaba estudiando, se convenció a la madre para que la niña ingresara a la escuela, y así inicio sus estudios los que continuo,  su hermano mayor falleció por epilepsia, la hermana menor,   es una niña con capacidades diferentes. Familia en extrema pobreza, por lo que Aurora ayudaba con los gastos de la familia trabajando en las tardes y fines de semana, cuidando niños u oficios domésticos, durante su niñez enfrento varias dificultades entre ellas hambre, pasaba algunos días sin comer solo tomando agua porque, no contaban con recursos para comprar alimentos. Se ausento de la asociación unos 3 años, pero regreso y  con al apoyo de Alcanzando Estrellas, se convirtió en una buena estudiante,  jovencita de buen promedio, por lo que  se le tramito una bolsa de Estudios que otorga el Ministerio de Educación, durante 4 años,  esto la motivo a seguir estudiando y obtener notas sobresalientes, Se graduó de maestra de educación bilingüe siendo la única integrante de la familia que logro alcanzar esta meta y la que hoy sostiene a su hermana y mama.</div>
                                            <div class="testimonial-author">Esperanza en las dificultades</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                 
                                 <!-- Slide La luz que que no se apaga.-->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Marta niña de  trece años de edad la mayor de ocho  hermanos, familia queqchi en pobreza extrema y de padres analfabetos, nunca había asistido a la escuela, por falta de recursos económicos,  y porque su familia consideraba que ella  no necesitaba estudiar, pues era mujer, ella era la encargada de ayudar con las tareas domésticas. Se convenció a la madre que la niña tenía el derecho de estudiar y se iniciaron gestiones y acompañamiento   de parte de Asociación Alcanzando Estrellas y  se logro que la niña pudiera ser admitida a primer grado de primaria, por su edad tenía dificultades para ser aceptada en la escuela, la niña aprendió rápidamente a leer y a escribir, incluso apoyaba a la maestra y ayudaba a sus compañeros de clase, se mostraba feliz y agradecida por tener la oportunidad de aprender y  asistía  a reforzamiento y participaba en las  actividades de la asociación, lo mismo que la madre asistía a la escuela de madres.   Marta actualmente continua estudiando y se siente motivada, cuando sea mayor quiere ser Maestra para poder ayudar a otros niños a aprender a leer y escribir.</div>
                                            <div class="testimonial-author">Rompiendo estereotipos</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->                         

                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->




    <!-- ACTIVIDADES -->
    <div id="actividades" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">ACTIVIDADES</div>
                    <h2>Ultimas actividades</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>MOSTRAR TODAS</span></a>
                        <a class="button" data-filter=".recaudacion"><span>Recaudacion</span></a>
                        <a class="button" data-filter=".educacion"><span>Educacion</span></a>
                        <a class="button" data-filter=".recreacion"><span>Recreacion</span></a>
                        <a class="button" data-filter=".otras"><span>Otras</span></a>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="element-item recaudacion">
                            <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"><span>Rifa 2016</span></div><img src="images/actividad-1.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item recreacion">
                            <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"><span>Dia de Campo, Tactic A.V.</span></div><img src="images/actividad-2.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item recaudacion">
                            <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"><span>Cena de recaudacion de fondos</span></div><img src="images/actividad-3.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item educacion">
                            <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"><span>Entrega de sistematizacion de tecnicas activas</span></div><img src="images/actividad-4.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item recreacion">
                            <a class="popup-with-move-anim" href="#project-5"><div class="element-item-overlay"><span>Carrera Cobancito</span></div><img src="images/actividad-5.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item recreacion recaudacion">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"><span>Primera Carrera ASAES</span></div><img src="images/actividad-6.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item otras">
                            <a class="popup-with-move-anim" href="#project-7"><div class="element-item-overlay"><span>Celebracion dia de la familia</span></div><img src="images/actividad-7.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item otras">
                            <a class="popup-with-move-anim" href="#project-8"><div class="element-item-overlay"><span>Actividad de reforestacion</span></div><img src="images/actividad-8-1.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item educacion">
                            <a class="popup-with-move-anim" href="#project-9"><div class="element-item-overlay"><span>Cursos vacacionales</span></div><img src="images/actividad-9-1.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item otras recreacion">
                            <a class="popup-with-move-anim" href="#project-10"><div class="element-item-overlay"><span>Celebracion de cumpleaños</span></div><img src="images/actividad-10-1.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item recreacion otras">
                            <a class="popup-with-move-anim" href="#project-11"><div class="element-item-overlay"><span>Celebracion dia del niño</span></div><img src="images/actividad-11-1.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item recreacion otras">
                            <a class="popup-with-move-anim" href="#project-12"><div class="element-item-overlay"><span>Dia de la familia</span></div><img src="images/actividad-12-1.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item educacion recreacion">
                            <a class="popup-with-move-anim" href="#project-13"><div class="element-item-overlay"><span>Aprendizaje de deportes</span></div><img src="images/actividad-13-1.jpg" alt="alternative"></a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-1.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Rifa 2016</h3>
                <hr class="line-heading">
                <h6>Entrega de premio</h6>
                <p>Entrega del premio de la rifa realizada el 4/7/2016 </p>
                <p>Ganador: Luis Eduardo Ac Rodriguez Licuadora.</p>
                 <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Dia de campo</h3>
                <hr class="line-heading">
                <h6>Tactic, A.V.</h6>
                <p>Día de campo, viaje a diferentes lugares de recreación.</p>
                 <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-3.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Cena de recaudacion</h3>
                <hr class="line-heading">
                <h6>2018 - Aventureros y marimba</h6>
                <p>Cena  anual en beneficio de la Asociación Alcanzando Estrellas realizada en  octubre  con la participación de  grupos  musicales, niñas y niños.</p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-4.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Entrega de sistematizacion de tecnicas activas </h3>
                <hr class="line-heading">
                <h6>Año 2018</h6>
                <p>Entrega de sitematizacion de tecnicas activas a istituciones del area de Cobán.</p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-5.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Carrera Cobancito</h3>
                <hr class="line-heading">
                <h6>Año 2018</h6>
                <p>participacion de niñas y niños anualmente en la Carrera Cobancito</p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-6.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Primera edicion de carrera Asociacion Alcanzando Estrellas </h3>
                <hr class="line-heading">
                <h6>Año 2019</h6>
                <p>En noviembre del 2019 se organizo la primera edición de la carrera ASAES Por el dia internacional del niño, donde Participaron 15 niños de la asociación Y publico en general que tuvo uno  Recorrido de 6 kilometros. Iniciando del parque central hacia la Rotonda del campo de aviación y  Retorno.  </p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-7.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Dia de la familia</h3>
                <hr class="line-heading">
                <h6>Celebracion del dia de la familia</h6>
                <p></p>
                 <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-8-1.jpg" alt="alternative">
                <img class="img-fluid" src="images/actividad-8-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Actividad de reforestacion</h3>
                <hr class="line-heading">
                <h6></h6>
                <p>Anualmente niñas y niños siembran arboles</p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-9" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-9-1.jpg" alt="alternative">
                <img class="img-fluid" src="images/actividad-9-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Cursos vacacionales</h3>
                <hr class="line-heading">
                <h6></h6>
                <p>Durante Octubre y Noviembre las niñas y niños reciben cursos de: dibujo y pintura, música, baile, inglés, qeqchi, manualidades cocina y las niñas de básico y diversificado de defensa personal.</p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-10" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-10-1.jpg" alt="alternative">
                <img class="img-fluid" src="images/actividad-10-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Celebracion de cumpleaños</h3>
                <hr class="line-heading">
                <h6></h6>
                <p></p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-11" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-11-1.jpg" alt="alternative">
                <img class="img-fluid" src="images/actividad-11-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Celebracion dia del niño</h3>
                <hr class="line-heading">
                <h6></h6>
                <p></p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-12" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-12-1.jpg" alt="alternative">
                <img class="img-fluid" src="images/actividad-12-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Dia de la familia</h3>
                <hr class="line-heading">
                <h6></h6>
                <p></p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-13" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-13-1.jpg" alt="alternative">
                <img class="img-fluid" src="images/actividad-13-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Aprendizaje de deportes</h3>
                <hr class="line-heading">
                <h6></h6>
                <p></p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">Regresar</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->


    <!--junta directiva -->
    <div class="basic-2">
        <div class="container">
            <h1>Equipo de trabajo</h1>
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">  
                        <br>
                        <br>                     
                        <h3>Cada persona está a cargo de una componente o departamento y se apoyan con practicantes y voluntarios para desarrollar su trabajo.</h3>                             
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/diagrama.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <br>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Junta Directiva</h3>
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/userfemale.jpg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large">Profa: Ana Regina Rubio de Castillo</p>
                        <p class="job-title">Presidente</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/userfemale.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Licda. Aracely Briones de Macz</p>
                        <p class="job-title">Vicepresidente</p>

                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/usermale.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Profe: Ely Ramiro Sierra Pereira</p>
                        <p class="job-title">Secretario</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/userfemale.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Licda. Isabel Cristina Lobos</p>
                        <p class="job-title">Tesorera</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/userfemale.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Karla Regina de Santaluce</p>
                        <p class="job-title">Vocal I</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/userfemale.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Hna Inés Sánchez Rendón</p>
                        <p class="job-title">Vocal II</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/userfemale.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Hna. Susana Padilla</p>
                        <p class="job-title">Vocal III</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- fin junta directiva -->

@endsection