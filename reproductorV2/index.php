<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Reproductor </title>
		<link rel="stylesheet" type="text/css" href="libs/style.css">
		<script src="js/jquery1.8.3.js"></script>
	<script type="text/javascript" src="media/js/reproductor.js"></script>
	<link rel="stylesheet" type="text/css" href="media/css/reproductor.css">
		<script type="text/javascript">
/*$(document).on("ready",inicial)
function inicial () {
	$("#mi").on("click", oc);
}
function oc()
{

	var listaCss=
	{
		
	  	
		display:"block",
		opacity:"1",		
        
			
	};

	$("#repro").css(listaCss);
}*/

		</script>
		
</head> 
<body> 
<style type="text/css">
.regular-radio{-webkit-appearance: none;
-webkit-appearance: none;
background-image: url("play.png");
padding: 40px 40px;
width: 50px;
display: inline-block;

}
</style>

	</head>
<body>
	<header>
		<h1>Music<h1>

	</header>
	
	<section id='music'>

	<nav>
		+Agregar

	</nav>

<?php 
	include('libs/conexion.php');
	include('/libs/lista.php');
	?>
	</section>

	<section id='repro'>
<div id="cuerpo">

		
</div>
<?php	


	//include('media/index.php');

?>



	</section>
	 	

</body>