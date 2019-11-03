<?php require_once('../Connections/tutorias.php');

$unixtime = time();

/*$query_Recordset1 = "SELECT * FROM registroalumno";
$Recordset1 = mysql_query($query_Recordset1, $tutorias) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);*/ 

if($_POST) {
	
$nombre	= addslashes(addslashes(trim($_POST['nombre'])));
$apellidopaterno = addslashes(addslashes(trim($_POST['apaterno'])));
$apellidomaterno = addslashes(addslashes(trim($_POST['amaterno'])));
$numcontrol = addslashes(addslashes(trim($_POST['numcontrol'])));
$carrera = addslashes(addslashes(trim($_POST['carrera'])));
$sexo = $_POST['sexo'];
$dia = addslashes(addslashes(trim($_POST['dia'])));
$mes = addslashes(addslashes(trim($_POST['mes'])));
$anio = addslashes(addslashes(trim($_POST['anio'])));
$lugarnac = addslashes(addslashes(trim($_POST['lugarnac'])));
$edad = addslashes(addslashes(trim($_POST['edad'])));
$edocivil = addslashes(addslashes(trim($_POST['edocivil'])));
$calle = addslashes(addslashes(trim($_POST['calle'])));
$numext = addslashes(addslashes(trim($_POST['numext'])));
$numint = addslashes(addslashes(trim($_POST['numint'])));
$colonia = addslashes(addslashes(trim($_POST['colonia'])));
$cp = addslashes(addslashes(trim($_POST['cp'])));
$correo = addslashes(addslashes(trim($_POST['correo'])));
$telefono = addslashes(addslashes(trim($_POST['telefono'])));
$trabaja = $_POST['trabaja'];
$especifique = addslashes(addslashes(trim($_POST['especifique'])));
	
}

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
<script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>

<style>
	
	body {
	margin:0 auto; 
	}
	
</style>

<script>
	
	/*function validar_email(email) {
		var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email) ? true : false;
	}*/
	
function guardarform() {

	if (document.registroform.nombre.value == "") {
		alert("Por favor escribe tu nombre.");
		document.registroform.nombre.focus();
		return false;
	}

	if (document.registroform.apellidopaterno.value == "") {
		alert("Por favor escribe tu apellido paterno.");
		document.registroform.apellidopaterno.focus();
		return false;
	}

	if (document.registroform.apellidomaterno.value == "") {
		alert("Por favor escribe tu apellido materno.");
		document.registroform.apellidomaterno.focus();
		return false;
	}

	if(document.registroform.numcontrol.value == "") {
		alert("Por favor escribe tu número de control.");
		document.registroform.numcontrol.focus();
		return false;
	}
	
	if (document.registroform.carrera.value == "") {

		alert("Por favor selecciona tu carrera.");
		document.registroform.carrera.focus();
		return false;
	}
	
	if (document.registroform.sexo.value == "") {

		alert("Por favor selecciona el sexo del alumno");
		document.registroform.origen_0.focus();
		return false;
	}
	
	if (document.registroform.dia.value == "") {

		alert("Por favor selecciona tu día de nacimiento.");
		document.registroform.dia.focus();
		return false;
	}
	
	if (document.registroform.mes.value == "") {

		alert("Por favor selecciona tu mes de nacimiento.");
		document.registroform.mes.focus();
		return false;
	}
	
	if(document.registroform.anio.value == "") {
		alert("Por favor selecciona tu año de nacimiento.");
		document.registroform.anio.focus();
		return false;
	}
	
	if(document.registroform.lugarnac.value == "") {
		alert("Por favor escribe tu lugar de nacimiento.");
		document.registroform.lugarnac.focus();
		return false;
	}
	
	if(document.registroform.edad.value == "") {
		alert("Por favor escribe tu edad.");
		document.registroform.edad.focus();
		return false;
	}
	
	if(document.registroform.edocivil.value == "") {
		alert("Por favor selecciona tu estado civil.");
		document.registroform.edocivil.focus();
		return false;
	}
	
	if(document.registroform.calle.value == "") {
		alert("Por favor escribe tu calle.");
		document.registroform.calle.focus();
		return false;
	}
	
	if(document.registroform.numext.value == "") {
		alert("Por favor escribe tu número exterior.");
		document.registroform.numext.focus();
		return false;
	}
	
	if(document.registroform.numint.value == "") {
		alert("Por favor escribe tu número interior.");
		document.registroform.numint.focus();
		return false;
	}
	
	if(document.registroform.colonia.value == "") {
		alert("Por favor escribe tu colonia.");
		document.registroform.colonia.focus();
		return false;
	}
	
	if(document.registroform.cp.value == "") {
		alert("Por favor escribe tu código postal.");
		document.registroform.cp.focus();
		return false;
	}	
	
	if(document.registroform.correo.value == "") {
		alert("Por favor escribe tu correo electrónico.");
		document.registroform.correo.focus();
		return false;
	}
	
	if(document.registroform.telefono.value == "") {
		alert("Por favor escribe tu teléfono.");
		document.registroform.telefono.focus();
		return false;
	}
	
	if (document.registroform.trabaja.value == "") {

		alert("Por favor selecciona si trabajas o no.");
		document.registroform.origen_0.focus();
		return false;
	}
	
	if(document.registroform.especifique.value == "") {
		alert("Por favor especifica en qué trabajas.");
		document.registroform.especifique.focus();
		return false;
	}
	
}
</script>

</head>

<body>
<div id="wrapper" style="width: 100%; float: left;">

	<div id="headerazul" style="width: 100%; float: left; background-color: #233D7B; margin-bottom: 50px;">
	
		<div id="seccionizq" style="width: 20%; float: left;">
		
			<div id="imagetecnm" style="width: 130px; height: 80px; float: left; background-image: url(../Images/tecnmlogoblanco.png); background-size: cover; margin-top: 5px; margin-bottom: 5px; background-position: center; margin-left: 5px;"></div>
			
		</div>
		
		<div id="secciontitulo" style="width: 60%; float: left; margin-top: 30px;">
		
			<div id="titulo" align="center" style="width: 100%; float: left; font-family: 'Montserrat', sans-serif; font-size: 25px; color: #fff; text-transform: uppercase; letter-spacing: 3px;">Sistema de Apoyo de Tutorías</div>
			
		</div>
		
		<div id="seccionder" style="width: 20%; float: left;">
		
			<div id="imageita" style="width: 90px; height: 80px; float: right; background-image: url(../Images/italogoblanco.png); background-size: cover; margin-top: 5px; margin-bottom: 5px; background-position: center; margin-right: 5px;"></div>
			
		</div>
		
		<div id="menuheader" style="width: 100%; float: left; margin-top: 30px;">
		
			<div id="menu1" style="width: calc(20% - 10px); float: left; margin: 5px; background-color: #1f3261; cursor: pointer;">
				
				<a href="../">
					<div id="opc1" align="center" style="width: 100%; float: left; font-family: 'Montserrat',sans-serif; font-size: 12px; color: #fff; letter-spacing: 3px; padding: 8px 5px; text-transform: uppercase;">Inicio</div>
				</a>
			</div>
			
			<div id="menu2" style="width: calc(20% - 10px); float: left; margin: 5px; background-color: #1f3261; cursor: pointer;">
				<div id="opc2" align="center" style="width: 100%; float: left; font-family: 'Montserrat',sans-serif; font-size: 12px; color: #fff; letter-spacing: 3px; padding: 8px 5px; text-transform: uppercase;">Tutores</div>
			</div>
			
			<div id="menu3" style="width: calc(20% - 10px); float: left; margin: 5px; background-color: #1f3261; cursor: pointer;">
				<div id="opc3" align="center" style="width: 100%; float: left; font-family: 'Montserrat',sans-serif; font-size: 12px; color: #fff; letter-spacing: 3px; padding: 8px 5px; text-transform: uppercase;">Alumnos</div>
			</div>
			
			<div id="menu4" style="width: calc(20% - 10px); float: left; margin: 5px; background-color: #1f3261; cursor: pointer;">
				<div id="opc5" align="center" style="width: 100%; float: left; font-family: 'Montserrat',sans-serif; font-size: 12px; color: #fff; letter-spacing: 3px; padding: 8px 5px; text-transform: uppercase;">Tutorías</div>
			</div>
			
			<div id="menu5" style="width: calc(20% - 10px); float: left; margin: 5px; background-color: #1f3261; cursor: pointer;">
				<div id="opc6" align="center" style="width: 100%; float: left; font-family: 'Montserrat',sans-serif; font-size: 12px; color: #fff; letter-spacing: 3px; padding: 8px 5px; text-transform: uppercase;">Ingresar</div>
			</div>
		
		</div>
	
	</div> <!--Fin headerazul -->
	
	
	<div id="title1" align="center" style="width: 100%; float: left; font-family: 'Open Sans', sans-serif; font-size: 24px; font-weight: bold; color: #000; margin-bottom: 50px;">Registro de Alumnos</div>

	
	<div id="formularioalumno" style="width: 70%; float: left; margin-right: 15%; margin-left: 15%; background-color: #fff;">
	
		<form id="registroform" name="registroform" action="" method="post" onsubmit="return(valida_envia())" enctype="multipart/form-data">
	
			<div id="etiquetas-nombre" style="width: calc(100% - 20px); float: left; margin: 0px 10px;">

				<div id="labelnombre" style="width: 33%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Nombre:</div>

				<div id="labelapaterno" style="width: 33%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Apellido paterno:</div>

				<div id="labelamaterno" style="width: 33%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Apellido materno:</div>

			</div> <!--Fin etiquetas nombre-->

			<div id="input-nombre" style="width: calc(100% - 20px); float: left; margin: 10px;">

				<input type="text" name="nombre" id="nombre" style="width: calc(30% - 2px); margin-right: 2%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 16px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

				<input type="text" name="apellidopaterno" id="apaterno" style="width: calc(30% - 2px); margin-right: 2%; float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 16px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

				<input type="text" name="apellidomaterno" id="amaterno" style="width: calc(30% - 2px); float: left; margin-right: 2%; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 16px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

			</div> <!--Fin input nombre-->

			<div id="fila1" style="width: 100%; float: left; margin-top: 20px;">

				<div id="etiquetas1" style="width: calc(100% - 20px); float: left; margin: 0px 10px;">

					<div id="labelnumcontrol" style="width: 33%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">No. Control:</div>

					<div id="labelcarrera" style="width: 33%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Carrera:</div>

					<div id="labelsexo" style="width: 33%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Sexo:</div>

				</div> <!--Fin etiquetas 1-->

				<div id="input1" style="width: calc(100% - 20px); float: left; margin: 10px;">

					<input type="text" name="numcontrol" id="numcontrol" style="width: calc(30% - 2px); margin-right: 2%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 16px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

					<select name="carrera" id="carrera" style="width: calc(31% - 2px); margin-right: 2%; float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px; font-family: 'Open Sans', sans-serif;">
						<option value="">Carrera</option>
						<option value="isc">Ing. en Sistemas Computacionales</option>
						<option value="iem">Ing. en Electromecánica</option>
						<option value="ibq">Ing. Bioquímica</option>
						<option value="ige">Ing. en Gestión Empresarial</option>
						<option value="arq">Arquitectura</option>
						<option value="la">Lic. en Administración</option>
						<option value="cp">Contador Público</option>

					</select>

					<div id="genero" style="width: calc(29% - 2px); float: left; margin-right: 2%; padding: 5px; border-radius: 10px; font-size: 15px; font-family: 'Open Sans', sans-serif;">

						 <input type="radio" name="sexo" style="margin-left: 20px;" id="sexo_0" value="femenino">
							   <label for="origen_0" style="margin-left:5px;">Femenino</label>

						 <input style="margin-left: 40px;" type="radio" name="sexo" id="sexo_1" value="masculino">
							<label for="origen_1" style="margin-left:5px;">Masculino</label>

					</div>

				</div> <!--Fin input1-->

			</div> <!--Fin fila 1-->

			<div id="fila2" style="width: 100%; float: left; margin-top: 20px;">

				<div id="etiquetas2" style="width: calc(100% - 20px); float: left; margin: 0px 10px;">

					<div id="labelfechanac" style="width: 33%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Fecha de nacimiento (DD/MM/AAAA):</div>

					<div id="labellugarnac" style="width: 33%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Lugar de nacimiento:</div>

					<div id="labeledad" style="width: 16.5%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Edad:</div>

					<div id="labeledocivil" style="width: 16.5%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Estado civil:</div>

				</div> <!--Fin etiquetas 2-->

				<div id="input2" style="width: calc(100% - 20px); float: left; margin: 10px;">

					<div id="fechanac" style="width: 33%; float: left;">
						
						<select id="dia" name="dia" style="width: calc(20% - 2px); margin-right: 3%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;">
							<option value="">Día</option>
							<option value="1" >01</option>
							<option value="2" >02</option>
							<option value="3" >03</option>
							<option value="4" >04</option>
							<option value="5" >05</option>
							<option value="6" >06</option>
							<option value="7" >07</option>
							<option value="8" >08</option>
							<option value="9" >09</option>
							<option value="10"  >10</option>
							<option value="11"  >11</option>
							<option value="12"  >12</option>
							<option value="13"  >13</option>
							<option value="14"  >14</option>
							<option value="15"  >15</option>
							<option value="16"  >16</option>
							<option value="17"  >17</option>
							<option value="18"  >18</option>
							<option value="19"  >19</option>
							<option value="20"  >20</option>
							<option value="21"  >21</option>
							<option value="22"  >22</option>
							<option value="23"  >23</option>
							<option value="24"  >24</option>
							<option value="25"  >25</option>
							<option value="26"  >26</option>
							<option value="27"  >27</option>
							<option value="28"  >28</option>
							<option value="29"  >29</option>
							<option value="30"  >30</option>
							<option value="31"  >31</option>
                    	</select>
						
						<select id="mes" name="mes" style="width: calc(38% - 2px); margin-right: 3%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;">
							<option value="">Mes</option>
							<option value="01" >Enero</option>
							<option value="02" >Febrero</option>
							<option value="03" >Marzo</option>
							<option value="04" >Abril</option>
							<option value="05" >Mayo</option>
							<option value="06" >Junio</option>
							<option value="07" >Julio</option>
							<option value="08" >Agosto</option>
							<option value="09" >Septiembre</option>
							<option value="10" >Octubre</option>
							<option value="11" >Noviembre</option>
							<option value="12" >Diciembre</option>
                    	</select>

						<select id="anio" name="anio" style="width: calc(24% - 2px); float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;">
							<option value="">Año</option>
                        <option value="2001" >2001</option>
                        <option value="2000" >2000</option>
                        <option value="1999" >1999</option>
                        <option value="1998" >1998</option>
                        <option value="1997" >1997</option>
                        <option value="1996" >1996</option>
                        <option value="1995" >1995</option>
                        <option value="1994" >1994</option>
                        <option value="1993" >1993</option>
                        <option value="1992" >1992</option>
                        <option value="1991" >1991</option>
                        <option value="1990" >1990</option>
                        <option value="1989" >1989</option>
                        <option value="1988" >1988</option>
                        <option value="1987" >1987</option>
                        <option value="1986" >1986</option>
                        <option value="1985" >1985</option>
					</select>

					</div>

					<div id="lugarnacimiento" style="width: 30%; float: left; margin-right: 3%;">

						<input type="text" name="lugarnac" id="lugarnac" style="width: calc(100% - 2px); margin-right: 2%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

					</div> <!--Fin lugar nacimiento-->

					<div id="edadalumno" style="width: 13%; float: left; margin-right: 3%;">

						<input type="text" name="edad" id="edad" style="width: calc(100% - 2px); margin-right: 2%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

					</div> 

					<select name="edocivil" id="edocivil" style="width: calc(16% - 2px); margin-right: 2%; float: left; padding: 3px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px; font-family: 'Open Sans', sans-serif;">
						<option value="">Estado civil</option>
						<option value="1">Soltero (a)</option>
						<option value="2">En una relación</option>
						<option value="3">Comprometido (a)</option>
						<option value="4">Unión libre</option>
						<option value="5">Casado (a)</option>
						<option value="6">Divorciado (a)</option>
						<option value="7">Separado (a)</option>
						<option value="8">Viudo (a)</option>

					</select>

				</div> <!--Fin input2-->

			</div> <!--Fin fila 2-->

			<div id="fila3" style="width: 100%; float: left; margin-top: 20px;">

				<div id="titledomicilio" align="center" style="width: 100%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D; margin-bottom: 20px;">Domicilio actual</div>

				<div id="etiquetas3" style="width: calc(100% - 20px); float: left; margin: 0px 10px;">

					<div id="labelcalle" style="width: 28%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Calle:</div>

					<div id="labelnumext" style="width: 12.5%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Num. Ext:</div>

					<div id="labelnumint" style="width: calc(12.5% - 10px); float: left; margin-left: 10px; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Num. Int:</div>

					<div id="labelcolonia" style="width: calc(30% - 20px); float: left; margin-left: 20px; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Colonia:</div>

					<div id="labelcp" style="width: 15%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">CP:</div>

				</div> <!--Fin etiquetas 3-->

				<div id="input3" style="width: calc(100% - 20px); float: left; margin: 10px;">

					<input type="text" name="calle" id="calle" style="width: calc(25% - 2px); margin-right: 2%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

					<input type="text" name="numext" id="numext" style="width: calc(10.5% - 2px); margin-right: 2%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

					<input type="text" name="numint" id="numint" style="width: calc(10.5% - 2px); margin-right: 2%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

					<input type="text" name="colonia" id="colonia" style="width: calc(25% - 2px); margin-right: 2%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

					<input type="text" name="cp" id="cp" style="width: calc(13% - 2px); margin-right: 2%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">


				</div> <!--Fin input3-->

			</div> <!--Fin fila 3-->


			<div id="fila4" style="width: 100%; float: left; margin-top: 20px;">

				<div id="label4" style="width: calc(100% - 20px); float: left; margin: 0px 10px;">

					<div id="labelcorreo" style="width: 33%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Correo electrónico:</div>

					<div id="labeltelefono" style="width: 18%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Teléfono:</div>

					<div id="labeltrabaja" style="width: 15%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">¿Trabajas?:</div>

					<div id="labelespecifique" style="width: 30%; float: left; font-family: 'Open Sans', sans-serif; font-size: 15px; color: #2D2D2D;">Especifique su trabajo:</div>



				</div> <!--Fin label 4-->

				<div id="input4" style="width: calc(100% - 20px); float: left; margin: 10px;">

					<input type="email" name="correo" id="correo" style="width: calc(30% - 2px); margin-right: 2%;  float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

					<input type="text" name="telefono" id="telefono" style="width: calc(14% - 2px); margin-right: 2%; float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">

					<div id="trabaja" style="width: calc(13% - 2px); float: left; margin-right: 2%; padding: 5px; border-radius: 10px; font-size: 15px; font-family: 'Open Sans', sans-serif;">

						 <input type="radio" name="trabaja" style="margin-left: 10px;" id="trabaja_0" value="si">
							   <label for="origen_0" style="margin-left:5px;">Sí</label>

						 <input type="radio" name="trabaja" style="margin-left: 10px;" id="trabaja_1" value="no">
							<label for="origen_1" style="margin-left: 10px;">No</label>

					</div>

					<input type="text" name="especifique" id="especifique" style="width: calc(30% - 2px); margin-right: 2%; float: left; padding: 5px; border-radius: 10px; border: 1px solid #233D7B; font-size: 15px;" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">


				</div> <!--Fin input 4-->

			</div> <!--Fin fila 4-->

			<input type="button" name="registrarse" id="registrarse" style="width: calc(30% - 13px); margin-left: 35%; float: left; margin-top: 50px; margin-bottom: 60px; background-color: #1f3261; border: 1px solid #1f3261; cursor: pointer; font-family: 'Open Sans', sans-serif; font-size: 16px; color: #fff; padding: 10px 5px; border-radius: 10px;" value="Registrarse" onclick="guardarform('0');">
		
		</form>
		
	</div> <!--Fin formulario-->
	
<div id="footer" style="width: 100%; float: left; height: 130px; margin-top: 10px; background-color: #fff;">
	
		<div id="contenidofooter" style="width: 90%; margin-top: 30px; float: left; margin-right: 5%; margin-left: 5%;">
			
			<div id="contenidologo" style="width: 100%; float: left;">
		
				<div id="logofooter" style="width: 100px; height: 100px; float: left; margin-left: 47%;">
					<img src="../images/italogo.png" style="width: 100%;">
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