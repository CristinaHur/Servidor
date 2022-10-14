<?php

$decimal=$_REQUEST["decimal"];
$tipo=$_REQUEST["tipo"];
$binario=decbin($decimal);
$octal=decoct($decimal);
$hexadecimal=dechex($decimal);
function limpiar_campo($decimal) {

   $decimal = trim($decimal);
 
   $decimal = stripslashes($decimal);
 
   $decimal = htmlspecialchars($decimal);  
 
 
   return $decimal;
 
    
 
 }
if($tipo == "binario"){
   echo "Binario: ".$binario; s
}else if($tipo == "octal"){
   echo "Octal: ".$octal;
}else if($tipo == "hexa"){
    echo "Hexadecimal: ".$hexadecimal;
}else if($tipo == "todos"){
   echo "Binario:".$binario"."Octal:".$octal."Hexadecimal:".$hexadecimal;

}

?>