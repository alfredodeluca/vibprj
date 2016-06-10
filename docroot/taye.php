<html>
<head>
</head>
<body>  

<h2>Rellena tu CV</h2>
<?php
$nombre = $apellido = $contrasena = $dni = $sexo = "";
?>

<form method="post">  
  Nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>">
  <br><br>
  Apellido: <input type="text" name="apellido" value="<?php echo $apellido;?>">
  <br><br>
  Contrasena: <input type="text" name="contrasena" value="<?php echo $contrasena;?>">
  <br><br>
  DNI: <input type="text" name="dni" value="<?php echo $dni;?>">
  <br><br>
  Sexo:
  <input type="radio" name="sexo" value="Mujer">Mujer
  <input type="radio" name="sexo" value="Hombre">Hombre
  <br><br>
  <input type="submit" name="submit" value="Guardar Cambios"> <input type="submit" name="submit" value="Borrar los datos introducidos">  
</form>

<?php
echo $nombre;
echo "<br>";
echo $apellido;
echo "<br>";
echo $contrasena;
echo "<br>";
echo $dni;
echo "<br>";
echo $sexo;
?>

</body>
</html>
