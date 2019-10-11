<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<div class="container">
		<div class="row">
			
		
			<div class="col-sm-12 mb-5" id="fila1">
				<?= $this->Html->link('<i class="fa fa-user"></i> Socio', ['controller' => 'Users', 'action' => 'index'],['class' => 'btn1 ','escape'=>false]);?>
			
			</div>
			<div class="col-sm-12 mt-3 mb-5" id="fila1">
				<?= $this->Html->link('<i class="fas fa-chalkboard-teacher"></i> Profes ', ['controller' => 'Users', 'action' => 'index'],['class' => ' btn2 ','escape'=>false]);?>
			</div>
			<div class="col-sm-12 mt-3" id="fila1">
				<?= $this->Html->link('<i class="fas fa-plus"></i> Cursos ', ['controller' => 'Users', 'action' => 'index'],['class' => ' btn3 ','escape'=>false]);?>
			</div>
		</div>
	</div>

	<style type="text/css">
		body{
			
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-image: url(../img/fondomenu.jpg);
			background-attachment: fixed;
		}
		.container{
			text-align: center;
    		margin-top: 100px;
		}
		.btn1{
			margin-bottom: 45px;
			padding: 20px 60px 20px 60px;
    		border-radius: 50px;
    		border: outset;
    	    background-image: url(../img/salpicadoazul.png);
    		background-size: 100% ;
    		background-repeat: no-repeat;
   			background-position: center;
   			border-color: #6f0061;
   			background-color: antiquewhite;

		}
		.btn2{
			margin-bottom: 45px;
			padding: 20px 51px 20px 51px;
    		border-radius: 50px;
    		border: outset;
		    background-image: url(../img/salpicadovioleta.png);
    		background-size: 100% ;
    		background-repeat: no-repeat;
   			background-position: center;
   			border-color: #6f0061;
   			background-color: antiquewhite;
   			
		}
		.btn3{
			margin-bottom: 45px;
			padding: 20px 51px 20px 51px;
    		border-radius: 50px;
    		border: outset;
    	    background-image: url(../img/salpicadoverde.png);
    		background-size: 100% ;
    		background-repeat: no-repeat;
   			background-position: center;
   			border-color:#6f0061;
   			background-color: antiquewhite;
   			
		}
		a{
			color:black;
			font-family: 'Audiowide', cursive;
			font-size: x-large;
		}	
		a:hover {
    	color: #000000;
   	    text-decoration: underline;
    	cursor: zoom-in;
    	font-size: xx-large;
    	text-decoration: none;
    	transition: all 1s ease-in-out;
    	cursor: pointer;

	</style>
</body>
</html>