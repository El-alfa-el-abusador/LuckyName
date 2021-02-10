<html>
<body>
<form action="index.php" method="get">


  <select name="sel" class="form-select" aria-label="Default select example">
<option <?php if($_GET["sel"] == '4') echo"selected"; ?> > 4 </option>
<option <?php if($_GET["sel"] == '5') echo"selected"; ?> > 5 </option>
<option <?php if($_GET["sel"] == '6') echo"selected"; ?> > 6 </option>
<option <?php if($_GET["sel"] == '7') echo"selected"; ?> > 7 </option>
<option <?php if($_GET["sel"] == '8') echo"selected"; ?> > 8 </option>
<option <?php if($_GET["sel"] == '9') echo"selected"; ?> > 9 </option>
<option <?php if($_GET["sel"] == '10') echo"selected"; ?> > 10 </option>
  </select>
    
    <input type="submit" value="Enviar">
</form>

<?php
function generarCodigo($longitud) {
 $key = '';
 $pattern = 'abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
//Ejemplo de uso
 
echo generarCodigo ($_GET["sel"]); // genera un código de x caracteres de longitud.
?>

</body>
</html>