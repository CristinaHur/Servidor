<?php
$decimal=$_REQUEST["decimal"];
$binario=decbin($decimal);
function limpiar_campo($decimal) {

    $decimal = trim($decimal); 
  
    $decimal = stripslashes($decimal); 
  
    $decimal = htmlspecialchars($decimal);  
  
  
    return $decimal;
  
echo $binario;

?>