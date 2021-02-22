<?php
function generarCodigo($longitud) { 
 $key = '';
 $pattern = 'abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern[rand(0,$max)];
 return $key;
}
echo generarCodigo($_POST["longitud"]);

?>