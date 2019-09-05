<?= $this->Html->css('pricingcss')?>

			<!--menu-->

	<nav class="navbar font-weight-bold navbar-expand-lg navbar-light fixed-top be">
	
			<a class="navbar-brand" href="#">GimnSoft</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

  <div class="collapse navbar-collapse ml-4" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Clases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Precios </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nosotros</a>
      </li>
    </ul>
  </div>
</nav>
		
	</nav> 
			
	
  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      
      <?= $this->Html->image('chica.jpg', array('alt' => 'CakePHP', 'class' => 'd-block w-100'));?>
      	<div class="carousel-caption d-none d-md-block">
          <h5>Slider 1</h5>
          <p>Loren ipsum dfdss ertttt fdddd ftfgtf hhggfdd ert dfghgf</p>
        </div>
    </div>
    <div class="carousel-item">
      
      <?= $this->Html->image('chica.jpg', array('alt' => 'CakePHP', 'class' => 'd-block w-100'));?>
      	<div class="carousel-caption d-none d-md-block">
          <h5>Slider 2</h5>
          <p>Loren ipsum dfdss ertttt fdddd ftfgtf hhggfdd ert dfghgf</p>
        </div>
    </div>
    <div class="carousel-item">
     
      <?= $this->Html->image('chica.jpg', array('alt' => 'CakePHP', 'class' => 'd-block w-100'));?>
      	<div class="carousel-caption d-none d-md-block">
          <h5>Slider 3</h5>
          <p>Loren ipsum dfdss ertttt fdddd ftfgtf hhggfdd ert dfghgf</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
        if ($('nav').offset().top > 90) {
            $('nav').addClass('ba');
        } else {
            $('nav').removeClass('ba');
        }
      });
</script>
	 
<style type="">
	.be {
	background-color:  #5a021b !important;
	transition: all 1s ease;	
	}
	.ba {
		background-color:  #4c0116cf !important;
		padding-top:1.2rem;
		padding-bottom: 1.2rem;  
		transition: all 1s ease;

	}

</style>