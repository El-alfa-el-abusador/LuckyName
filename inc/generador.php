<?php
function generarCodigo($longitud) { 
 $pattern = 'aaaaaaaaaaaaa'.'bb'.'ccccc'.'dddddd'.'eeeeeeeeeeeeee'.'f'.'g'.'h'.'iiiiiii'.'j'.'k'.'lllll'.'mmm'.'nnnnnnn'.'ñ'.'ooooooooo'.'ppp'.'q'.'rrrrrrr'.'ssssssss'.'ttttt'.'uuuu'.'v'.'w'.'x'.'y'.'z';
 $pattern = 'ñaca';
 $max = strlen($pattern)-1;
 $pattern=str_shuffle($pattern);
 return substr($pattern, 0, $longitud);
}
echo generarCodigo($_POST["longitud"]);
?>