<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<h2>Rellena tu CV</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nombre: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Apellido: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Contrasena: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  DNI: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Sexo:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Mujer") echo "checked";?> value="Mujer">Mujer
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Hombre") echo "checked";?> value="Hombre">Hombre
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Guardar Cambios"> <input type="submit" name="submit" value="Borrar los datos introducidos">  
</form>

<?php
echo "<h2>Your Input:</h2>";
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
