<?php require_once('Connections/tutorias.php');
session_start();

$unixtime = time();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio | Bienvenido</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">

<style>
	
	body {
	margin:0 auto; 
	}
	
</style>

</head>

<body>
<div id="wrapper" style="width: 100%; float: left;">

	<div id="headerazul" style="width: 100%; float: left; background-color: #233D7B; margin-bottom: 50px;">
	
		<div id="seccionizq" style="width: 20%; float: left;">
		
			<div id="imagetecnm" style="width: 130px; height: 80px; float: left; background-image: url(Images/tecnmlogoblanco.png); background-size: cover; margin-top: 5px; margin-bottom: 5px; background-position: center; margin-left: 5px;"></div>
			
		</div>
		
		<div id="secciontitulo" style="width: 60%; float: left; margin-top: 30px;">
		
			<div id="titulo" align="center" style="width: 100%; float: left; font-family: 'Montserrat', sans-serif; font-size: 25px; color: #fff; text-transform: uppercase; letter-spacing: 5px;">Sistema de Apoyo de Tutorías</div>
			
		</div>
		
		<div id="seccionder" style="width: 20%; float: left;">
		
			<div id="imageita" style="width: 90px; height: 80px; float: right; background-image: url(Images/italogoblanco.png); background-size: cover; margin-top: 5px; margin-bottom: 5px; background-position: center; margin-right: 5px;"></div>
			
		</div>
		
		<div id="menuheader" style="width: 100%; float: left; margin-top: 30px;">
		
			<div id="menu1" style="width: calc(20% - 10px); float: left; margin: 5px; background-color: #1f3261; cursor: pointer;">
				<div id="opc1" align="center" style="width: 100%; float: left; font-family: 'Montserrat',sans-serif; font-size: 12px; color: #fff; letter-spacing: 3px; padding: 8px 5px;">Inicio</div>
			</div>
			
			<div id="menu2" style="width: calc(20% - 10px); float: left; margin: 5px; background-color: #1f3261; cursor: pointer;">
				
				<a href="tutores/">
				
					<div id="opc2" align="center" style="width: 100%; float: left; font-family: 'Montserrat',sans-serif; font-size: 12px; color: #fff; letter-spacing: 3px; padding: 8px 5px;">Tutores</div>
				</a>
			</div>
			
			<div id="menu3" style="width: calc(20% - 10px); float: left; margin: 5px; background-color: #1f3261; cursor: pointer;">
			
				<a href="alumnos/">
					<div id="opc3" align="center" style="width: 100%; float: left; font-family: 'Montserrat',sans-serif; font-size: 12px; color: #fff; letter-spacing: 3px; padding: 8px 5px;">Alumnos</div>
				</a>
			</div>
			
			<div id="menu4" style="width: calc(20% - 10px); float: left; margin: 5px; background-color: #1f3261; cursor: pointer;">
			
				<a href="tutorias/">
					<div id="opc5" align="center" style="width: 100%; float: left; font-family: 'Montserrat',sans-serif; font-size: 12px; color: #fff; letter-spacing: 3px; padding: 8px 5px;">Tutorías</div>
				</a>
			</div>
			
			<div id="menu5" style="width: calc(20% - 10px); float: left; margin: 5px; background-color: #1f3261; cursor: pointer;">
				
				<a href="ingresar/">
					<div id="opc6" align="center" style="width: 100%; float: left; font-family: 'Montserrat',sans-serif; font-size: 12px; color: #fff; letter-spacing: 3px; padding: 8px 5px;">Ingresar</div>
				</a>
			</div>
		
		</div>
	
	</div> <!--Fin headerazul -->
	
	<div id="contenedorfoto" style="width: calc(100% - 300px); margin-left: 150px; margin-right: 150px; position: absolute; z-index: 1; top: 30%;">
	
		<div id="fotobackground" style="width: 100%; height: 290px; float: left; background-image: url(Images/estudiantes1.jpg); background-size: cover; background-position: center; filter: blur(2px); position: absolute; z-index: 2; top: 35%;"></div>
	
		<div id="textoenimagen" align="center" style="width: 100%; float: left; font-family: 'Open Sans', sans-serif; font-size: 18px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black; color: #fff; position: absolute; z-index: 3; margin-top: 260px; text-transform: uppercase; letter-spacing: 5px;">Sistema de Tutorías del Instituto Tecnológico de Acapulco</div>
		
	</div> <!-- Fin contenedor foto-->
	
	<div id="lineaseparadora1" style="width: calc(100% - 300px); margin-left: 150px; margin-right: 150px; float: left; margin-top: 330px; margin-bottom: 50px; height: 1px; background-color: #1f3261;"></div>
	
	<div id="contenidocolumna" style="width: calc(100% - 300px); margin-left: 150px; margin-right: 150px; float: left;">
		
		<div id="title1" align="center" style="width: 100%; float: left; font-family: 'Open Sans', sans-serif; font-size: 20px; font-weight: bold; color: #233d7b; margin-bottom: 20px;">¿Por qué tomar tutorías?</div>
		
		<div id="texto" align="center" style="width: 100%; float: left; font-family: 'Open Sans', sans-serif; font-size: 14px; color: #000; margin-bottom: 50px; text-align: left; line-height: 25px;">Lorem ipsum dolor sit amet consectetur, adipiscing elit varius leo sed, pharetra et urna faucibus. Nec risus sagittis venenatis lectus dignissim placerat porta lacus potenti euismod, luctus consequat elementum imperdiet eros magnis tristique dis inceptos, phasellus orci nascetur cum a id quis dictumst malesuada. Urna cras imperdiet consequat montes nullam porta aliquam lectus non mi, ante auctor viverra netus nostra nisl diam quis magna, praesent phasellus penatibus etiam sem hac eget natoque lacus.
		<br>
		Tristique tempus cubilia semper rhoncus scelerisque convallis vivamus lectus tincidunt, ac class enim montes hac phasellus auctor fusce habitasse, molestie vehicula laoreet metus justo placerat etiam tellus. Rutrum orci fringilla a erat cubilia dui blandit egestas, praesent gravida taciti potenti litora euismod volutpat, tortor nisl habitasse enim libero placerat imperdiet. Sapien mi nibh porta eget aliquam torquent diam tincidunt aenean, arcu id convallis in leo mollis porttitor urna, neque faucibus libero eleifend lobortis fermentum turpis quis.</div>
		
		
		<div id="lineaseparadora2" style="width: 100%; float: left;margin-bottom: 30px; height: 1px; background-color: #1f3261;"></div>
		
		<div id="title2" align="center" style="width: 100%; float: left; font-family: 'Open Sans', sans-serif; font-size: 20px; font-weight: bold; color: #233d7b; margin-bottom: 40px;">Tutores</div>
		
		<div id="fotostutores" style="width: calc(100% - 40px); float: left; margin-left: 20px; margin-right: 20px;">
		
			<div id="foto1" style="width: calc(25% - 40px); margin-left: 20px; float: left; padding-bottom: calc(25% - 40px); border-radius: 50%; background-color: #A6A1A1; background-image: url(Images/tonystark.jpeg); background-size: cover; background-position: center;"></div>
		
			<div id="foto2" style="width: calc(25% - 40px); margin-left: 40px; float: left; padding-bottom: calc(25% - 40px); border-radius: 50%; background-color: #A6A1A1; background-image: url(Images/billgates.jpg); background-size: cover; background-position: center;"></div>
		
			<div id="foto3" style="width: calc(25% - 40px); margin-left: 40px; float: left; padding-bottom: calc(25% - 40px); border-radius: 50%; background-color: #A6A1A1; background-image: url(Images/tonystark.jpeg); background-size: cover; background-position: center;"></div>
		
			<div id="foto4" style="width: calc(25% - 40px); margin-left: 40px; float: left; padding-bottom: calc(25% - 40px); border-radius: 50%; background-color: #A6A1A1; background-image: url(Images/billgates.jpg); background-size: cover; background-position: center;"></div>
		
		</div>
		
	</div>
	
	<div id="footer" style="width: 100%; float: left; height: 130px; margin-top: 7%; background-color: #fff;">
	
		<div id="contenidofooter" style="width: 90%; margin-top: 30px; float: left; margin-right: 5%; margin-left: 5%;">
			
			<div id="contenidologo" style="width: 100%; float: left;">
		
				<div id="logofooter" style="width: 100px; height: 100px; float: left; margin-left: 47%;">
					<img src="Images/italogo.png" style="width: 100%;">
				</div>
			
			</div>
		
			<div id="linksfooter" align="center" style="width: calc(100% - 200px); float: left; margin-left: 100px; margin-right: 100px; margin-top: 10px;">
				
				<div id="text1" align="center" style="width: 100%; font-size: 13px; margin-bottom: 20px; font-family: 'Open Sans', sans-serif; line-height: 1.5px; float: left; text-decoration: none; color: #20385C;">Instituto Tecnológico de Acapulco</div>
					
				<div id="text2" align="center" style="width: 100%; font-size: 13px; margin-bottom: 20px; font-family: 'Open Sans', sans-serif; line-height: 1.5px; float: left; text-decoration: none; color: #20385C;">Av. Instituto Tecnológico s/n Crucero del Cayaco C.P. 39905</div>
				
				<div id="text3" align="center" style="width: 100%; font-size: 13px; margin-bottom: 20px; font-family: 'Open Sans', sans-serif; line-height: 1.5px; float: left; text-decoration: none; color: #20385C;">E-mail de contacto: com.difusion@it-acapulco.edu.mx, direccion@it-acapulco.edu.mx</div>
				
				<div id="text4" align="center" style="width: 100%; font-size: 13px; margin-bottom: 20px; font-family: 'Open Sans', sans-serif; line-height: 1.5px; float: left; text-decoration: none; color: #20385C;">Teléfonos (744) 442-9010 al 19</div>
				
			</div> <!--Fin links footer-->
			
		</div> <!--Fin contenedor footer-->
		
	</div> <!--Fin footer-->
			
</div> <!--Fin wrapper-->
</body>
</html>
