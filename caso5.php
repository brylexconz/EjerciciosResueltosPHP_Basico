<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CASO 5</title>

	<style>
		div{

			display: block;
		}

		#contenido{
			background: tomato;
			width: 15%;
			padding: 10px;
			margin: auto;
			border-radius: 5px;
			border: 1px solid black
		}
		h5{
			text-align: center
		}
	</style>


</head>

<body>	
<div id="contenido">
<form action="" method="post">
	<h5>LISTA DE JUEGOS</h5>
	<div><input type="checkbox" name="ck_juego[]" value="10">Carros Chocones [S/. 10.00]</div>
	<div><input type="checkbox" name="ck_juego[]" value="12">Montaña Rusa [S/. 12.00]</div>
	<div><input type="checkbox" name="ck_juego[]" value="8">Barco Pirata [S/. 8.00]</div>
	<h5>TIPO DE TICKET</h5>
	<div><input type="radio" name="r_tipo" value="adulto">Adulto</div>
	<div><input type="radio" name="r_tipo" value="niño">Niño</div>
	<h5>APLICAR DESCUENTO</h5>
	<div><input type="checkbox" name="ck_descuento">Descuento</div>
	</br>
	<div><input type="submit" name="procesar" value="PROCESAR PEDIDO"></div>

	</div>
</form>

<?php

if(isset($_POST['procesar'])):

	extract($_POST);

	$costo=array_sum($ck_juego);
	$descuento=($r_tipo=="niño")?$costo*0.5:0;				//variable=(condicion)?cuando es verdadero : cuando es falso;
	@$descuento_adicional=($ck_descuento)?$costo*0.1:0;
	$total=$costo-$descuento-$descuento_adicional;

	echo "<div>COSTO DEL TICKET		:".$costo."</div>";
	echo "<div>DESCUENTO 			:".($descuento+$descuento_adicional)."</div>";
	echo "<div>PRECIO CON DESCUENTO	:".$total."</div>";





endif;


?>