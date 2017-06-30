<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style>
	*{
		
		padding-bottom: 3px
	}
	html{
		background-color: purple;
		text-align: center
	}
	body{
		
		background-color: white;
		height: 600px;
		width: 800px;
		margin: 20px auto;
		
	}
	
	table{
		
		margin:auto;
	}
	
	</style>

</head>

<body>

<script>
	function muestramelo(nombre,apellido){
		//document.location="http://localhost/PRACTICANDO/resultado.php";
		
		alert(nombre);	
		alert(apellido);
		
	}
	
	</script>



<form action="" method="get">
	
	<table>
		<tr>
			<td>INGRESE LA CANTIDAD DE ALUMNOS</td>
			<td><input type="text" name="txtCantidad"></td>
			<td><input type="submit" value="ENVIAR"></td>
		</tr>
	</table>
	
	
</form>
<!--

-->
<form action="" method="get">
<table width="200" border="1">
  <tbody>
    <tr>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
    </tr>
    

<?php
	

//echo("LA CANTIDAD INGRESADA ES ".);
	  
	  $cantidad=null;
	  if(isset($_GET["txtCantidad"])){
		  $cantidad=$_GET["txtCantidad"];
		  
	  }
	
	
	for($i=0;$i<$cantidad;$i++){
		
		echo('<tr><td><input type="text" name="txtNombre[]"></td>
      <td><input type="text" name="txtApellido[]"></td></tr>');
			
	}
	
?>
   <tr>
   <td colspan="2" align="center"><input type="submit" value="Guardar"></td>
   </tr>
  </tbody>
</table>
</form>


<table border="1">
	<tbody>
<?php

@$nombre = $_GET["txtNombre"];
@$apellido = $_GET["txtApellido"];

for($j=0;$j<count($nombre);$j++){

?>

<tr>
	<td><input type="radio" name="miRadio" onClick="muestramelo('<?php echo $nombre[$j]?>','<?php echo $apellido[$j]?>')"></td>
	<td><?php echo $nombre[$j];?></td>
	<td><?php echo $apellido[$j];?></td>
</tr>

<?php } ?>

</tbody>
</table>



</body>
</html>
