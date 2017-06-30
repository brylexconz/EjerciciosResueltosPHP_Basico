<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CASO 01 </title>
</head>
<body>


<?php
	$cantidad=0;

	if(isset($_GET['enviar'])):

		$cantidad = $_GET['txtcantidad'];

	endif;

	
if(!isset($_GET['enviar'])):
?>
<form action="">
	<table>
		<tbody>		
			<tr id="cant">
				<td><input type="number" name="txtcantidad" placeholder="Ingrese Cantidad"></td>
			</tr>		
			<tr>
				<td><input type="submit" name="enviar" value="Mostrar Cajas"></td>

			</tr>
		</tbody>
	</table>
</form>
<?php
endif;

if ($cantidad!=0):
?>
<form action="" method="post">
	<table>
		<tbody>
		<?php for ($i=0; $i < $cantidad; $i++): 
			echo '<tr>
					<td><input type="number" name="txtcaja[]"></td>
				</tr>';
		endfor; ?>
		<tr>
			<td><input type="submit" value="Calcular" name="calcular"></td>
			<td><a href="./caso001.php">Volver</a></td>
		</tr>
		</tbody>
	</table>
</form>
<?php 
	if(isset($_POST['calcular'])):

	echo "MAXIMO : ".max($_POST['txtcaja'])."</br>";
	echo "MINIMO : ".min($_POST['txtcaja']);

	/*
		extract($_POST);

		echo "MAXIMO : ".max($txtcaja)."</br>";
		echo "MINIMO : ".min($txtcaja)."</br>";
		print_r($txtcaja) ;
	*/


	endif;


endif;?>

	
</body>
</html>

<!--

isset  == is set (esta establicido ? esta inicializado ?)

-->