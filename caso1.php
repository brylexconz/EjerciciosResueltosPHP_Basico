<!-- 
Crea una Apliacion que permite mostrar una tabla con 3 columnas y 200 filas , en la primera columna muestra un un casilla de verificacion y la segunda muestra del 1 al 200 de manera descendente y la tercera columnas de manera accedente, coloreando las filas donde el numero se par de un color diferente al impar.
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>


	<style>

		.par{
			background-color: green;
		}

		.impar{
			background-color: yellow;
		}
	</style>
</head>
<body>


<table border="1" cellpadding="0" cellspacing="0">
	<tbody>
	<?php for($i=1;$i<=200;$i++):?>
		<tr>
			<td><input type="checkbox"></td>
			<?php
				if($i % 2 == 0):

					echo "<td class='par'>$i</td>";
					echo "<td class='impar'>".(201-$i)."</td>";
				else:
					echo "<td class='impar'>$i</td>";
					echo "<td class='par'>".(201-$i)."</td>";
				endif;

			?>
		</tr>
	<?php endfor;?>
	</tbody>
</table>

</body>
</html>