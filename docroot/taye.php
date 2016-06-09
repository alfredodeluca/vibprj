<html>
<head>
</head>
<body>  

<h2>Rellena tu CV</h2>

<form method="post">  
  Nombre: <input type="text" name="nombre" value="">
  <br><br>
  Apellido: <input type="text" name="apellido" value="">
  <br><br>
  Contrasena: <input type="text" name="contrasena" value="">
  <br><br>
  DNI: <input type="text" name="dni" value="">
  <br><br>
  Sexo:
  <input type="radio" name="sexo" value="Mujer">Mujer
  <input type="radio" name="sexo" value="Hombre">Hombre
  <br><br>
  <input type="submit" name="submit" value="Guardar Cambios"> <input type="submit" name="submit" value="Borrar los datos introducidos">  
</form>

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
