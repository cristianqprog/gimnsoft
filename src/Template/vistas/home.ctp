<?= $this->Html->css('stylehome.css')?>

<!-- -------------MENU-------------------------->
	<nav class="navbar font-weight-bold navbar-expand-lg navbar-light fixed-top be">
		<a class="navbar-brand" href="#">GimnSoft</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="             #navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded=" false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		    </button>

	    <div class="collapse navbar-collapse  ml-4 text-center" id="navbarSupportedContent">
	  	    <div class="navbar-nav mr-auto ml-auto text-center ">
		  		<a class="nav-item nav-link" href="#" id="inicio">Inicio</a>
		  		<a class="nav-item nav-link" href="#" id="actividades">Actividades</a>
		  		<a class="nav-item nav-link" href="#" id="price">Precio</a>
		  		<a class="nav-item nav-link" href="#" id="contac" >Contacto</a>
		    </div>
	    
	        <div class="d-flex flex-row justify-content-center ">
	    	    <?= $this->Html->link('<i class="fa fa-sign-in"></i> Menú General', ['controller' => 'vistas', 'action' => 'menuGral'],['class' => 'btn btn-iniciosesion','escape'=>false]);?>
	    	</div>
	    </div>
	</nav>
 <!-- -------------MENU-------------------------->			
	
 <!----------------CAROUSEL-----------------------> 
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" id="inicio">
			<ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
	    <div class="carousel-inner" role="listbox">
		    <div class="carousel-item slider-height  active"  >
		      <?= $this->Html->image('zumbareal.jpg', array('alt' => 'CakePHP', 'class' => 'd-block  w-100'));?>
		    </div>
		    <div class="carousel-item slider-height "  >  
				<?= $this->Html->image('crosfitreal.jpg', array('alt' => 'CakePHP', 'class' => 'd-block w-100'));?>
		    </div>
		    <div class="carousel-item slider-height"  >
		        <?= $this->Html->image('crosfitreal.jpg', array('alt' => 'CakePHP', 'class' => 'd-block w-100'));?>   	
		    </div>
	    </div>
	  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Anterior</span>
		</a>
	    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Siguiente</span>
	    </a>
	</div>
<!-----------------CAROUSEL---------------------> 
	
<!-----------------TEXTO CLASES----------------->

	<div class="container" id="texto1" >
		<div class="row justify-content-center align-items-center minh-100 " >
			 <p>Conocé Nuestras Actividades</p>
		</div>
	</div>
<!-----------------TEXTO CLASES----------------->

<!-----------------CARD------------------------->
	<section class="container-fluid" id="actividades" >
		<div class="container" >
		  	<div class="row pt-3">
				<div class="col-md-6 col-lg-4 ">
					<div class="card text-white" data-aos="flip-left" 
						data-aos-easing="ease-out-cubic" data-aos-duration="2000">
							<?=
							$this->Html->image('zumbaclases.jpg', array('alt' => 'CakePHP', 'class' => 'card-img-top'));
							?>
						<div class="card-body">
							<h5 class="card-title">Zumba</h5>
							<p class="card-text">Clases grupales de una hora, estas mismas son para cualquier 		genero y edad. Con Zumba vas a quemar de 50 a 300 calorias por hora. Nuestros 		Profes te guiaran para que vibres al ritmo de la Música.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 pb-1 col-lg-4 ">
					<div class="card text-white "  data-aos="fade-up"
	     					data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
							<?=
							$this->Html->image('crossfitclases.jpg', array('alt' => 'CakePHP', 'class' => 'card-img-top'));
							?>
						<div class="card-body">
							<h5 class="card-title">Crossfit</h5>
							<p class="card-text">Ejercicios grupales guiados con profesores, que podras 			convinar entrenamiento aerobico y otras disciplinas más. Adapta para      
								cualquier persona, ya que esta divida en grupos segun su capacidad.    
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4" id="teredad ">
					<div class="card text-white" data-aos="flip-right" data-aos-easing="ease-out-cubic"
	     					data-aos-duration="2000" >
							<?=
							$this->Html->image('abueloclases.jpg', array('alt' => 'CakePHP', 'class' => 'card-img-top'));
							?>
						<div class="card-body">
							<h5 class="card-title">3º Edad y Rehabilitación</h5>
							<p class="card-text">This is a wider card with supporting text below as a       
								natural lead-in to additional content. This content is a little bit longer.
							</p>
						</div>
					</div>
				</div>
			</div>
	</section>
		</div>	
		
<!-----------------CARD------------------------->


<!--texto precios-->

	<div class="container" id="texto2" >
	<div class="row justify-content-center align-items-center minh-100 " >

		<p class="font-italic" style="font-size: 110%;" data-aos="flip-left" data-aos-easing="ease-out-cubic"
     data-aos-duration="3000">Precios</p>
				 
	</div>
</div>

<!---------price---------------->
<div class="pricing-area" id="price">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-pricing">
					<div class="head-text">
						<h3>Zumba</h3>
					</div>
					<div class="price-area mb-5">
						$500 <span class="duration">Lunes, Miercoles y Viernes</span>
					</div>
					<div class="price-area mt-1">
						$350<span class="duration">2 veces x semana</span>
					</div>
				</div>
				
			</div>

		<div class="col-lg-4 col-md-6">
				<div class="single-pricing best-deal">
					<div class="head-text">
						<h3>Crossfit</h3>
					</div>
					<div class="price-area">
						$450 <span class="duration">Lunes a Viernes</span>
					</div>
					<div class="price-area">
						$300 <span class="duration">2 veces x semana</span>
					</div>
					<div class="price-area">
						$90 <span class="duration">x día</span>
					</div>
				</div>
		</div> 

		<div class="col-lg-4 col-md-6">
				<div class="single-pricing">
					<div class="head-text">
						<h3>Basic</h3>
					</div>
					<div class="price-area">
						$11 <span class="duration">Por Dia</span>
					</div>
					<div class="feature-area">
						<ul>
							<li>texto</li>
							<li>texto</li>
							<li>texto</li>
						</ul>
					</div>
				</div>
				
	</div> 
</div>
		
</div>
</div>


<!--price-->

<!-------------FOOTER Y CONTACTO FORM------------->

<div id="contac">
	<div class="row" id="contatti">
	<div class="container mt-5" >

	    <div class="row" style="height:550px;">
	      <div class="col-md-6 maps" >
	         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3343.560640487307!2d-68.44839678524987!3d-33.068032085372394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e439def6645eb%3A0x6c0b9fcede0b6dc4!2sJuana%20Flores%2C%20Mendoza%2C%20Argentina!5e0!3m2!1ses!2sit!4v1569877562161!5m2!1ses!2sit" width="200" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	      </div>
	      
	      <div class="col-md-6">
	      	<section class="tituloform">
	        <h2 class="text-uppercase mt-3 font-weight-bold text-white">Envianos un mensaje con tu consulta</h2>
	        </section>
	       <?= $this->Form->create(null, ['url' => ['action' => 'email']]) ?>
	          <div class="row" >
	            <div class="col-lg-6">
	              <div class="form-group">
	                <?= $this->Form->input('name', ['class' => 'form-control mt-2', 'placeholder' => 'Nombre', 'label' => false, 'required']) ?>
	              </div>
	            </div>
	            <div class="col-lg-6">
	              <div class="form-group">
	                <?= $this->Form->input('lastname', ['class' => 'form-control mt-2', 'placeholder' => 'Apellido', 'label' => false, 'required']) ?>
	              </div>
	            </div>
	            <div class="col-lg-6">
	              <div class="form-group">
	               <?= $this->Form->input('email', ['class' => 'form-control mt-2', 'placeholder' => 'Correo Electronico', 'label' => false, 'required']) ?>
	        
	              </div>
	            </div>
	            <div class="col-lg-6">
	              <div class="form-group">
	                <?= $this->Form->input('number', ['class' => 'form-control mt-2', 'placeholder' => 'numero de telefono', 'label' => false, 'required']) ?>
	              </div>
	            </div>
	            <div class="col-12">
	              <div class="form-group">
	              	<?= $this->Form->textarea('text', ['id'=>'exampleFormControlTextarea1','rows'=>'3', 'placeholder' => 'Ingrese su Mensaje', 'label' => false, 'required']) ?>
	               
	              </div>
	            </div>
	            <div class="col-12">
	            <div class="form-group">
	              <div class="form-check">
	                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" >
	                <label class="form-check-label" for="invalidCheck2">
	                  CAPTCHA
	                </label>
	              </div>
	            </div>
	            </div>
	            <div class="col-12">
	            	 <?= $this->Form->button('<i class="far fa-paper-plane", id="enviar"></i>',['class' => 'btn btn-enviar']); ?>
	            </div>
	          </div>
	        <?= $this->Form->end() ?>
	        <div class="text-white">
	        <h2 class="text-uppercase mt-4 font-weight-bold mb-5" >NUESTRAS REDES Y CONTACTOS</h2>
	        	<section>
	        		<div class="redes" id="facebook">
	        			<?=$this->Html->link('<i class="fab fa-facebook-f"></i>', 'www.facebook.com',['class'=>'iconef', 'escape'=>false]); ?>
	        		</div>
	        		<div class="redes" id="instagram">
	        			<?=$this->Html->link('<i class="fab fa-instagram"></i>', 'https://www.instagram.com/crisquevedo01/',['class'=>'iconei','target' => '_blank', 'escape'=>false]); ?>
	        		</div>
	        	
	        	<style type="text/css">
	        		.redes{
	        			width: 50px;
	        			height: 50px;
	        			float: left;
	        			margin-left: 20px;
	        			transition: all 0.4s ease-out;
	        			border-radius: 50px;
	        		}
	        		
	        		.redes#facebook{
	        		background: linear-gradient(23deg,#0619f5, #000000);
	        			 
	        		}
	        		.redes#instagram{
	        		background: linear-gradient(180deg,#f506cd, #e3e608);
	        		}
	        		.iconef{
	        		padding-left: 14px;
    				font-size: 32px;
	        		
	        			
	        		}
	        		.iconei{
	        		padding-left: 11px;
    				font-size: 32px;
	        		
	        			
	        		}
	        		.redes:hover{
	        			cursor: pointer;
	        			transform: translateY(-20px);

	        		}
	        	</style>
	        </div>
	        </div>
	    </section>
	      </div>

	    </div>
	</div>
	</div>
</div>	
<!--FOOTER-->	
<!--script-->	 
<?= $this->Html->script(['home.js']) ?>

	 
