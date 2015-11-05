<!DOCTYPE html>
@extends('base')
	@include('layouts/nav-top')
	

		<section class="slider" id="home">
			<div class="container-fluid">
				<div class="row">

				    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="header-backup"></div>
				        <!-- Wrapper for slides -->
				        <div class="carousel-inner" role="listbox">
				            <div class="item active">
				            	<img src="img/programadores2.jpg" alt="">
				                <div class="carousel-caption">
			               			<h1>Desarrollo Web</h1>
			               			<p>Aplicaciones desarrolladas a tu medida, con precios inigualables</p>
				                </div>
				            </div>
				            <div class="item">
				            	<img src="img/diseno.jpg" alt="">
				                <div class="carousel-caption">
			               			<h1>Diseño Gráfico</h1>
			               			<p>Talento Creativo a tu disposicion.</p>
				                </div>
				            </div>
				            <div class="item">
				            	<img src="img/consultoria.jpg" alt="">
				                <div class="carousel-caption">
			               			<h1>Consultoria</h1>
			               			<p>Porque necesitas los mejores consejos, para sacar adelante tu proyecto de vida.</p>
				                </div>
				            </div>
				            <div class="item">
				            	<img src="img/learning.jpg" alt="">
				                <div class="carousel-caption">
			               			<h1>Aprende con nosotros</h1>
			               			<p>Queremos ser mas que un equipo de desarrollo, queremos crecer contigo.</p>
				                </div>
				            </div>
				        </div>

				        <!-- Controles del slider -->
				        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
				            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				            <span class="sr-only">Previous</span>
				        </a>
				        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
				            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				            <span class="sr-only">Next</span>
				        </a>
				    </div>

				</div>
			</div>
		</section><br><!-- fin del slider -->


		<!-- Seccion de Nosotros -->
		<section class="about text-center" id="about">
			<div class="container">
				<div class="row">
					<h2>Sobre Nosotros</h2>
					<h4>Jóvenes programadores entusiastas, con altísimas ganas de apoyar a los emprendedores venezolanos, con nuevas tecnologías y buenas prácticas en el desarrollo de aplicaciones web. </h4>
					<div class="col-md-4 col-sm-6">
						<div class="single-about-detail clearfix">
					          <img src="img/naicelis.jpg" width="250" height="250" alt="naicelis" class="avatar">      
					          	<p class="nombre">Naicelis Pulido</p>
					          	<p class="Author_name t-color">Ingeniera de sistemas</p>
					          	<p class="Author_name t-color">Administrador de Base de datos</p>
						</div>
						<div class="Author_social">
							<a class="t-color" target="_blank" href=""><i class="fa fa-twitter"></i></a>
							<a class="t-color" target="_blank" href="https://www.facebook.com/Naiclibra"><i class="fa fa-facebook"></i></a>
							<a class="t-color" target="_blank" href=""><i class="fa fa-linkedin"></i></a>        
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="single-about-detail clearfix">
					          <img src="img/vincen.jpg" width="250" height="250" alt="vincen" class="avatar">      
					          		<p class="nombre">Vincen Santaella</p>
					          		<p class="Author_name t-color">Ingeniero de sistemas</p>
					          		<p class="Author_name t-color">Programador (frontend)</p>
						</div>
						<div class="Author_social">
							<a class="t-color" target="_blank" href="https://twitter.com/vinrast"><i class="fa fa-twitter"></i></a>
							<a class="t-color" target="_blank" href="https://es-la.facebook.com/vincenyoel"><i class="fa fa-facebook"></i></a>
							<a class="t-color" target="_blank" href="https://ve.linkedin.com/pub/vincen-santaella/105/b18/a22"><i class="fa fa-linkedin"></i></a>        
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="single-about-detail clearfix">
					          <img src="img/richard.jpg" width="250" height="250" alt="richard" class="avatar">      
					          		<p class="nombre">Richard Flores</p>
					          		<p class="Author_name t-color">Ingeniero de sistemas</p>
					          		<p class="Author_name t-color">Programador (Backend)</p>
						</div>
						<div class="Author_social">
							<a class="t-color" target="_blank" href=""><i class="fa fa-twitter"></i></a>
							<a class="t-color" target="_blank" href="https://www.facebook.com/richardflores1990"><i class="fa fa-facebook"></i></a>
							<a class="t-color" target="_blank" href=""><i class="fa fa-linkedin"></i></a>        
						</div>
					</div>
				</div>
			</div>
		</section><!-- Fin de la seccion Nosotros -->


		<!-- Inicio de la Seccion Servicios -->

		<section class="service text-center" id="service">
			<div class="container">
				<div class="row">
					<h2>servicios</h2>
					<h4></h4>
					<div class="row">
					  	<div class="col-md-3">
						    <div class="thumbnail">
						      	<img class="img-responsive" src="img/web.jpg" alt="web">
						      	<div class="caption">
						        	<h3>Web</h3>
						        	<p>Aplicaciones web para cualquier cliente y al menor costo</p>
						        	<p><a href="#" class="btn btn-default" role="button">Leer Mas</a></p>
						      	</div>
					    	</div>
					    </div>	
					    <div class="col-md-3">
					    	<div class="thumbnail">
					     	 	<img class="img-responsive"src="img/movil.jpg" alt="...">
					      		<div class="caption">
					        		<h3>Movil</h3>
					        		<p>Que el tamaño del dispositivo no sea una excusa.</p>
					        		<p><a href="#" class="btn btn-default" role="button">Leer Mas</a></p>
					      		</div>
					    	</div>
					    </div>	
					    <div class="col-md-3">
					    	<div class="thumbnail">
					      		<img class="image-responsive"src="img/disenoservicio.jpg" alt="...">
					      		<div class="caption">
					        		<h3>Diseño</h3>
					        		<p>di que tienes en mente, y plasmemos una marca</p>
					        		<p><a href="#" class="btn btn-default" role="button">Leer Mas</a></p>
					    		</div>
					  		</div>
					  	</div>
					  	<div class="col-md-3">
					    	<div class="thumbnail">
					     	 	<img class="img-responsive"src="img/servicioconsulta.jpg" alt="...">
					      		<div class="caption">
					        		<h3>Consultoria</h3>
					        		<p>Ofrecemos los expertos mas calificados</p>
					        		<p><a href="#" class="btn btn-default" role="button">Leer Mas</a></p>
					      		</div>
					    	</div>
					    </div>
					</div>
				</div>
			</div>
		</section>
		<!-- Fin de la seccion servicios -->


		<!-- team section

		<section class="team" id="team">
			<div class="container">
				<div class="row">
					<div class="team-heading text-center">
						<h2>our team</h2>

						<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
					</div>

					<div class="col-md-2 single-member col-sm-4">
						<div class="person">
							<img class="img-responsive" src="img/item1.jpg" alt="member-1">
						</div>

						<div class="person-detail">
							<div class="arrow-bottom"></div>
							<h3>Mr. Graham</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
						</div>
					
					</div>

					<div class="col-md-2 single-member col-sm-4">

						<div class="person-detail">
							<div class="arrow-top"></div>
							<h3>Mr. David</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
						</div>
						<div class="person">
							<img class="img-responsive" src="img/item2.jpg" alt="member-2">
						</div>
					</div>
					<div class="col-md-2 single-member col-sm-4">
						<div class="person">
							<img class="img-responsive" src="img/item3.jpg" alt="member-3">
						</div>
						<div class="person-detail">
							<div class="arrow-bottom"></div>
							<h3>Mr. Hovid</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
						</div>
					</div>

					<div class="col-md-2 single-member col-sm-4">
						<div class="person-detail">
							<div class="arrow-top"></div>
							<h3>Mr Jasak</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
						</div>
						<div class="person">
							<img class="img-responsive" src="img/item4.jpg" alt="member-4">
						</div>
					</div>


				</div>
			</div>
		</section><! end of team section -->

		<!-- Seccion de la api de google para el mapa -->
		<section class="api-map" id="contact">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 map" id="map"></div>
				</div>
			</div>
		</section><!-- fin de la seccion del mapa -->

		<!-- Inicio de la seccion Contacto-->
		<section class="contact">
			<div class="container">
				<div class="row">
						<div class="contact-caption clearfix">
							<div class="contact-heading text-center">
								<h2>Contactanos</h2>
							</div>

							<div class="col-md-5 contact-info text-left">
								<h3>Informacion de Contacto</h3>
								<div class="info-detail">
									<ul><li><i class="fa fa-calendar"></i><span>Lunes a Viernes:</span> 8:00 AM A 5:00 PM</li></ul>
									<ul><li><i class="fa fa-map-marker"></i><span>Dirección:</span> 123 El Tigre, Edo Anzoategui, Venezuela</li></ul>
									<ul><li><i class="fa fa-phone"></i><span>Telefonos:</span> </li></ul>
									<ul><li><i class="fa fa-envelope"></i><span>Email:</span> Vinrast@gmail.com</li></ul>
								</div>
							</div>


							<div class="col-md-6 col-md-offset-1 contact-form">
								<h3>Envianos un mensaje</h3>

								<form action="../agregar-exitoso" method ="post" onsubmit="return validacion()">
									<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
									<input class="name" name="nombre" id="nombre" type="text" placeholder="Nombre">
									<input class="email" name="email" id="correo" type="email" placeholder="Correo Electronico">
									<input class="phone" name="telefono" maxlength="11" id="telefono" type="text" placeholder="Telefono:">
									<textarea class="message" name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
									<input class="submit-btn" type="submit" value="Enviar">
								</form>
							</div>

						</div>
				</div>
			</div>
		</section><!-- Fin de la seccion contacto -->
 @include('layouts/footer')
	