<?= $this->Html->css('pricingcss')?>

<nav id="menu" class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" >
         <?=
         $this->Html->image('logo.png', array('alt' => 'CakePHP', 'class' => 'navbar-brand logo', 'width'=>"60",'height'=>"60" ));
    
        ?>
        <?=$this->Html->link('GimnSoft', ['controller' => 'Users', 'action' => 'index'],['class' => 'navbar-brand' ]);?>
     
                   <br>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <?=$this->Html->link('Home', ['controller' => 'Users', 'action' => 'index'],['class' => 'nav-link']);?>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Disabled</a>
      </li>
    </ul>
   
  </div>


</nav>
<div class="container">
	<div id="carouselExampleCaptions" class="carousel slide h-12" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active" >
				<?=
				 $this->Html->image('chica.jpg', array('alt' => 'CakePHP', 'class' => 'd-block w-100'));
				 ?>
				 
			 
				<div class="carousel-caption d-none d-md-block">
					<h5>Crossfit</h5>
					<p>Entrenamiento basado en ejercicios constantemente variados, con movimientos funcionales ejecutados a alta intensidad.</p>
					<?= $this->Form->button('Leer Más',['class' => 'btn btn-outline-primary']) ?>
				</div>
			</div>
			<div class="carousel-item">
				<?=
				 $this->Html->image('chica.jpg', array('alt' => 'CakePHP', 'class' => 'd-block w-100'));
				 ?>
				 
				<div class="carousel-caption d-none d-md-block">
					<h5>Zumba</h5>
					<p>Al ritmo de la música Latina, bailaras y tonificaras tu cuerpo</p>
					<?= $this->Form->button('Leer Más',['class' => 'btn btn-outline-primary']) ?>
				</div>
			</div>
			<div class="carousel-item" >
				<?=
				 $this->Html->image('chica.jpg', array('alt' => 'CakePHP', 'class' => 'd-block w-100'));
				 ?>
				
				<div class="carousel-caption d-none d-md-block" >
					<h5>GimnSoft</h5>
					<?= $this->Form->button('Leer Más',['class' => 'btn btn-outline-primary']) ?>
					<p></p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Siguiente</span>
		</a>
	</div>
</div>
	


<div class="container-fluid">
	<div class="row justify-content-center align-items-center minh-100 my-5">

			 <p class="font-italic" style="font-size: 110%;">Conocé Nuestras Actividades</p>
				 
	</div>
	<!---->
	<!--card-->
	<style type="text/css">
		.single-pricing:hover{
			background: #da4357;
			color: #fff;
			box-shadow: 0 0 15px rgba(0,0,0,1);
			transform: scale(1.1);
			z-index: 1;
			border-radius: 25px;
		}
	</style>
	<section class="container">
		<div class="row">
			<div class="col-md-6 pb-1 col-lg-4 ">
				<div class="card text-white bg-primary">
						<?=
						$this->Html->image('chica.jpg', array('alt' => 'CakePHP', 'class' => 'card-img-top'));
						?>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					 </div>
				</div>
			</div>
			<div class="col-md-6 pb-1 col-lg-4 ">
				<div class="card text-white bg-primary">
						<?=
						$this->Html->image('chica.jpg', array('alt' => 'CakePHP', 'class' => 'card-img-top'));
						?>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					 </div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 ">
				<div class="card text-white bg-primary">
						<?=
						$this->Html->image('chica.jpg', array('alt' => 'CakePHP', 'class' => 'card-img-top'));
						?>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					 </div>
				</div>
			</div>
		</div>
	</section>

</div>

<!---->
<div class="container-fluid">
	<div class="row justify-content-center align-items-center minh-100 my-5">

			 <p class="font-italic" style="font-size: 110%;">Precios</p>
				 
	</div>

<!--price-->
<div class="pricing-area" >
	<div class="container">
		<div class="row">
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

		<div class="col-lg-4 col-md-6">
				<div class="single-pricing best-deal">
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
		 

		 

<script>
      $(window).scroll(function() {
        if ($("#menu").offset().top > 56) {
            $("#menu").addClass("bg-transparent");
        } else {
            $("#menu").removeClass("bg-transparent");
        }
       

      });
</script>
	 
	